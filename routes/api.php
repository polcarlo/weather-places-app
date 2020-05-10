<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::post('forecast/{city}', 'ForecastController@searchForecastByCity');

Route::get('place/category', 'VenueController@getCategories');
Route::get('place/near/{near}/{category}', 'VenueController@searchPlaces');
