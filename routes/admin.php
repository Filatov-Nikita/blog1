<?php
Route::get('/', 'AdminController@index')->name('admin.index');
Route::get('/post/create', 'ArticlesAdminController@postCreate')->name('admin.createPost');
Route::get('/post/edit', 'ArticlesAdminController@postEdit')->name('admin.editPost');
Route::get('/post/edit/{id}', 'ArticlesAdminController@postEditById')->name('admin.getPostById');
Route::post('/post/create', 'ArticlesAdminController@postCreateSend');
Route::post('/post/edit/{id}', 'ArticlesAdminController@postEditSend')->name('admin.postEditById');
Route::get('/post/delete', 'ArticlesAdminController@postDeletePage')->name('admin.deletePostPage');
Route::get('/post/delete/{id}', 'ArticlesAdminController@postDelete')->name('admin.postDeleteById');
Route::get('/project/create', 'ProjectsAdminController@projectCreate')->name('admin.createProject');
Route::post('/project/create', 'ProjectsAdminController@projectCreateSend')->name('admin.createProjectSend');
Route::get('/project/delete', 'ProjectsAdminController@projectDelete');
Route::get('/project/edit', 'ProjectsAdminController@projectsList')->name('admin.projectEdit');
Route::get('/project/edit/{id}', 'ProjectsAdminController@projectById')->name('admin.editProject');
Route::post('/project/edit/{id}', 'ProjectsAdminController@projectEditSend');
Route::get('/project/delete', 'ProjectsAdminController@projectDelete')->name('admin.projectDelete');
Route::get('/project/delete/{id}', 'ProjectsAdminController@projectDeleteById')->name('admin.projectDeleteById');