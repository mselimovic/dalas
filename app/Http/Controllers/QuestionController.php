<?php

// app/Http/Controllers/QuestionController.php
namespace App\Http\Controllers;

use App\Models\Question;
use App\Mail\AdminInquiryNotification;
use App\Mail\UserInquiryConfirmation;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuestionController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'first_name'    => ['required', 'string', 'max:120'],
            'last_name'     => ['required', 'string', 'max:120'],
            'email'         => ['required', 'email', 'max:255'],
            'phone'         => ['required', 'string', 'max:30'],
            'customer_type' => ['required', 'in:Privatkunde,Gewerbekunde'],
            'message'       => ['required', 'string', 'max:5000'],
            'gdpr_rules'    => ['accepted'],
            'recaptcha_token' => ['required', 'string'],
        ]);
        $resp = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('services.recaptcha.secret'),
            'response' => $data['recaptcha_token'],
            'remoteip' => $request->ip(),
        ])->json();

        $ok = ($resp['success'] ?? false) &&
            (($resp['action'] ?? '') === 'contact') &&
            (($resp['score']  ?? 0) >= 0.5);

        if (! $ok) {
            return back()
                ->withErrors(['message' => 'reCAPTCHA-Überprüfung fehlgeschlagen. Bitte versuchen Sie es erneut.'])
                ->withInput();
        }

        try {
            $question = \App\Models\Question::create([
                'first_name'    => $data['first_name'],
                'last_name'     => $data['last_name'],
                'email'         => $data['email'],
                'phone'         => $data['phone'],
                'customer_type' => $data['customer_type'],
                'message'       => $data['message'],
                'gdpr_accepted' => true,
            ]);

            Mail::to($question->email)->send(new \App\Mail\UserInquiryConfirmation($question));
            Mail::to('info@dalas-pf.de')->send(new \App\Mail\AdminInquiryNotification($question));

            return redirect()->route('thankyou')->with([
                'thankyou' => true,
                'submitted_email' => $question->email,
            ]);
        } catch (\Throwable $e) {
            Log::error('Form submit failed', ['msg' => $e->getMessage()]);
            return redirect()
                ->route('form.fail')
                ->with([
                    'form_fail'      => true,
                    'form_error_msg' => 'Ihre Anfrage konnte nicht gesendet werden.',
                ]);
        }
    }
}
