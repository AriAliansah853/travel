<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

use App\Http\Controllers\Auth\AuthController;


Route::post('/convert-docx-to-pdf', [DocumentController::class, 'convertToPdf']);
Route::get('/generate1', [DocumentController::class, 'generate1']);
// Route::get('/login', [Auth::class, 'login'])->name('login');


Route::get('/upload', function () {
    return view('upload');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard route (only accessible if logged in)
Route::middleware(['auth'])->get('dashboard', function () {
    return view('welcome');
})->name('dashboard');