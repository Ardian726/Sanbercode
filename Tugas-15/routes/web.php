<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;

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

Route::get('/register', [HomeController::class, 'bio']);

Route::get('/',  [HomeController::class, 'utama']);

Route::post('/kirim', [HomeController::class, 'kirim']);

Route::get('/data-table', function(){
    return view('halaman.data-table');
});

Route::get('/table', function(){
    return view('halaman.table');
});


//CRUD

//Create
//Form untuk tambah kategori
Route::get('/kategori/create', [KategoriController::class, 'create']);
//Untuk kirim data ke dalam database
Route::post('/kategori', [KategoriController::class, 'store']);

//READ
//Tampil semua
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/{kategori_id}', [KategoriController::class, 'show']);

//UPDATE
//Form untuk update kategori
Route::get('/kategori/{kategori_id}/edit', [KategoriController::class, 'edit']);
Route::put('/kategori/{kategori_id}', [KategoriController::class, 'update']);

//DELETE
//Delete berdasarkan id
Route::delete('/ketegori/{kategori_id}', [KategoriController::class, 'destroy']);