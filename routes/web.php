<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/{name}', function ($name) {
    return view('welcome',["name"=>$name]);
});*/



Route::get("/create",function(){
   return view("create");
});

Route::get("/login",function(){
    echo"hii";
    //return view("login");
});

Route::post("/user_login","UserAuth@userLogin");
Route::get("/product/{id}","UserAuth@show");
Route::get("/logout",function(){
    if(session()->has("user_name")){
        session()->pull("user_name");
        return view("login");
    }
});

Route::get("/list","MemberDetails@show");
Route::get("/addview",function(){
    return view("add");
});

Route::post("/adduser","MemberDetails@addUser");
Route::get("/delete/{id}","MemberDetails@deleteUser");

Route::get("/edit/{id}","MemberDetails@showData");
Route::post("/update","MemberDetails@update");
Route::get("/getEmployee","employeedetails@getEmployeeDetails");
Route::get("/title","MemberDetails@testHasOne");
Route::get("/testroute/{key:name}","MemberDetails@testPathModeling");
Route::get("/getDetails","UserController@show");
Route::POST("/addDetails","UserController@createDetails");
Route::get("/deleteCompanyDetails/{id}","UserController@removeCompanyDetails");
Route::get("/editCompanyDetails/{id}","UserController@editCompanyDetails");
Route::post("/updateCompanyDetails","UserController@updateCompanyDetails");