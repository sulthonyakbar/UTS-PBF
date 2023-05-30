<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;

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
    Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');

    // Data Warga
    Route::get('/warga', [WargaController::class, 'index']);
    
    Route::get('/warga/detail/{id_warga}',[WargaController::class, 'detail']);
    
    Route::get('/warga/tambah',[WargaController::class, 'tambah']);
    Route::post('/warga/store',[WargaController::class, 'store']);
    
    Route::get('/warga/edit/{id_warga}',[WargaController::class, 'edit']);
    Route::post('/warga/update',[WargaController::class, 'update']);
    
    Route::get('/warga/hapus/{id_warga}',[WargaController::class, 'hapus']);


    // Data Inventaris
    Route::get('/inventaris', [InventarisController::class, 'index']);
    
    Route::get('/inventaris/detail/{id}',[InventarisController::class, 'detail']);
    
    Route::get('/inventaris/tambah',[InventarisController::class, 'tambah']);
    Route::post('/inventaris/store',[InventarisController::class, 'store']);
    
    Route::get('/inventaris/edit/{id}',[InventarisController::class, 'edit']);
    Route::post('/inventaris/update',[InventarisController::class, 'update']);
    
    Route::get('/inventaris/hapus/{id}',[InventarisController::class, 'hapus']);

    // Data Kategori
    Route::get('/category', [CategoryController::class, 'index']);
    
    Route::get('/category/tambah',[CategoryController::class, 'tambah']);
    Route::post('/category/store',[CategoryController::class, 'store']);

    Route::get('/category/edit/{id_category}',[CategoryController::class, 'edit']);
    Route::post('/category/update',[CategoryController::class, 'update']);

    Route::get('/category/hapus/{id_category}',[CategoryController::class, 'hapus']);
    
    // Data Artikel
    Route::get('/artikel', [ArticleController::class, 'index']);
    
    Route::get('/artikel/detail/{id_artikel}',[ArticleController::class, 'detail']);

    Route::get('/artikel/tambah',[ArticleController::class, 'tambah']);
    Route::post('/artikel/store',[ArticleController::class, 'store']);

    Route::get('/artikel/edit/{id_artikel}',[ArticleController::class, 'edit']);
    Route::post('/artikel/update',[ArticleController::class, 'update']);

    Route::get('/artikel/hapus/{id_artikel}',[ArticleController::class, 'hapus']);
});


// Route::get('/login', [LoginController::class, 'login']);
// Route::post('/login', [LoginController::class, 'login']);

// Route::get('/logout', [LoginController::class, 'logout']);

// Route::get('/warga/',[WargaController::class, 'index']);


