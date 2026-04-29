<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua data gallery dari database
        $galleries = \App\Models\Gallery::all();

        return view('welcome', compact('galleries'));
    }

    public function fullGallery()
    {
        $galleries = [];
        return view('welcome', compact('galleries')); 
    }
}