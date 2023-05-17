<?php

use App\Http\Controllers\ComicController;
// use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [PageController::class, 'index'])->name('homepage');
Route::get('/', [ComicController::class, 'index'])->name('homepage');
Route::resource('/comics', ComicController::class);
