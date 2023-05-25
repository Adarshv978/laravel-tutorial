<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class student_api extends Controller
{
    //
    function show()
    {
        return student::all();
    }

    function delete($id)
    {
        $student = student::find($id);
        $result = $student->delete();
        if ($result) {
            return ['statuse' => 'recoord has been deleted'];
        } else {
            return ['statuse' => 'record is not deleted'];
        }
    }

    function post(Request $req)
    {
        $student = new student();
        $student->name = $req->name;
        $student->phone = $req->phone;
        $student->email = $req->email;
        $result = $student->save();
        if ($result) {
            return ['statuse' => 'New Record has been added'];
        } else {
            return ['statuse' => 'New Record has not been added'];

        }
    }
    function update(Request $req)
    {
        $student = student::find($req->id);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;

        $result = $student->save();
        if ($result) {
            return ['statuse' => 'record has been updated'];
        } else {
            return ['statuse' => 'record has not been updated'];

        }
    }

    function upload(Request $req){
        return $req->file('file')->store('apiDocs');
    }

    function search($name)
    {
        return student::where('name', 'like', "%" . $name . "%")->get();
    }
}