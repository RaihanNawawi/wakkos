<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.homepage');

Route::view('/homepage', 'pages.homepage');

Route::view('/detailpage', 'pages.detailpage');

Route::view('/resultpage', 'pages.resultpage');

Route::view('/testpage', 'pages.testpage');

Route::view('/auth', 'components.auth');