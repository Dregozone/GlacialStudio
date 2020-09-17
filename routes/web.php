<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');
Route::get('/about', 'PagesController@about')->name('About');
Route::get('/products', 'PagesController@products')->name('Products');
Route::get('/portfolio', 'PagesController@portfolio')->name('Portfolio');

Route::post('/contact', 'PagesController@contact')->name('contact');
Route::get('/contact', 'PagesController@contact')->name('Contact');

Route::get('/news', 'PagesController@news')->name('News');
Route::get('/termsofservice', 'PagesController@termsofservice')->name('ToS');
Route::get('/privacypolicy', 'PagesController@privacypolicy')->name('Privacy');

Route::resource('pages', 'PagesController');
