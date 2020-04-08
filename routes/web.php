<?php

use Illuminate\Support\Facades\Route;

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

// OWNER
Route::get('/owner', 'collectionController@home');
Route::get('/owner/add', 'collectionController@add');
Route::post('/owner/create', 'collectionController@create');
Route::get('/owner/{id}/edit', 'collectionController@edit');
Route::post('/owner/{id}/update', 'collectionController@update');
Route::get('/owner/{id}/delete', 'collectionController@delete');

// VISITOR
Route::get('/visitor', 'visitorController@home');
Route::get('/visitor/addrent', 'visitorController@addrent');

