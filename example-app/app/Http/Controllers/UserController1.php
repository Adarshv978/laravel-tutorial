<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;
use App\Models\User;

class UserController1 extends Controller
{
    //
    function getData()
    {
        return User::all();
    }

   
    function apiData()
    {
        //  return  Http::get('https://api.publicapis.org/entries');
        $data = Http::get('https://dummyjson.com/users');

        return view('userList', ['collection' => $data['users']]);

    }
}