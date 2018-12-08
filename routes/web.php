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

Route::get('/','Controller@index')->name('index');
Route::get('/admin/home','Controller@admin')->name('admin');
Route::get('/admin/customer','Controller@customer')->name('customer');
Route::get('/admin/member','Controller@member')->name('member');
Route::get('/admin/pegawai','Controller@pegawai')->name('pegawai');

Route::resource('/admin','KaryawanController');