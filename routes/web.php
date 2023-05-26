<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;

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

Route::get('/warga/',[WargaController::class, 'index']);

Route::get('/warga/detail/{id_warga}',[WargaController::class, 'detail']);

Route::get('/warga/tambah',[WargaController::class, 'tambah']);
Route::post('/warga/store',[WargaController::class, 'store']);

Route::get('/warga/edit/{id_warga}',[WargaController::class, 'edit']);
Route::post('/warga/update',[WargaController::class, 'update']);

Route::get('/warga/hapus/{id_warga}',[WargaController::class, 'hapus']);

