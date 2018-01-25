<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('investor')->user();

    //dd($users);

    return view('investor.home');
})->name('home');

