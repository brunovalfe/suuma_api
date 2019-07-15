<?php

use Illuminate\Http\Request;

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

Route::group(['middleware' => ['cors']], function(){
    Route::get('', 'ApiController@welcome');
    Route::post('login', 'ApiController@login');
    Route::post('register', 'ApiController@register');
});

Route::group(['middleware' => ['auth.jwt', 'cors', 'isActive']], function(){
    Route::post('refresh', 'ApiController@refresh');
    Route::get('logout', 'ApiController@logout');

    Route::get('user', 'ApiController@getAuthUser');

    Route::get('profile', 'ProfileController@index');
    Route::post('profile', 'ProfileController@store');
    Route::patch('profile/{id}/photo', 'ProfileController@update');

    Route::get('group', 'GroupController@index');


    // Admin features:
    Route::get('aprobar/usuarios', 'AdminPowers@index');
    Route::patch('aprobar/usuarios/{id}', 'AdminPowers@update');
});
