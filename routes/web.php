<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StorePostRequest;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BajuLengkapController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/bajuLengkap/{id}', [BajuLengkapController::class, 'index']);

Auth::routes();

Route::get('/admin', [BajuController::class, 'index'])->middleware('auth');

Route::resource('/baju',BajuController::class)->middleware('auth');
Route::resource('/roles', RoleController::class)->middleware('role:admin');

