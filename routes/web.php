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

Route::get('/', 'TDLController@index' );
Route::post('add', 'TDLController@create' )-> name('create');
Route::get('change/{id}', 'TDLController@update' )->name('update');
Route::get('remove/{id}', 'TDLController@delete' )->name('delete');
