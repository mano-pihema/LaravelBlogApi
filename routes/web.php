<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return 'welcome to blog api';
});

Route::put("blogs/{id}", [BlogController::class, 'update']);
Route::delete("blogs/{id}", [BlogController::class, 'delete']);
Route::resource('blogs', BlogController::class);
