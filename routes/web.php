<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\UserController;

Auth::routes();

Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
 
    Route::get('/users', [UserController::class,'index'])->name('users.index');
    Route::get('/users/{user}/edit', [UserController::class,'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class,'update'])->name('users.update');
    Route::get('/chat', function () {
        return view('chat');
    })->name('chat');
});