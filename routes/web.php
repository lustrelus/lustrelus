<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\PostController;

Route::controller(BaseController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/about', 'about');
    Route::get('/socials', 'socials');
});

Route::controller(WriterController::class)->group(function () {
    Route::get('/writer', 'index');
});

// Resource routes!
Route::resource('posts', PostController::class);
