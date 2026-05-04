<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function(){
    Route::livewire('/login', 'auth.login')->name('login');
});
