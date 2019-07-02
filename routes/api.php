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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/', function (){
    return response()->json([
        'message' => "Welcome to the future. Suuma API"
    ]);
});

Route::get('', function(Request $request){
    return response()->json([
        'status' => 'OK',
        'message' => 'Welcome to Suuma API v1.0'
    ]);
});
Route::post('login', 'ApiController@login');
Route::post('register', 'ApiController@register');



Route::group(['middleware' => ['auth.jwt', 'cors']], function(){

    Route::get('logout', 'ApiController@logout');

    Route::get('user', 'ApiController@getAuthUser');

    Route::get('profile', 'ProfileController@index');
    Route::post('profile', 'ProfileController@store');

    Route::get('group', 'GroupController@index');
});
