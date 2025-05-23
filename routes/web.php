<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\PermissionsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/card', function () {
    return view('card');
});



Route::controller(App\Http\Controllers\LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login')->middleware('guest');
    Route::post('authenticate', 'authenticate')->name('authenticate');
    Route::post('logout', 'logout')->name('logout')->middleware('auth');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('flights', FlightsController::class);
Route::get('/chart', [ChartController::class, 'index']);


Route::resource('permissions', PermissionsController::class);
Route::resource('roles', RolesController::class);
Route::resource('users', UsersController::class);
Route::resource('menus', MenusController::class);