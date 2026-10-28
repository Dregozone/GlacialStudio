<?php

use App\Http\Controllers\AdminMessageController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\VisitBeaconController;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/meet-the-owner', 'pages::meet-the-owner')->name('meet-the-owner');
Route::livewire('/privacy-policy', 'pages::privacy-policy')->name('privacy-policy');
Route::livewire('/terms-of-service', 'pages::terms-of-service')->name('terms-of-service');

Route::get('/my-ip', function () {
    return view('pages.my-ip', ['ip' => request()->ip()]);
})->name('my-ip');

Route::post('/v', [VisitBeaconController::class, 'store'])->name('visits.beacon')->withoutMiddleware(ValidateCsrfToken::class);
Route::get('/archive', [VisitBeaconController::class, 'honeypot'])->name('visits.honeypot');

Route::post('/contact', [FormController::class, 'submit'])->name('contact.submit')->middleware([ProtectAgainstSpam::class, 'throttle:10,1']);

Route::get('/admin/messages/{identifier}/{token}', [AdminMessageController::class, 'index'])->name('admin.messages.index');
Route::patch('/admin/messages/{identifier}/{token}/{contactMessage}', [AdminMessageController::class, 'update'])->name('admin.messages.update');
Route::delete('/admin/messages/{identifier}/{token}/{contactMessage}', [AdminMessageController::class, 'destroy'])->name('admin.messages.destroy');
