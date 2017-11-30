<?php
Route::get('/admin', 'AdminController@index')->middleware('auth')->name('admin.index');
Route::get('/admin/post/create', 'AdminController@postCreate')->name('admin.createPost');
Route::get('/admin/post/edit', 'AdminController@postEdit')->name('admin.editPost');
Route::get('/admin/post/edit/{id}', 'AdminController@postEditById')->name('admin.getPostById');
Route::post('/admin/post/create', 'AdminController@postCreateSend');
Route::post('/admin/post/edit/{id}', 'AdminController@postEditSend');