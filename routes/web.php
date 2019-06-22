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
Route::get('/car', 'CarController@allCars');
Route::get('/newcar', 'CarController@index');
Route::post('/register_car','CarController@newCar');
Route::get('/car/{id}', 'CarController@particularcar');
//Route::get('/car', 'CarController@newCar');

Route::get('/review','ReviewsController@allReviews');
Route::get('/newreview','ReviewsController@index');
Route::post('/register_review','ReviewsController@newReview');