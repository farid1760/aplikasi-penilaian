<?php

use App\Http\Controllers\PengajaranController;
use App\Http\Controllers\PenilaianController;
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

    Route::get('guru/management-pengajaran', [PengajaranController::class, 'index'])
            ->name('guru.management-pengajaran');

    Route::post('guru/management-pengajaran/create-process', [PengajaranController::class, 'create'])
            ->name('guru.management-pengajaran.create-process');


    // Route::get('guru/management-penilaian/nilai/{id}', [PenilaianController::class, 'create'])
    //         ->name('guru.management-penilaian.nilai');



    Route::get('guru/management-penilaian', [PenilaianController::class, 'index'])
            ->name('guru.management-penilaian');

    Route::post('guru/management-penilaian/create-process', [PenilaianController::class, 'create'])
            ->name('guru.management-penilaian.create-process');



});

