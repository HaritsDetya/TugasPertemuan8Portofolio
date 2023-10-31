<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pertemuan9Controller;
use App\Http\Controllers\SendEmailController;

Route::controller(Pertemuan9Controller::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::get('/login', 'login')->name('login');
    Route::post('/store', 'store')->name('store');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
Route::controller(SendEmailController::class)->group(function(){
    Route::get('/sendemail', 'index')->name('sendemail');
    Route::post('/register', 'store')->name('postemail');
});