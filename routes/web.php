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

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home','HomeController@index');

//not yükle
Route::get('not-yukle','NotYukleController@index')->name('not-yukle');

Route::post('not-ekle','NotYukleController@not_ekle');

Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);

Route::post('upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);

//sepetim
Route::get('sepetim','SepetimController@index')->name('sepetim');

Route::get('hesabim','HesabimController@index')->name('hesabim');

Route::get('mesajlar','MesajlarController@index')->name('mesajlar');

Route::get('yorumlar','YorumlarController@index')->name('yorumlar');

Route::get('satin-aldiklarim','SatinAldiklarimController@index')->name('satin-aldiklarim');

Route::get('yuklediklerim','YuklediklerimController@index')->name('yuklediklerim');

Route::get('kisisel','AyarlarController@index')->name('kisisel');

Route::post('kisisel-ekle','AyarlarController@kisisel');

Route::get('not-ara','NotAraController@index')->name('not-ara');

// Giriş sayfası not ARAMA
Route::post('not-ara-giris','NotAraController@not_ara');

Route::get('not-detay/{not_id}','NotAraController@not_detay');

Route::get('not-detay-satinalinan/{not_id}','NotAraController@not_detay_satin');

// Route::post('not-detay','NotAraController@not_detay');

Route::post('sepete-ekle','SepetimController@index');

Route::post('not-satinal','NotAraController@not_satinal');


Route::get('ayarlar',function(){
  return view('profile.ayarlar.iletisim');
})->name('ayarlar');




Route::get('egitim','AyarlarController@egitim')->name('egitim');

Route::post('egitim-ekle','AyarlarController@egitim_ekle');

Route::get('iletisim','AyarlarController@iletisim')->name('iletisim');

Route::post('iletisim-ekle','AyarlarController@iletisim_ekle');

Route::get('banka','AyarlarController@banka')->name('banka');

Route::post('banka-ekle','AyarlarController@banka_ekle');


//admin işlemleri
Route::get('admins','AdminController@index')->name('admins');

Route::get('uyeler','AdminController@uyeler')->name('uyeler');

Route::post('user-durum','AdminController@user_durum');

Route::get('notlar','AdminController@notlar')->name('notlar');

Route::post('not-durum','AdminController@not_durum');

Route::post('kullanici-ara','AdminController@kullanici_ara');
