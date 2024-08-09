<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('kontak', function () {
    return view('kontak');
});

Route::get('abaout', function () {
    return view('abaout');
});