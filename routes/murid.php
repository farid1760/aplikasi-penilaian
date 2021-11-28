<?php

use App\Models\Penilaian;
use Illuminate\Support\Facades\Auth;
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
        $data = [
            "penilaians" => Penilaian::join('pengajarans', 'pengajarans.id', '=', 'penilaians.id_pengajaran')->join('mapels', 'mapels.id', '=', 'pengajarans.id_mapel')->join('gurus', 'gurus.id', '=', 'pengajarans.id_guru')->where('id_murid', Auth::user()->profile_murid)->get(),
        ];

        return view('murid.nilai.index', $data);
    })->name('murid.nilai');

});

