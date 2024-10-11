<?php

use App\Http\Controllers\UserController;
use Illuminate\Routing\Route;

Route::post('/register', [UserController::class, 'register']);
