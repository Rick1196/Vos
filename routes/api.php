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

Route::post('searchOwner/','CondominiumController@searchOwner');
Route::post('selectOwner/','CondominiumController@selectOwner');
Route::get('getCasas/{user}','CondominiumController@getCasas');
Route::post('searchVisitor/','CondominiumController@searchVisitor');
Route::post('registerVisit/','VisitController@store');
Route::post('getVisitas/','VisitController@todas');

