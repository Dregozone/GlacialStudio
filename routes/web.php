<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/home', [PagesController::class, 'home'])->name('home');




Route::get('/', [PagesController::class, 'home']);
