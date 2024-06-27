<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function authentications()
    {
        return view('home.authentication');
    }

    public function testimonials()
    {
        return view('home.testimonials');
    }
}
