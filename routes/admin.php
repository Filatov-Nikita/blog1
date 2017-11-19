<?php
Route::get('/admin', 'AdminController@index');
Route::get('/admin/post', 'AdminController@postMenu');
Route::get('/admin/post/create', 'AdminController@postCreate');