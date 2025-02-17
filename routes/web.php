<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

Route::post('/convert-docx-to-pdf', [DocumentController::class, 'convertToPdf']);

Route::get('/upload', function () {
    return view('upload');
});
Route::get('/', function () {
    return view('welcome');
});
