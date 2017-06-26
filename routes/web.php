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
Route::get('logout', 'Auth\AuthController@getLogout');
// Route::get('admin/login', 'Auth\LoginController');






Auth::routes();

Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('/items/list', 'AdminController@itemsList')->name('admin.item.list');
Route::get('/items/add', 'AdminController@itemsCreate')->name('admin.item.create');
Route::post('/items/add', 'AdminController@itemsAdd')->name('admin.item.add');

Route::get('/items/add/images', 'AdminController@uploadImages')->name('admin.item.image');

Route::post('/items/add/images', 'AdminController@postUpload')->name('admin.image.upload');
Route::post('upload/delete', 'AdminController@deleteUpload')->name('admin.image.remove');
