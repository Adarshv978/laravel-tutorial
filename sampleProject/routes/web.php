<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\data;
use App\Http\Controllers\FormControler;


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
    // echo $name;
    return view('welcome');
});
// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/about', function () {
    // echo $name;
    return view('about');
});

// Route::get('/dataPassing/{data}', function ($data) {
//     // echo $name;
//     return view('dataPassing',['data'=>$data]);
// });

Route::get('data',[data::class,'loadData']);

Route::view('users','/users');

Route::get('show',[Controller::class,'show']);

Route::post('form',[FormControler::class,'getData']);
Route::view('login','userlogIn');
Route::view('noaccess','/noaccess');

Route::group(['middleware'=>['protectedPage']],function(){
    Route::view('users','/users');
});
