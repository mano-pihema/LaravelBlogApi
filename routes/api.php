<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::put("blogs/{id}", [BlogController::class, 'update']);
Route::delete("blogs/{id}", [BlogController::class, 'delete']);
Route::resource('blogs', BlogController::class);
