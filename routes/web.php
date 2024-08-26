<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::post('/login', [HomeController::class, 'login']);

Route::middleware([AuthMiddleware::class])->group(function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/messages', [HomeController::class, 'messages'])->name('messages');
    Route::post('/message', [HomeController::class, 'message'])->name('message');
});
