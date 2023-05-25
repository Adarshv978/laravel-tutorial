<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController1;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AddMemberController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('user',[UserController::class,'index']);
Route::get('user1',[UserController1::class,'getData']);
Route::get('api',[UserController1::class,'apiData']);
// Route::view('/profile','profile');
Route::get('/profile{lang}',function($lang){
    App::setLocale($lang);
    return view('profile');
});

Route::view('/uplode','uplode');
Route::post('uplode',[UploadController::class,'index']);
Route::get('/list',[MemberController::class,'show']);
Route::get('delete/{id}',[MemberController::class,'delete']);
Route::get('edit/{id}',[MemberController::class,'showData']);
Route::get('edit',[MemberController::class,'update']);



Route::view('/add','addMember');
Route::post('/add',[AddMemberController::class,'addData']);






