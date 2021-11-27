<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Guru Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'is_guru'])->group(function () {

    Route::get('guru/dashboard', function () {
        return view('guru.dashboard');
    })->name('guru.dashboard');

});

