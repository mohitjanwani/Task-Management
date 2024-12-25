<?php

use App\Http\Controllers\Web\Auth\AdminUserAuthenticationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.master');
});

Route::name('auth.')->group(function(){
    Route::get('login',[AdminUserAuthenticationController::class,'showLoginForm'])->name('login');
    Route::get('register',[AdminUserAuthenticationController::class,'showRegisterForm'])->name('register');
});
