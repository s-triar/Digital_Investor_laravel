<?php

// Route::get('/home', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('pengusaha')->user();

//     return view('pengusaha.home');
// })->name('home');
Route::get('/home', 'PengusahaController@showHome')->name('home');
Route::get('/isi-form-profile', 'PengusahaController@showFormIsiProfile')->name('isiprofile');
Route::post('/isi-form-profile', 'PengusahaController@postIsiProfileFirst')->name('isiprofilepost');
Route::get('/daftar-usaha', 'PengusahaController@showDaftarUsaha')->name('daftarUsaha');
Route::get('/detail-usaha', 'PengusahaController@showdetailUsaha')->name('detailUsaha');
Route::get('/Profile', 'PengusahaController@showprofile')->name('profile');
Route::get('/Tambah-Usaha', 'PengusahaController@showtambahUsaha')->name('tambahUsaha');
