<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Validator;
use Hash;

class StudentController extends Controller
{
    // Fetching the all student data
    public function getStudent()
    {
        return Student::all();
    }

    // Register the student 
    public function register(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'first_name' => 'required|string|min:2',
            'last_name' => 'required|string|min:2',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'city' => 'required|string|min:3',
            'address' => 'required|string|min:3',
            'password' => 'required|string|min:2',
            'confirm_password' => 'required|string|min:2',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        } else {
            if ($req->password == $req->confirm_password) {
                $password = Hash::make($req->password);
                $confirmPassword = Hash::make($req->confirm_password);
                $student = new Student();
                $student->first_name = $req->first_name;
                $student->last_name = $req->last_name;
                $student->email = $req->email;
                $student->phone = $req->phone;
                $student->city = $req->city;
                $student->address = $req->address;
                $student->password = $password;
                $student->confirm_password = $confirmPassword;
                $result = $student->save();
                if ($result) {
                    return response()->json(['statuse' => 'OK', 'message' => 'student has been registered'],200);
                }else{
                    return response()->json(['statuse' => 'Fail', 'message' => 'student has not been registered'],403);                    
                }
            } else {
                return response()->json(['statuse' => 'fail', 'message' => 'password does not match'], 401);
            }

        }
    }
    public function logIn(Request $req){
        return $req;
    }

}