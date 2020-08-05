<?php

Route::get('/', 'FrontController@index');

Route::get('/customer', 'FrontController@customer');
Route::get('/service', 'FrontController@service');
Route::get('/knowledge', 'FrontController@knowledge');
Route::get('/document', 'FrontController@document');
Route::get('/contact', 'FrontController@contact');
