<?php

// use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ListPengaduan;
use App\Http\Controllers\ardiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\landingPage;
use App\Http\Controllers\testing;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [landingPage::class, 'index'])->name('landing-page');
Route::get('/cari-data', [landingPage::class, 'cari'])->name('cari-data');

// Route::get('/auth/login', function () {
//     return view('pages.auth.login');
// });

Route::get('/auth/login', [AuthController::class, 'index']);
Route::post('/auth/login', [AuthController::class, 'store'])->name('authenticate');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/list-pengaduan', [ListPengaduan::class, 'index'])->name('list-pengaduan');
