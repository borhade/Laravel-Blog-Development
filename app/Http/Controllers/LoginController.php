<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;

class LoginController extends Controller
{
    public function userlogin(Request $request){
        $input = $request->all();
         //var_dump($input);
        return response()->json(["error"=>"hi my name is vishal"],200);
       //validator->fails($validation);
        Auth::attempt(["email"=>$input["email"]]){
            $user=Auth::user();
            $token = $user->createToken('Token_name')->accessToken;
            return response()->json("token"=>$token);
        }

    }

    public function getUserDetails(){
        echo"hii";
    }
}
