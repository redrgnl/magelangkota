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
Route::get('/', 'AdminController@index');
Route::get('/admin/halaman-pengguna', 'AdminController@users');
Route::get('/admin/halaman-hak-akses-pengguna', 'AdminController@bidang');
Route::get('/admin/halaman-tambah-pengguna', 'AdminController@tambah_pengguna');
Route::get('/admin/halaman-list-grafik', 'AdminController@grafik');
Route::get('/admin/halaman-tambah-grafik', 'AdminController@tambah_graf');

Route::post('/admin/proses_tambahGraf', 'AdminController@proses_tambahGraf');


