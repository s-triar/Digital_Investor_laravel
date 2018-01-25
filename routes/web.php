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
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('authlogin');
Route::post('/login', 'Auth\LoginController@login')->name('authloginpost');
Route::post('/logout', 'Auth\LoginController@logout')->name('authlogout');
Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name('authregister');
Route::post('/register', 'Auth\RegisterController@register')->name('authregisterpost');
Route::get('/confirm-register/{token_register}', 'Auth\RegisterController@confirmRegister');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('authpassword.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('authpassword.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('authpassword.reset');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::get('/about-us', 'MainController@showAboutUs')->name('aboutus');
Route::get('/pencarian-usaha', 'MainController@showPencarianUsaha')->name('pencarianusaha');
Route::get('/SyaratdanKetentuan', 'MainController@showSyaratdanKetentuan')->name('SyaratdanKetentuan');
Route::get('/Jenis-Usaha', 'MainController@showjenisUsaha')->name('jenisUsaha');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login-admin', 'AdminAuth\LoginController@showLoginForm')->name('auth_adminlogin');
  Route::post('/login-admin', 'AdminAuth\LoginController@login')->name('auth_adminloginpost');
  Route::post('/logout-admin', 'AdminAuth\LoginController@logout')->name('auth_adminlogout');

  Route::get('/register-adminDigitalInvestor', 'AdminAuth\RegisterController@showRegistrationForm')->name('auth_adminregister');
  Route::post('/register-admin', 'AdminAuth\RegisterController@register')->name('auth_adminregister');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('auth_adminpassword.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('auth_adminpassword.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('auth_adminpassword.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'pengusaha'], function () {
  Route::get('/login', 'PengusahaAuth\LoginController@showLoginForm');
  Route::post('/login', 'PengusahaAuth\LoginController@login');
  Route::post('/logout', 'PengusahaAuth\LoginController@logout');

  Route::get('/register', 'PengusahaAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'PengusahaAuth\RegisterController@register');

  Route::post('/password/email', 'PengusahaAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'PengusahaAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'PengusahaAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'PengusahaAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'investor'], function () {
  Route::get('/login', 'InvestorAuth\LoginController@showLoginForm');
  Route::post('/login', 'InvestorAuth\LoginController@login');
  Route::post('/logout', 'InvestorAuth\LoginController@logout');

  Route::get('/register', 'InvestorAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'InvestorAuth\RegisterController@register');

  Route::post('/password/email', 'InvestorAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'InvestorAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'InvestorAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'InvestorAuth\ResetPasswordController@showResetForm');
});
