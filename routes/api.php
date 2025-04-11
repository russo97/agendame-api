<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\MeController;
use App\Http\Controllers\Auth\LoginController;

Route::post('login', LoginController::class);

Route::middleware(['auth:sanctum']) -> group(function () {
  Route::get('me', [MeController::class, 'show']);
});
