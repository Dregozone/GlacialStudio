<?php

use App\Http\Controllers\AdminMessageController;
use App\Http\Controllers\StatsController;
use Illuminate\Support\Facades\Route;

Route::get('/messages/{identifier}/{token}', [AdminMessageController::class, 'apiIndex']);
Route::get('/stats/daily', [StatsController::class, 'daily'])->middleware('throttle:30,1');
