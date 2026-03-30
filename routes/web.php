<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/privacy-policy', 'pages::privacy-policy')->name('privacy-policy');
Route::livewire('/terms-of-service', 'pages::terms-of-service')->name('terms-of-service');

Route::post('/contact', [FormController::class, 'submit'])->name('contact.submit');
