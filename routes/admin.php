<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'is_admin'])->group(function () {

    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('admin/management-guru', function () {
        return view('admin.management-guru.index');
    })->name('admin.management-guru');

    Route::get('admin/management-murid', function () {
        return view('admin.management-murid.index');
    })->name('admin.management-murid');
    
    Route::get('admin/management-jurusan', function () {
        return view('admin.managament-jurusan.index');
    })->name('admin.management-jurusan');

    Route::get('admin/management-mapel', function () {
        return view('admin.management-mapel.index');
    })->name('admin.management-mapel');

});

