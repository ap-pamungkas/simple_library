<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::controller(RegisterController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});


Route::middleware('auth:sanctum')->group(function (){
        Route::controller(BookController::class)->group(function () {
            Route::get('/books', 'index');
            Route::get('/books/{id}', 'show');
            Route::post('/books', 'store');
            Route::put('/books/{id}', 'update');
            Route::delete('/books/{id}', 'destroy');
        });
});
