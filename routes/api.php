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

//mpshh
Route::get("siswa", "SiswaController@index");
Route::get("siswa/{id}", "SiswaController@indexId");
Route::post("siswa", "SiswaController@create");
Route::putenv(setting)("siswa/{id}", "SiswaController@update");
Route::delete("siswa/{id}", "SiswaController@delete");
