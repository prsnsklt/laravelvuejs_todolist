<?php

use Illuminate\Http\Request;
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

Route::get("todolist/delete{id}","ApiTodolistController@getDelete");
Route::post("todolist/update{id}","ApiTodolistController@postUpdate");
Route::get("todolist/create","ApiTodolistController@postCreate");
Route::get("todolist/list","ApiTodolistController@getList");

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

