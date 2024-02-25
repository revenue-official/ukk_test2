<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

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

Route::controller(PegawaiController::class)->group(function () {
    Route::get('/', 'index')->name('pegawai.index');
    Route::get('/pegawai/create', 'create')->name('pegawai.create');
    Route::post('/pegawai', 'store')->name('pegawai.store');
    Route::get('/pegawai/{pegawai}', 'show')->name('pegawai.show');
    Route::get('/pegawai/{pegawai}/edit', 'edit')->name('pegawai.edit');
    Route::put('/pegawai/{pegawai}', 'update')->name('pegawai.update');
    Route::delete('/pegawai/{pegawai}', 'destroy')->name('pegawai.destroy');
});
