<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home')->middleware('bot.protection');
Route::livewire('/privacy-policy', 'pages::privacy-policy')->name('privacy-policy');
Route::livewire('/terms-of-service', 'pages::terms-of-service')->name('terms-of-service');

Route::get('/my-ip', function () {
    return view('pages.my-ip', ['ip' => request()->ip()]);
})->name('my-ip');

Route::post('/contact', [FormController::class, 'submit'])->name('contact.submit');
