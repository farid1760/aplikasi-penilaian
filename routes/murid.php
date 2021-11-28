<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Murid Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'is_murid'])->group(function () {

    Route::get('murid/dashboard', function () {
        return view('murid.dashboard');
    })->name('murid.dashboard');

    Route::get('murid/nilai', function () {
        return view('murid.nilai.index');
    })->name('murid.nilai');

});

