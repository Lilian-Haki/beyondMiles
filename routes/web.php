<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;

Route::livewire('/', \App\Livewire\Home::class)->name('home');
Route::livewire('/gym', \App\Livewire\Gym::class)->name('gym');
Route::livewire('/shop', \App\Livewire\Shop::class)->name('shop');
Route::livewire('/activities', \App\Livewire\Activities::class)->name('activities');
Route::livewire('/login', \App\Livewire\Login::class)->name('login');
Route::livewire('/register', \App\Livewire\Register::class)->name('register');
