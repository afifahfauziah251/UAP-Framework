<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\KuliahController;
use App\Models\Kuliah;
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

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');

Route::get('/tambahdosen', [DosenController::class, 'tambahdosen'])->name('tambahdosen');
Route::post('/insertdata', [DosenController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [DosenController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [DosenController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [DosenController::class, 'delete'])->name('delete');

Route::get('/kuliah', [KuliahController::class, 'index'])->name('kuliah');