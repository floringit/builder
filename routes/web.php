<?php

Route::get('/', 'PageController@index');
Route::get('/build', 'Builder\BuilderController@index');
Route::get('/editor', 'Builder\BuilderController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
