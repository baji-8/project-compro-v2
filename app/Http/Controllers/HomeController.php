<?php

namespace App\Http\Controllers;

use App\Models\Service; // Tambahkan Model Service
use App\Models\Gallery; // Tambahkan Model Gallery
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua data layanan (Electrical & Mechanical)
        $services = Service::all();

        // Mengambil hanya 6 data gallery terbaru untuk dokumentasi project
        $galleries = Gallery::latest()->take(6)->get();

        // Kirim kedua variabel ke view 'welcome'
        return view('welcome', compact('services', 'galleries'));
    }

    public function fullGallery()
    {
        // Mengambil semua data gallery untuk halaman gallery terpisah
        $galleries = Gallery::latest()->get();
        
        return view('gallery-all', compact('galleries')); 
    }
}