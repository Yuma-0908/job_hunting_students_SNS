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


Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'CompanyController@index');
    #Route::get('/index2', 'CompanyController@index2');
    Route::get('/comments', 'CompanyController@tweet');
    Route::get('/companies/{company}', 'CompanyController@show');
    Route::get('/companies/{company}/create', 'CompanyController@create');

    Route::post('/comments/{company}', 'CompanyController@store');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
