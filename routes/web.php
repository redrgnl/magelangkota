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
Route::group(['middleware' => 'usersession'], function () {
    //Route Admin
    Route::get('/admin/halaman-dashboard', 'AdminController@index');

    // Route hak akses / bidang
    Route::get('/admin/halaman-hak-akses', 'BidangController@bidang');
    Route::get('/admin/halaman-tambah-hak-akses', 'BidangController@addakses');
    Route::post('/admin/store-hak-akses', 'BidangController@storeakses');

    Route::get('/admin/edit-data-hak-akses/{id}', 'BidangController@halamanEditAkses');
    Route::post('/admin/update-akses', 'BidangController@updateakses');
    Route::get('/admin/delete-data-hak-akses/{id}', 'BidangController@deleteakses');

    //GRAFIK
    Route::get('/admin/halaman-tambah-grafik', 'GrafikController@tambah_graf');
    Route::get('/admin/halaman-list-grafik', 'GrafikController@grafik');
    Route::post('/admin/proses_tambahGraf', 'GrafikController@proses_tambahGraf');
    Route::get('/admin/delete-grafik/{id}', 'GrafikController@deletegraf');
    Route::get('/admin/edit-data-grafik/{id}', 'GrafikController@halamanEditGrafik');
    Route::post('/admin/update-grafik', 'GrafikController@updategrafik');
    Route::get('/admin/halaman-tampil-grafik/{id}', 'GrafikController@tampil_graf');
    Route::get('/admin/halaman-grafik/{id}', 'GrafikController@tampil_sub_graf');
    
    // users
    Route::get('/admin/halaman-pengguna', 'UsersController@users');
    Route::get('/admin/tambah-pengguna', 'UsersController@addUser');
    Route::post('/admin/store-pengguna', 'UsersController@storepengguna');

    Route::get('/admin/edit-data-pengguna/{id}', 'UsersController@halamanEditUser');
    Route::post('/admin/update-pengguna', 'UsersController@updatepengguna');
    Route::get('/admin/delete-data-pengguna/{id}', 'UsersController@deletepengguna');
    
    //SEKTOR
    Route::get('/admin/halaman-sektor', 'SektorController@sektor');
    Route::get('/admin/halaman-tambah-sektor', 'SektorController@addsektor');
    
    Route::post('/admin/store-sektor', 'SektorController@storesektor');
    Route::get('/admin/edit-data-sektor/{id}', 'SektorController@editsektor');
    Route::post('/admin/update-sektor', 'SektorController@updatesektor');
//    Route::get('/admin/delete-data-sektor/{id}', 'SektorController@deletesektor');
});

//login
Route::get('/login', 'AuthController@index')->name('login');
Route::post('/post-login', 'AuthController@postLogin');
Route::get('/logout', 'AuthController@logout');

Route::get('/', 'BerandaController@index')->name('beranda');

// ====== ajax metabase
Route::get('/ajax-metabase/{id}', 'GrafikController@ajax_metabase');

//halaman front office
Route::get('/homepage', 'GuestController@index');
Route::get('/guest/halaman-tampil-grafik/{id}', 'GuestController@tampil_graf');

Route::get('/guest/test', 'GuestController@guesttest');
Route::get('/cari', 'GuestController@loadData');
