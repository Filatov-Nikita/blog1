<?php

Route::get('/login', 'LoginController@getLogin')->name('site.main.login');
Route::get('/logout', 'LoginController@getLogout')->name('site.main.logout')->middleware('auth');
Route::post('/auth/login', 'LoginController@login')
        ->name('site.main.postLogin');
Route::post('/login', 'LoginController@registration')
        ->name('site.main.registration');