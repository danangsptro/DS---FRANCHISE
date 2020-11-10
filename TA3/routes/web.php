<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Backend
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('dasboard')->group(function () {
        Route::get('/admin', 'dsfranchice\backend\AdminController@index')->name('halaman-dasboard');
        Route::get('/footer', 'dsfranchice\backend\FooterController@index')->name('halaman-footer');
        Route::get('/create', 'dsfranchice\backend\FooterController@create')->name('create-footer');
        Route::post('/store', 'dsfranchice\backend\FooterController@store')->name('store-footer');
        Route::get('/edit/{footer}', 'dsfranchice\backend\FooterController@edit')->name('edit-footer');
        Route::post('/update', 'dsfranchice\backend\FooterController@update')->name('update-footer');
        Route::delete('/footer-delete/{id}', 'dsfranchice\backend\FooterController@destroy')->name('footer-delete');
        Route::resource('/merchant', 'dsfranchice\backend\MerchantController');
        Route::resource('/kategori', 'dsfranchice\backend\KategoriController');
        Route::resource('/artikel', 'dsfranchice\backend\ArtikelController');
        Route::resource('/jenis-artikel', 'dsfranchice\backend\JenisArtikelController');
        Route::get('/pendaftaran', 'dsfranchice\frontend\FormPendaftaranController@index')->name('pendaftaran');
        Route::delete('/pendaftaran-delete/{form}', 'dsfranchice\frontend\FormPendaftaranController@destroy')->name('pendaftaran-delete');
        Route::get('/upload-peluangUsaha', 'dsfranchice\frontend\UploadController@index')->name('upload-peluang');
        Route::get('/edit-upload/{id}', 'dsfranchice\frontend\UploadController@edit')->name('edit-upload');
        Route::post('/update-upload', 'dsfranchice\frontend\UploadController@update')->name('update-upload');
        Route::delete('peluangUsaha-delete/{upload}', 'dsfranchice\frontend\UploadController@destroy')->name('peluangusaha-delete');
        Route::resource('/carousel', 'dsfranchice\backend\CarouselController');
        Route::get('/edit-pendaftaran/{id}', 'dsfranchice\frontend\FormPendaftaranController@edit')->name('edit-pendaftaran');
        Route::post('/update-pendaftaran', 'dsfranchice\frontend\FormPendaftaranController@update')->name('update-pendaftaran');
        Route::resource('/jenis-testimoni', 'dsfranchice\backend\JenisTestimoniController');
        Route::resource('/testimoni', 'dsfranchice\backend\TestimoniController');
        Route::resource('/header', 'dsfranchice\backend\HeaderController');
    });
});


// Frontend
Route::prefix('platform-franchice')->group(function () {
    Route::get('/home', 'dsfranchice\frontend\HalamanController@index')->name('halaman');
    Route::get('/peluang', 'dsfranchice\frontend\PeluangController@index')->name('peluang');
    Route::resource('/makanan', 'dsfranchice\frontend\FnbController');
    Route::resource('/retail', 'dsfranchice\frontend\RetailController');
    Route::get('/makanan&minuman/{id}', 'dsfranchice\frontend\FnbdetailController@show')->name('detail');
    Route::get('/detail-berita/{id}', 'dsfranchice\frontend\DetailBeritaController@show')->name('detail-berita');
    Route::get('/upload', 'dsfranchice\frontend\UploadController@create')->name('upload');
    Route::post('upload-store', 'dsfranchice\frontend\UploadController@store')->name('store-upload');
    Route::resource('/humancapital', 'dsfranchice\frontend\HumanCapitalController');
    Route::resource('/afi-insight', 'dsfranchice\frontend\AfiInsightController');
    Route::get('/form-pendaftaran', 'dsfranchice\frontend\FormPendaftaranController@create')->name('create-pendaftaran');
    Route::post('/pendaftaran-store', 'dsfranchice\frontend\FormPendaftaranController@store')->name('store-pendaftaran');
    Route::get('/bermitra', 'dsfranchice\frontend\BermitraController@index')->name('bermitra');
    Route::get('/berlanggan', 'dsfranchice\frontend\BerlangganController@index')->name('berlanggan');
});
