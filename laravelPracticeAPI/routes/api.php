<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyApi;
use App\Http\Controllers\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('student1', [dummyApi::class, 'show1']);
    Route::post('student', [dummyApi::class, 'post']);
    Route::delete('student/{id}', [dummyApi::class, 'delete']);
    Route::get('student/{name}', [dummyApi::class, 'search']);
    Route::post('student/upload', [dummyApi::class, 'upload']);
    Route::put('student/{id}', [dummyApi::class, 'update']);
});
Route::get('student', [dummyApi::class, 'show']);


Route::post('student/login', [UserController::class, 'index']);