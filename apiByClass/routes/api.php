<?php

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student_api;
use App\Http\Controllers\studentController;

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
    Route::get('student', [student_api::class, 'show']);

});
Route::post('student/upload',[student_api::class,'upload']);

Route::get('student/{name}',[student_api::class,'search']);
Route::post('student/{id}',[student_api::class,'update']);
Route::post('student',[student_api::class,'post']);
Route::delete('student/{id}',[student_api::class,'delete']);
Route::post("login", [studentController::class, 'index']);