<?php

Route::get('/', function()
{
   return View::make('Frontend.index');
});
Route::get('/customer', function()
{
   return View::make('Frontend.Customer.customer');
});
Route::get('/service', function()
{
   return View::make('Frontend.Service.service');
});
Route::get('/knowledge', function()
{
   return View::make('Frontend.Knowledge.knowledge');
});
Route::get('/document', function()
{
   return View::make('Frontend.Document.document');
});
Route::get('/contact', function()
{
   return View::make('Frontend.Contact.contact');
});
