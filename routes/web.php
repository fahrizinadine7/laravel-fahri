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

Route::get('/master', function () {
    return view('template.master');
});

Route::get('/form', function () {
    return view('form');
});