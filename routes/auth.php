<?php

Route::get('/login', 'LoginController@getLogin')->name('site.main.login');
Route::get('/logout', 'LoginController@getLogout')->name('site.main.logout')->middleware('auth');
Route::post('/login', 'LoginController@postLogin')
        ->name('site.main.postlogin');