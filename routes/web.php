<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // Mengarah ke file index.blade.php
});
