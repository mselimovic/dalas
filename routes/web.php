<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [PageController::class, 'index'])->name('homepage');
Route::get('/uber-uns', [PageController::class, 'about'])->name('about');
Route::get('/dienstleistungen', [PageController::class, 'services'])->name('services');
Route::get('/kontakt', [PageController::class, 'contact'])->name('contact');
Route::get('/datenschutz', [PageController::class, 'policy'])->name('policy');
Route::get('/impressum', [PageController::class, 'impressum'])->name('impressum');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::post('/kontakt', [QuestionController::class, 'submit'])->name('submit.form');
Route::get('/fehler', function (Request $request) {
    if (! $request->session()->has('form_fail')) {
        return redirect()->route('contact'); 
    }
    return view('pages.form-error');
})->name('form.fail');
Route::get('/danke', function (Request $request) {
    if (! $request->session()->has('thankyou')) {
        return redirect()->route('contact'); 
    }
    return view('pages.thank-you');
})->name('thankyou');

