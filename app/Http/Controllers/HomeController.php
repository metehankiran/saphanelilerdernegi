<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Create a new message
        return redirect()->back()->with('success', 'Thank you for your message. It has been sent.');
    }

    public function project()
    {
        return view('project');
    }

    public function projectDetail($id=null)
    {
        return view('project-detail', compact('id'));
    }

    public function service()
    {
        return view('services');
    }

    public function serviceDetail($id=null)
    {
        return view('service-detail', compact('id'));
    }

    public function faq()
    {
        return view('faq');
    }

    public function founders()
    {
        return view('founders');
    }

    public function events()
    {
        return view('events');
    }

    public function eventDetail($id=null)
    {
        return view('event-detail', compact('id'));
    }

    public function category($id=null)
    {
        return view('category', compact('id'));
    }

    public function authentications()
    {
        return view('authentication');
    }

    public function testimonials()
    {
        return view('testimonials');
    }

    public function notFound()
    {
        return view('404');
    }

    public function privacyPolicy()
    {
        return view('privacy');
    }

    public function termsAndConditions()
    {
        return view('terms');
    }
}
