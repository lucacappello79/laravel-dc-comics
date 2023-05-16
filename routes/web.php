<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('homepage');
Route::resource('/comics', ComicController::class);
