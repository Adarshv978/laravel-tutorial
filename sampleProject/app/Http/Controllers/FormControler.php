<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormControler extends Controller
{
    //
    function getData(Request $req){
        echo 'Form Submited';
        return $req->input();
    }
}
