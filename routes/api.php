<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/news', [PostController::class, 'index']);

Route::get('/news/{id}', [PostController::class, 'show']);

Route::put('/news/{id}', [PostController::class, 'hide']);
