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
Route::get('/concerts', 'NavController@concerts');
Route::get('/addSalle', 'NavController@addSalle');
Route::post('/updateSalleForm', 'NavController@updateSalleForm');
Route::post('/filter', 'NavController@filter');
Route::post('/updateConcertForm', 'NavController@updateConcertForm');

Route::post('/insertConcert', 'ConcertController@insertConcert');
Route::post('/insertSalle', 'ConcertController@insertSalle');
Route::post('/updateSalle', 'ConcertController@updateSalle');
Route::post('/updateConcert', 'ConcertController@updateConcert');
Route::post('/deleteSalle', 'ConcertController@deleteSalle');
Route::post('/deleteConcert', 'ConcertController@deleteConcert');

