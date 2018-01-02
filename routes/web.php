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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('pagseguro','PagSeguroController@pagseguro')->name('pagseguro');
Route::get('pagseguro-lightbox','PagSeguroController@lightbox')->name('pagseguro.lightbox');
Route::post('pagseguro-lightbox-code','PagSeguroController@lightboxCode')->name('pagseguro.lightbox.code');
Route::get('pagseguro-transparente','PagSeguroController@transparente')->name('pagseguro.transparente');
Route::post('pagseguro-transparente-code','PagSeguroController@getCode')->name('pagseguro.transparente.code');
Route::post('pagseguro-billet','PagSeguroController@billet')->name('pagseguro.billet');
Route::get('pagseguro-transparente-card','PagSeguroController@card')->name('pagseguro.transparente.card');
Route::post('pagseguro-transparente-card-transaction','PagSeguroController@cardTransaction')->name('pagseguro.transparente.transaction');
*/

Auth::routes();

Route::get('/','StoreController@index')->name('home');
Route::get('carrinho','StoreController@cart')->name('cart');
Route::get('perfil','UserController@profile')->name('profile');
Route::get('add-cart/{id}','CartController@add')->name('add.cart');
Route::get('remove-cart/{id}','CartController@remove')->name('remove.cart');
Route::get('logout','UserController@logout')->name('logout');







