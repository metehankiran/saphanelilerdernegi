<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('home.category.index');
    }

    public function show($id)
    {
        return view('home.category.show', compact('id'));
    }
}
