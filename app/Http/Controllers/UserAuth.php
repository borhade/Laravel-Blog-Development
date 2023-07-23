<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $req){

        $name = ($req->input("name"));
        $req->session()->put("user_name",$name);
        if(session()->has("user_name")){
            return redirect("/about");
        }
    }
   
    public function show($id){

        var_dump($id);
    }
}
