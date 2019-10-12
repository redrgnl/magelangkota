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

//Route::get('/', function () {
//    return view('welcome');
//});
//// master
//Route::get('/master', 'MasterController@index');
//// dashboard
//Route::get('/halaman-dashboard-admin', 'DashboardController@index');
//// user
//Route::get('/halaman-daftar-pengguna', 'UserController@index');
//Route::get('/halaman-tambah-pengguna', 'UserController@tambah');
//Route::post('/proses-tambah', 'UserController@prs_tambah');
//// menu dinamic metabase
//Route::get('/halaman-sektor/{id}', 'DashboardController@sektor');

//Route Admin
Route::get('/admin/halaman-dashboard', 'AdminController@index');

// Route hak akses / bidang

Route::get('/admin/halaman-hak-akses', 'AdminController@bidang');
Route::get('/admin/halaman-tambah-hak-akses', 'AdminController@addakses');
Route::post('/admin/store-hak-akses', 'AdminController@storeakses');

Route::get('/admin/edit-data-hak-akses/{id}', 'AdminController@halamanEditAkses');
Route::post('/admin/update-akses', 'AdminController@updateakses');
Route::get('/admin/delete-data-hak-akses/{id}', 'AdminController@deleteakses');

// grafik
Route::post('/admin/proses_tambahGraf', 'GrafikController@proses_tambahGraf');
Route::get('/admin/halaman-tambah-grafik', 'GrafikController@tambah_graf');
Route::get('/admin/halaman-list-grafik', 'GrafikController@grafik');

// users
Route::get('/admin/halaman-pengguna', 'AdminController@users');
Route::get('/admin/tambah-pengguna', 'AdminController@addUser');
Route::post('/admin/store-pengguna', 'AdminController@storepengguna');

Route::get('/admin/edit-data-pengguna/{id}', 'AdminController@halamanEditUser');
Route::post('/admin/update-pengguna', 'AdminController@updatepengguna');
Route::get('/admin/delete-data-pengguna/{id}', 'AdminController@deletepengguna');

