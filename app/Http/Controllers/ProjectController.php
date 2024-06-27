<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('home.project.index');
    }

    public function show($id)
    {
        return view('home.project.show', compact('id'));
    }
}
