<?php

use App\Livewire\Auth\AuthLogin;
use App\Livewire\Auth\AuthRegister;
use App\Livewire\Auth\AuthDashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', AuthLogin::class)->name('login');
Route::get('/register', AuthRegister::class)->name('register');
Route::get('/dashboard', AuthDashboard::class)->name('dashboard');