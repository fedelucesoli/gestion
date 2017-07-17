<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'WebController@index')->name('inicio');

// 404 Municipio de lobos
// Route::get('/', 'WebController@index')->name('inicio');


// landings eventos
    // Controlador unico

// landing patrullas, vacunacion, programas

// backend general
  // backend gis
  // backend obras
  // backend eventos
  // backend landings
  // backend



// Group OBRAS
Route::get('/mapa', 'WebController@indexmapa')->name('mapa');
Route::get('/item/{slugadmin}', 'WebController@item')->name('web.item.detalle');
Route::get('/categoria/{id}', 'WebController@categoria')->name('web.categoria.list');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/items/list', 'AdminController@itemsList')->name('admin.item.list');
Route::get('/items/add', 'AdminController@itemsCreate')->name('admin.item.create');
Route::post('/items/add', 'AdminController@itemsAdd')->name('admin.item.add');

Route::get('/items/add/images', 'AdminController@uploadImages')->name('admin.item.image');

Route::post('/items/add/images', 'AdminController@postUpload')->name('admin.image.upload');
Route::post('upload/delete', 'AdminController@deleteUpload')->name('admin.image.remove');
