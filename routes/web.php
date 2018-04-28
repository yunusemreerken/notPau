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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('sepetim','SepetimController@index')->name('sepetim');

Route::get('hesabim','HesabimController@index')->name('hesabim');

Route::get('mesajlar','MesajlarController@index')->name('mesajlar');

Route::get('yorumlar','YorumlarController@index')->name('yorumlar');

Route::get('satin-aldiklarim','SatinAldiklarimController@index')->name('satin-aldiklarim');

Route::get('yuklediklerim','YuklediklerimController@index')->name('yuklediklerim');

Route::get('kisisel','AyarlarController@index')->name('kisisel');

Route::get('ayarlar',function(){
  return view('profile.ayarlar.iletisim');
})->name('ayarlar');


Route::get('egitim','AyarlarController@egitim')->name('egitim');

Route::get('iletisim','AyarlarController@iletisim')->name('iletisim');

Route::get('banka','AyarlarController@banka')->name('banka');
