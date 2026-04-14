<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/gym', 'pages::gym')->name('gym');
Route::livewire('/shop', 'pages::shop')->name('shop');
Route::livewire('/activities', 'pages::activities')->name('activities');
