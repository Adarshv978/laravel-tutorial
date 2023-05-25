<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\StudentController;

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
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    // Route::post('login', 'AuthController@login');
    // Route::post('logout', 'AuthController@logout');
    // Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');

});


Route::post('login', [ApiController::class, 'login']);
Route::post('register', [ApiController::class, 'register']);
Route::post('authenticate', [ApiController::class, 'authenticate']);

// Students Route
Route::post('s/register',[StudentController::class,'registerStudent']);
Route::post('s/login',[StudentController::class,'authenticateStudent']);
Route::post('s/abc',[StudentController::class,'login']);

Route::get('s/register',[StudentController::class,'get']);


