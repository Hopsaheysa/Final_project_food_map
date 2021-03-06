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
Route::get('/api/user', 'UserController@showUser');
Route::get('/api/allUsers', 'UserController@allUsers');
Route::post('/api/addAdmin/{searchTerm}', 'UserController@addAdmin');
Route::post('/api/recipe/save', 'RecipeController@addRecipe');

Route::get('/api/search/{term}', 'CountryController@search');
Route::get('/country', "CountryController@index");

Route::get('/recipe/{id}', "RecipeController@show");

Route::get('/profile', "UserController@indexProfile")->middleware("auth");
Route::post('/userSave', "UserController@store")->middleware("auth");
Route::post('/api/removeIngredient/{id}', "UserController@removeIngredient")->middleware("auth");

Route::get('/api/recipe/{id}', "RecipeController@fetchRecipe")->middleware("auth");
Route::get('/api/review/{id}', "RecipeController@fetchReview")->middleware("auth");
Route::post('/api/recipe/{id}/review', 'RecipeController@storeReview')->middleware('auth');
Route::post('/api/recipe/{recipe_id}/review/{review_id}', 'RecipeController@updateReview');
Route::post('/api/removeReview/{id}', 'RecipeController@removeReview')->middleware("auth");
Route::post('/api/editReview/{id}', 'RecipeController@editReview')->middleware("auth");



Route::get('/disliked', "UserController@dislikedIngredients")->middleware("auth");
