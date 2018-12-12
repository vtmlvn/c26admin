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
Route::get('/admin/home','InvoicesController@index')->name('admin');
Route::get('/admin/customer','Controller@customer')->name('customer');
Route::get('/admin/member','MembershipController@index')->name('member');
Route::get('/admin/pegawai','KaryawanController@index')->name('pegawai');
Route::get('/admin/pengeluaran','PengeluaranController@index')->name('pengeluaran');

Route::resource('admin/home','InvoicesController');
Route::resource('invoices','InvoicesController');
Route::resource('pegawai','KaryawanController');
Route::resource('member','MembershipController');
Route::resource('pengeluaran','PengeluaranController');
Route::get('generate-pdf/{id}', 'InvoicesController@pdfview')->name('generate-pdf');