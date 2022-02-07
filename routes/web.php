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


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@home')->name('home');

// Register
Route::post('/register', 'Auth\RegisterController@register')->name('register');

// Login
Route::post('/login', 'Auth\LoginController@login')->name('login');

// Logout
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// Create - Store
Route::get('/post/create', 'HomeController@create')->name('create');

Route::post('/post/store', 'HomeController@store')->name('store');