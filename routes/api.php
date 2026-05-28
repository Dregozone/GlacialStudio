<?php

use App\Http\Controllers\AdminMessageController;
use Illuminate\Support\Facades\Route;

Route::get('/messages/{identifier}/{token}', [AdminMessageController::class, 'apiIndex']);
