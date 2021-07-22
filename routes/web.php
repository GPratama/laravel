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

Route::get('/login','usercontroller@login')->name('login');
Route::post('/postlogin','usercontroller@postlogin')->name('postlogin');
Route::middleware('auth')->get('/','usercontroller@home')->name('home');
Route::get('/register','usercontroller@register')->name('register');
Route::post('/postregister','usercontroller@postregister')->name('postregister');

Route::middleware('auth')->resource('kategori','kategoricontroller');
Route::middleware('auth')->resource('produk','produkcontroller');
Route::post('/logout','usercontroller@logout')->name('logout');