<?php

use Illuminate\Support\Facades\Route;

Route::get('/designs', [App\Http\Controllers\DesignController::class, 'index']);
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
