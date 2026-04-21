<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', \App\Livewire\Home::class)->name('home');
Route::livewire('/gym', \App\Livewire\Gym::class)->name('gym');
Route::livewire('/shop', \App\Livewire\Shop::class)->name('shop');
Route::livewire('/activities', \App\Livewire\Activities::class)->name('activities');
