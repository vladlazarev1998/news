<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/news', [PostController::class, 'index']);

Route::get('/news/{slug}', [PostController::class, 'show']);

Route::put('/news/{slug}', [PostController::class, 'hide']);
