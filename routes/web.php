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

//Route Admin
Route::get('/admin/halaman-dashboard', 'AdminController@index');

// Route hak akses / bidang
Route::get('/admin/halaman-hak-akses', 'BidangController@bidang');
Route::get('/admin/halaman-tambah-hak-akses', 'BidangController@addakses');
Route::post('/admin/store-hak-akses', 'BidangController@storeakses');

Route::get('/admin/edit-data-hak-akses/{id}', 'BidangController@halamanEditAkses');
Route::post('/admin/update-akses', 'BidangController@updateakses');
Route::get('/admin/delete-data-hak-akses/{id}', 'BidangController@deleteakses');

// grafik fix
//Route::get('/admin/halaman-tambah-grafik', 'GrafikController@tambah_graf');
//Route::get('/admin/halaman-list-grafik', 'GrafikController@grafik');
//Route::post('/admin/proses_tambahGraf', 'GrafikController@proses_tambahGraf');
//Route::get('/admin/delete-grafik/{id}', 'GrafikController@deletegraf');
//Route::get('/admin/edit-data-grafik/{id}', 'GrafikController@halamanEditGrafik');
//Route::post('/admin/update-grafik', 'GrafikController@updategrafik');

//====================== Bagus ==========================//
Route::get('/admin/halaman-tambah-grafik', 'GrafikController@tambah_graf');
Route::get('/admin/halaman-list-grafik', 'GrafikController@grafik');
Route::post('/admin/proses_tambahGraf', 'GrafikController@proses_tambahGraf');
Route::get('/admin/delete-grafik/{id}', 'GrafikController@deletegraf');
Route::get('/admin/edit-data-grafik/{id}', 'GrafikController@halamanEditGrafik');
Route::post('/admin/update-grafik', 'GrafikController@updategrafik');

//====================== bagus ===========================//

// users
Route::get('/admin/halaman-pengguna', 'UsersController@users');
Route::get('/admin/tambah-pengguna', 'UsersController@addUser');
Route::post('/admin/store-pengguna', 'UsersController@storepengguna');

Route::get('/admin/edit-data-pengguna/{id}', 'UsersController@halamanEditUser');
Route::post('/admin/update-pengguna', 'UsersController@updatepengguna');
Route::get('/admin/delete-data-pengguna/{id}', 'UsersController@deletepengguna');

//Route::get('login', 'AuthController@index')->name('login');
//Route::post('post-login', 'AuthController@postLogin');
//Route::get('logout', 'AuthController@logout');
//
//Route::get('/', 'BerandaController@index')->name('beranda');
//
//Route::get('/home', 'HomeController@index')->name('home');
