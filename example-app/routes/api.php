<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyApi;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('data/{id?}',[dummyApi::class,'getData']);
Route::post('data',[dummyApi::class,'add']);
Route::put('data',[dummyApi::class,'update']);
Route::delete('data/{id}',[dummyApi::class,'delete']);
Route::get('search/{string}',[dummyApi::class,'search']);
Route::post('validate',[dummyApi::class,'testData']);





