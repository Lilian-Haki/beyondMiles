<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;

Route::livewire('/', \App\Livewire\Home::class)->name('home');
Route::livewire('/gym', \App\Livewire\Gym::class)->name('gym');
Route::livewire('/shop', \App\Livewire\Shop::class)->name('shop');
Route::livewire('/activities', \App\Livewire\Activities::class)->name('activities');
Route::livewire('/login', \App\Livewire\Login::class)->name('login');
Route::livewire('/register', \App\Livewire\Register::class)->name('register');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
