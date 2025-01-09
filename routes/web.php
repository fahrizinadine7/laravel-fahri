<?php

use Illuminate\Support\Facades\Route;

Route::get('/tugas1', function () {
    return view('buatakun');
});


Route::get('/', function () {
    return view('media');
});


Route::get('/selesai', function () {
    return view('selamat');
});
