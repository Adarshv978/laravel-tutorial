<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use Validator;

class dummyApi extends Controller
{

    function add(Request $req)
    {

        $member = new Members;
        $member->id = $req->id;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $result = $member->save();
        if ($result) {
            return ['result' => 'done'];

        } else {
            return ['statuse' => 'fail'];
        }
    }

    function update(Request $req)
    {
        $member = Members::find($req->id);
        $member->id = $req->id;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $result = $member->save();
        if ($result) {
            return ['result' => 'done'];

        } else {
            return ['statuse' => 'fail'];
        }
    }

    function delete($id)
    {
        // $member = Members::find($id);
        // $result = $member->delete();
        // echo $result;
        // if ($result) {
        //     return ["statuse" => "success"];
        // } 
        $member = Members::findOrFail($id);
        $result = $member->delete();
        if($result){
            return ["statuse"=>"Record has been deleted"];
        }else{
            return ["statuse"=>""];

        }
        

    }

    function search($name)
    {
        // $search = Members::find();
        return Members::where('name', 'like', "%" . $name . "%")->get();
    }
    function testData(Request $req)
    {
        $rules = array(
            "name" => "required | max:4"
            //"name"=>"required | max:4"

        );
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            return ['statuse' => 'success'];

        }

    }
}






function getData($id = null)
{

    $data = $id ? Members::find($id) : Members::all();
    return $data;
}