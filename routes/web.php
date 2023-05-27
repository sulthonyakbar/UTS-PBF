<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\LoginController;

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::post('/', [LoginController::class, 'loginPost'])->name('login');
    
    // untuk admin
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'doRegister'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/warga', [WargaController::class, 'index']);
    Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/warga/detail/{id_warga}',[WargaController::class, 'detail']);
    
    Route::get('/warga/tambah',[WargaController::class, 'tambah']);
    Route::post('/warga/store',[WargaController::class, 'store']);
    
    Route::get('/warga/edit/{id_warga}',[WargaController::class, 'edit']);
    Route::post('/warga/update',[WargaController::class, 'update']);
    
    Route::get('/warga/hapus/{id_warga}',[WargaController::class, 'hapus']);
});


// Route::get('/login', [LoginController::class, 'login']);
// Route::post('/login', [LoginController::class, 'login']);

// Route::get('/logout', [LoginController::class, 'logout']);

// Route::get('/warga/',[WargaController::class, 'index']);


