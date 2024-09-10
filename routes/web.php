<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function (){
//    return redirect()->route('login');
//});

Route::view('/welcome', 'welcome')->name('welcome');
Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
