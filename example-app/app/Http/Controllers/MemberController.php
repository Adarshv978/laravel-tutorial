<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class MemberController extends Controller
{
    //
    function show(){
        // $data = Members::all();
        $data = Members::paginate(5);
        return view('list',['members'=>$data]);

    }
    function delete($id){
        $data =Members::find($id);
        $data ->delete();
        return redirect('list');
    }

    function showData($id){
        $data = Members::find($id);
        return view('addMember',['edit'=> $data]);
    }

    function update(Request $req){
        $data = Members::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->save();
        return redirect('list');

    }

   


}
