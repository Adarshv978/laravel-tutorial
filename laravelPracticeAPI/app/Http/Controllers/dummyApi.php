<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\member;

class dummyApi extends Controller
{
    function show()
    {
        return student::all();
    }
    function show1()
    {
        return member::all();
    }
    function post(Request $req)
    {
        $member = new member;

        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $result = $member->save();
        if ($result) {
            return ['message' => 'Date has been inserted'];
        } else {
            return ['message' => 'Date has not been inserted'];

        }

        // return $member::all();
    }
    function delete($id)
    {
        $member = member::find($id);
        $result = $member->delete();
        if ($result) {
            return ['message' => 'Record has been deleted'];
        } else {
            return ['message' => 'Record has not been deleted'];

        }
    }
    function update(Request $req){
        $member = member::find($req->id);
        $member->id = $req->id;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;


        $result = $member->save();
        if($result){
            return["messsage" => "field has been updated"];
        }else{
            return["messsage" => "field has not been updated"];
        }
    }

    function search($name)
    {
        // $search = Members::find();
        return member::where('name', 'like', "%" . $name . "%")->get();
    }

    function upload(Request $req){
        return $req->file('file')->store('apiDocs');
    }
    function signIn(Request $req){
        
    }
   

}