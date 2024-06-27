<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('home.event.index');
    }

    public function show($id)
    {
        return view('home.event.show', compact('id'));
    }
}
