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
    return view('welcome');
});

Route::get('pagseguro','PagSeguroController@pagseguro')->name('pagseguro');
Route::get('pagseguro-lightbox','PagSeguroController@lightbox')->name('pagseguro.lightbox');
Route::post('pagseguro-lightbox-code','PagSeguroController@lightboxCode')->name('pagseguro.lightbox.code');
Route::get('pagseguro-transparente','PagSeguroController@transparente')->name('pagseguro.transparente');
Route::post('pagseguro-transparente-code','PagSeguroController@getCode')->name('pagseguro.transparente.code');
Route::post('pagseguro-billet','PagSeguroController@billet')->name('pagseguro.billet');


