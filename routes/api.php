<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\MeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::post('login', LoginController::class);
Route::post('register', RegisterController::class);

Route::middleware(['auth:sanctum']) -> group(function () {
  Route::get('me', [MeController::class, 'show']);
});
