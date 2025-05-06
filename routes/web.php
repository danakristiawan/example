<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/chart', function () {
    return view('chart');
});

Route::get('/card', function () {
    return view('card');
});