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
Route::middleware(['cors'])->group(function () {
    //ユーザ系
    Route::get('/user/userName', 'UserController@userName');
    Route::Post('/user/userPage', 'UserController@userPage');

    //チケット系
    Route::post('/ticket/create', 'TicketController@create');
    Route::post('/ticket/delete', 'TicketController@delete');
});
