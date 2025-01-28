<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', Home::class)->name('home');
Route::post('/contact', [FormController::class, 'submit'])->name('contact.submit');
