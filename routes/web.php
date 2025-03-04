<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     return view("welcome");
// });

Route::get('/', [ArticleController::class, 'index']);
Route::get('/register', [AuthController::class, 'register']);
