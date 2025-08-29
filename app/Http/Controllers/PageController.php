<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('homepage.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        return view('pages.services');   
    }
    public function contact()
    {
        return view('pages.contact');   
    }
    public function policy()
    {
        return view('legal.privacy');   
    }

    public function impressum()
    {
        return view('legal.impressum');   
    }

    public function faq()
    {
        return view('pages.faq');   
    }
}
