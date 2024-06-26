<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('home.blog.index');
    }

    public function show($id)
    {
        return view('home.blog.show', compact('id'));
    }
}
