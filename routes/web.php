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
Route::get('/admin/home','InvoicesController@index')->name('home.index');
Route::get('/admin/customer','Controller@customer')->name('customer');
Route::get('/admin/member','MembershipController@index')->name('member');
Route::get('/admin/pegawai','KaryawanController@index')->name('pegawai');

Route::get('/admin/masuk','PemasukanController@index')->name('masuk');
Route::get('/admin/keluar','PengeluaranController@index')->name('keluar');

Route::get('/admin/laporanC','CEOLaporanController@index')->name('laporanC');
Route::get('/admin/laporanS','SuperLaporanController@index')->name('laporanS');

Route::resource('admin/home','InvoicesController');
Route::resource('invoices','InvoicesController');
Route::resource('pegawai','KaryawanController');
Route::resource('member','MembershipController');
Route::get('generate-pdf/{id}', 'InvoicesController@pdfview')->name('generate-pdf');

Route::get('/layanan','Controller@layanan')->name('layanan');
Route::get('/membership','Controller@membership')->name('membership');
Route::get('/tentangkami','Controller@tentangkami')->name('tentangkami');
Route::get('/lacaklaundry','Controller@lacaklaundry')->name('lacaklaundry');
Route::get('/ceksaldo','Controller@ceksaldo')->name('ceksaldo');