<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.master');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route Jabatan
Route::get('/update', [UpdateController::class, 'index']);
Route::get('/update/form', [UpdateController::class, 'create']);
Route::post('/update/store', [UpdateController::class, 'store']);
Route::get('/update/edit/{id}', [UpdateController::class, 'edit']);
Route::put('/update/{id}', [UpdateController::class, 'update']);
Route::delete('/update/{id}', [UpdateController::class, 'destroy']);

//route karyawan
Route::get('/pengiriman', [PengirimanController::class, 'index']);
// Route::get('/home', [PengirimanController::class, 'index']);

Route::get('/pengiriman/form', [PengirimanController::class, 'create']);
Route::post('/pengiriman/store', [PengirimanController::class, 'store']);
Route::get('/pengiriman/edit/{id}', [PengirimanController::class, 'edit']);
Route::put('/pengiriman/{id}', [PengirimanController::class, 'update']);
Route::delete('/pengiriman/{id}', [PengirimanController::class, 'destroy']);