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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all/transactions', 'HomeController@all')->name('all');
Route::get('/info/{id}', 'HomeController@info')->name('info');
Route::get('/cancel/{id}', 'HomeController@cancelled')->name('cancelled');
Route::get('/pay/{id}', 'HomeController@paid')->name('paid');
Route::post('/save', 'HomeController@save')->name('save');
Route::post('/edit/user', 'HomeController@edit_user')->name('save_user');