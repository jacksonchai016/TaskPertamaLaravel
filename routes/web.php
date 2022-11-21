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

Route::resource('admin/category', 'App\\Http\\Controllers\\Admin\categoryController');
Route::resource('admin/user-role', 'App\\Http\\Controllers\\Admin\userRoleController');
Route::resource('admin/reservation_status', 'App\\Http\\Controllers\\Admin\reservation_statusController');
Route::resource('admin/missing_items_status', 'App\\Http\\Controllers\\Admin\missing_items_statusController');
Route::resource('admin/attendance', 'App\\Http\\Controllers\\Admin\attendanceController');
Route::resource('admin/reservation', 'App\\Http\\Controllers\\Admin\reservationController');
Route::resource('admin/schedule', 'App\\Http\\Controllers\\Admin\scheduleController');
Route::resource('admin/replacement_class', 'App\Http\Controllers\Admin\replacement_classController');
Route::get('/laporan/replacement_class', [LaporanController::class, 'index']);
Route::get('/laporan/replacement_class/pdf', [LaporanController::class, 'cetak_pdf']);