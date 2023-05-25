<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class AddMemberController extends Controller
{
    //
    function addData(Request $req){
        $member = new Members;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        return redirect('add');


    }
}
