<?php

use Illuminate\Support\Facades\Route;

// Kita pakai cara string (Manual Path) untuk menghindari ParseError ::class
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/gallery', 'App\Http\Controllers\HomeController@fullGallery')->name('gallery.all');