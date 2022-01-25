<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/products', [PagesController::class, 'products'])->name('products');
Route::get('/portfolio', [PagesController::class, 'portfolio'])->name('portfolio');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [PagesController::class, 'contactSubmit']);

Route::get('/news', [PagesController::class, 'news'])->name('news');
Route::get('/tos', [PagesController::class, 'tos'])->name('tos');
Route::get('/pp', [PagesController::class, 'pp'])->name('pp');

Route::get('/', [PagesController::class, 'home']);
