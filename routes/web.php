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

Route::get('/', function () {
    return view('home.home');
});

Route::get('/api/country/{country_id}', "CountryController@show");

Route::get('/api/search', 'CountryController@allCountries');

Route::get('/api/search/{term}', 'CountryController@search');
Route::get('/country', "CountryController@index");

Route::get('/profile', "UserController@indexProfile")->middleware("auth");
Route::post('/userSave', "UserController@store")->middleware("auth");