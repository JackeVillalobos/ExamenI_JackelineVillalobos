<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 

    Route::get('/directorio', [DirectorioController::class, 'index'])->name('directorio.inicio');

    Route::get('/directorio/crear', [DirectorioController::class, 'create'])->name('directorio.crear');

    Route::get('/directorio/ver', [DirectorioController::class, 'ver'])->name('directorio.ver');

    Route::get('/directorio/eliminar', [DirectorioController::class, 'delete'])->name('directorio.delete');

    Route::get('directorio/destroy/{id}', [DirectorioController::class, 'destroy'])->name('directorio.destroy');

