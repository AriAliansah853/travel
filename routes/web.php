<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CmsSetting;
use App\Http\Controllers\Auth\AuthController;


Route::post('/convert-docx-to-pdf', [DocumentController::class, 'convertToPdf']);
Route::get('/generate1', [DocumentController::class, 'generate1']);
// Route::get('/login', [Auth::class, 'login'])->name('login');


Route::get('/upload', function () {
    return view('upload');
});


// nanti kasih auth


Route::get('/api/banner-promosi', [CmsSetting::class, 'getData']);
Route::post('/api/banner-promosi', [CmsSetting::class, 'store']);
Route::delete('/api/banner-promosi/{id}', [CmsSetting::class, 'destroy']);




Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('coba', [DashboardController::class, 'showMenu'])->name('coba');


Route::middleware(['auth'])->get('/', [DashboardController::class, 'showMenu'])->name('dashboard');
Route::middleware(['auth'])->get('dashboard', [DashboardController::class, 'showMenu'])->name('dashboard');
Route::middleware(['auth'])->get('setting-cms', [CmsSetting::class, 'SettingCms'])->name('setting-cms');