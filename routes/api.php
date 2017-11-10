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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//REST API for projects: only GET methods and public access so we are no using
//other middlewares, neither 'web' (no submitting, etc) nor 'auth' (full access)
//Route::group(['middleware' => ['web','auth:api']], function() { 
 
   Route::get('/proyectos','ProjectController@getApiIndex'); 
   Route::get('/proyectos/asc','ProjectController@getApiAsc');
   Route::get('/proyectos/desc','ProjectController@getApiDesc');
   Route::get('/proyectos/{slug}','ProjectController@getApiSingle');

//});