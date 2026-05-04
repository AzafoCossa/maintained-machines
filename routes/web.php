<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){
    Route::livewire('/login', 'auth.login')->name('login');
});

Route::middleware('auth')->group(function(){
    Route::get('/', function(){
        return redirect()->route('dashboard.home');
    })->name('home');

    
    Route::prefix('dashboard')->name('dashboard.')->group(function(){
        Route::livewire('/', 'dashboard.home')->name('home');
    });
});