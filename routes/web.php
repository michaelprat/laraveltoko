<?php

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

Route::get('/', function () {
    return view('halamansignup');
});

Route::resource('home','utama');
Route::resource('produk','dataproduk');
Route::resource('detail','datadetail');
Route::resource('penjualan','datapenjualan');
Route::resource('kategori','datakategori');
Route::resource('pelanggan','datapelanggan');
Route::resource('all','datasemua');
Route::get('signup','UsersController@signup')->name('signup');
Route::post('signup','UsersController@signup_store')->name('signup.store');
Route::get('login','SessionController@login')->name('login');
Route::post('login','SessionController@login_store')->name('login.store');
Route::get('logout','SessionController@logout')->name('logout');
