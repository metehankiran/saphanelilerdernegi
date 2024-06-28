<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Feedback;
use Illuminate\Http\Request;

class CorporateController extends Controller
{
    public function about()
    {
        return view('home.corporate.about');
    }

    public function testimonials()
    {
        $feedbacks = Feedback::get();
        return view('home.corporate.testimonials', compact('feedbacks'));
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
        $faqs = FAQ::where('enabled', true)->get();
        return view('home.corporate.faq', compact('faqs'));
    }

    public function founders()
    {
        return view('home.corporate.founders');
    }
}
