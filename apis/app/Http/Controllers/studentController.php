<?php

namespace App\Http\Controllers;

use Auth;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\student;

use Validator;

class studentController extends Controller
{

    function getData()
    {
        return student::all();
    }


    public function register(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required|string|email',
            'password' => 'required|string',
            'address' => 'required|string'

        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        } else {
            $hash = Hash::make($req->password);
            $abc = bcrypt($req->password);
            $student = new student();
            $student->name = $req->name;
            $student->email = $req->email;
            $student->address = $req->address;
            $student->password = $hash;
            $result = $student->save();
            if ($result) {
                return ['statuse' => 'New Record has been added'];
            } else {
                return ['statuse' => 'New Record has not been added'];
            }
        }
    }
    public function registerdelete($id)
    {
        $student = student::find($id);
        $result = $student->delete();
        if ($result) {
            return ['message' => 'record has been deleted'];
        } else {
            return ['message' => 'record has not been deleted'];
        }
    }
    public function signIn(Request $req)
    {        
        // $student = student::where('email', $req->email)->get();
        $student = student::where('email',$req->email)->first();
        

        // return $student->createToken('authoToken');
        return $student;

        if(!Hash::check($req->password,$student->password)){
            $token = $student->createToken('authToken');
        }
        $data= [
            'data'=>$student,
            'accessToken'=>$token

        ];
        return $data;

        // return response()->json(['access token'=>'634rsx77ydsgf773e2iwxshjwuey21uw','data'=>$student]);
        
        
    }

}