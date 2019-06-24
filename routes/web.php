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

Route::get('/home', 'CarController@home');
Route::get('/car', 'CarController@allCars');
Route::get('/newcar', 'CarController@index');
Route::post('/register_car','CarController@newCar');
Route::post('/search', 'CarController@particularCar');

Route::get('/review','ReviewsController@allReviews');
Route::get('/newreview','ReviewsController@index');
Route::post('/register_review','ReviewsController@newReview');