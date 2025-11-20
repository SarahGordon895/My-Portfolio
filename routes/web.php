<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::post('/contact', [HomeController::class, 'send'])->name('contact.send');
// Home page route
Route::get('/', [HomeController::class, 'index']);
Route::get('/download-cv', [HomeController::class, 'downloadCv'])->name('cv.download');
