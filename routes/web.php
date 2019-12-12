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

    //Route CCTV
    Route::get('/admin/halaman-cctv', 'CctvController@index');
    Route::get('/admin/halaman-tambah-cctv', 'CctvController@addCctv');
    Route::get('/admin/edit-data-cctv/{id}', 'CctvController@halamanEditCctv');
    Route::post('/admin/update-cctv', 'CctvController@updateCctv');

    Route::post('/admin/store-cctv', 'CctvController@storeCctv');
    Route::get('/admin/delete-cctv/{id}', 'CctvController@deleteCctv');

    //harga pasar
    Route::get('/admin/harga-pasar', 'AdminController@iframeharga');
    
});

//login
Route::get('/login', 'AuthController@index')->name('login');
Route::post('/post-login', 'AuthController@postLogin');
Route::get('/logout', 'AuthController@logout');

// ====== ajax metabase
Route::get('/ajax-metabase/{id}', 'GrafikController@ajax_metabase');

//halaman front office
Route::get('/', 'GuestController@index');
Route::get('/guest/halaman-tampil-grafik/{id}', 'GuestController@tampil_graf'); //tampil grafik guest

// autocomplete ajax public
Route::post('/autocomplete/fetch', 'GrafikController@fetch')->name('autocomplete.fetch'); //live search box
// autocomplete ajax admin
Route::post('/autocomplete_admin/fetch', 'GrafikController@fetch_admin')->name('autocomplete_admin.fetch'); //live 
Route::post('/autocomplete_guest/fetch', 'GuestController@fetch_guest')->name('autocomplete_guest.fetch'); //live 

Route::post('/modaldata/fetch', 'GuestController@fetchsektor')->name('modaldata.fetch'); //modal search button kategori
Route::post('/modaldataadmin/fetch', 'AdminController@fetchadminsektor')->name('modaldataadmin.fetch'); //modal search button kategori admin

//text blade
Route::get('/admin/testblade', 'AdminController@testbl');
