<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MuridController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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
    

    

    Route::get('admin/management-guru', [GuruController::class, "index"])
    ->name('admin.management-guru');
    
    Route::post('admin/management-guru/create-process', [GuruController::class, "create"])
    ->name('admin.management-guru.create-process');
    
    
    
    
    
    Route::get('admin/management-murid', [MuridController::class, "index"])
    ->name('admin.management-murid');
    
    Route::post('admin/amanagement-murid/create-process', [MuridController::class, "create"])
            ->name('admin.management-murid.create-process');

            
            

            
            Route::get('admin/management-jurusan',[JurusanController::class, "index"])
            ->name('admin.management-jurusan');
            
            Route::post('admin.management-jurusan/create-process', [JurusanController::class, "create"])
            ->name('admin.management-jurusan.create-process');
            
            
            
            
            Route::get('admin/management-mapel',[MapelController::class, "index"])
            ->name('admin.management-mapel');
            
            Route::post('admin.management-mapel/create-process', [MapelController::class, "create"])
                    ->name('admin.management-mapel.create-process');





    Route::get('admin/management-kelas', [MapelController::class, "index"])
            ->name('admin.management-kelas');

            Route::post('admin.management-kelas/create-process', [KelasController::class, "kelas"])
                    ->name('admin.management-kelas.create-process');










});

