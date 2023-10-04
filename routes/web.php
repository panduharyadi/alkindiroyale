<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\RoomsController;
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

// Routes Landing Pages Alkindi
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms');
Route::get('/promo', [PromoController::class, 'index'])->name('promo');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');


// Routes admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/store', [AdminController::class, 'store'])->name('store');