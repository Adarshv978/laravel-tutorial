<?php

namespace App\Http\Controllers;
use Auth;
use JWTAuth;
use Validator;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Exceptions\JWTException;




class StudentController extends Controller
{
  

    function get()
    {
        return student::all();
    }

    function registerStudent(Request $req)
    {
        $data = $req->only('name', 'email', 'phone', 'password');
        $validator = Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|email|unique:students',
            'phone' => 'required|numeric|digits:10',
            'password' => 'required|string|min:6|max:50'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new user
        $student = student::create([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'password' => bcrypt($req->password)
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Student created successfully',
            'data' => $student
        ], Response::HTTP_OK);

    }


    public function authenticateStudent(Request $request)
    {
        $credentials = $request->only('email', 'password');

        //valid credential
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:6'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is validated
        //Crean token
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Login credentials are invalid.',
                ], 400);
            }
        } catch (JWTException $e) {
            // return $credentials;
            return response()->json([
                'success' => false,
                'message' => 'Could not create token.',
            ], 500);
        }

        //Token created, return with success response and jwt token
        return response()->json([
            'success' => true,
            'token' => $token,
        ]);
    }

    function respondWithToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            //'expires_in' => auth()->factory()->getTTL() * 60
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }


    public function login()
    {

        $credentials = request(['email', 'password']);

        // if (! $token = Auth::attempt($credentials)) {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }

        // return $this->respondWithToken($token);

        $abc =auth()
        ->attempt($credentials);
        echo $abc;
        return["ADFG"=>$credentials,"jshdu"=>$abc] ;
    }



}