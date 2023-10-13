<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
