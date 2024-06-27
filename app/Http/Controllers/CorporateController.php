<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateController extends Controller
{
    public function about()
    {
        return view('home.corporate.about');
    }

    public function testimonials()
    {
        return view('home.corporate.testimonials');
    }

    public function privacy()
    {
        return view('home.corporate.privacy');
    }

    public function terms()
    {
        return view('home.corporate.terms');
    }

    public function faq()
    {
        return view('home.corporate.faq');
    }

    public function founders()
    {
        return view('home.corporate.founders');
    }
}
