<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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

    Route::get('guru/management-nilai', function () {
        $data = [
            'action' => route("guru.management-nilai.create-process")
        ];

        return view('guru.management-nilai.index', $data);
    })->name('guru.management-nilai');



    Route::post('guru/management-nilai/create-process', function (Request $request) {
        
    })->name('guru.management-nilai.create-process');
});

