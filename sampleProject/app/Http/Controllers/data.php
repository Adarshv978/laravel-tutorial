<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class data extends Controller
{
    //
   
    function loadData(){
        $data = ['Adarsh' ,'Rishabh','Mukesh'];
        return view('users',['name' =>$data]);
    }
}
