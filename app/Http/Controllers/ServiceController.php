<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('home.service.index');
    }

    public function show($id)
    {
        return view('home.service.show', compact('id'));
    }
}
