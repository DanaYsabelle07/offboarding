<?php

use Illuminate\Support\Facades\Route;

Route::get('/Page1', function () {
    return view('page1');
});

Route::get('/Page2', function () {
    return view('page2');
});