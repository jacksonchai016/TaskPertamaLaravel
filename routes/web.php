<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });


Route::resource('admin/mahasiswa', 'App\Http\Controllers\Admin\mahasiswaController');
Route::resource('admin/buku', 'App\Http\Controllers\Admin\bukuController');
Route::resource('admin/admin', 'App\Http\Controllers\Admin\AdminController');
Route::get('/laporan/replacement_class', [LaporanController::class, 'index']);
Route::get('/laporan/replacement_class/pdf', [LaporanController::class, 'cetak_pdf']);
