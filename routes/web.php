<?php

use Illuminate\Support\Facades\Route;

Route::view('/homepage', 'homepage');

Route::view('/detailpage', 'detailpage');

Route::view('/resultpage', 'resultpage');


Route::get('/testpage', function () {
    return view('testpage');
});

Route::get('/auth', function () {
    return view('components.auth');
});