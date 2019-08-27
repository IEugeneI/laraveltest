<?php

use Illuminate\Http\Request;
use App\COUNTRY;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::resource('country', 'COUNTRYController');
//Route::resource('country/getAllCountries', 'COUNTRYController@getAllCountries');
Route::get('getAllCountries','COUNTRYController@getAllCountries');
Route::get('getCountryBNameyISO3/{name}','COUNTRYController@getCountryBNameyISO3');
Route::get('getCountryIDByName/{id}','COUNTRYController@getCountryIDByName');
Route::get('getCitiesByCountryID/{id}','CITYController@getCitiesByCountryID');
Route::get('getCitiesByCountryISO3/{id}','CITYController@getCitiesByCountryISO3');
