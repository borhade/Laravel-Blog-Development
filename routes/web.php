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



Route::get("/about",function(){
    return view("about");
});

Route::get("/login",function(){
    return view("login");
});

Route::post("/user_login","UserAuth@userLogin");
Route::get("/product/{id}","UserAuth@show");
Route::get("/logout",function(){
    if(session()->has("user_name")){
        session()->pull("user_name");
        return view("login");
    }
});

Route::get("/list","MemberDetails@show")->name("list.getAllDetails");

route::prefix("/page")->group(function(){
    Route::get("/addview",function(){
        return view("add");                    
    })->name("store");

    Route::get("/edit_view",function(){
        echo"edit_view..";
        //return view("add");                    
    })->name("edit_view");
    
    
    /*Route::get("/page/delete_view",function(){
        echo"delete..";
        //return view("add");                    
    });*/
});

Route::fallback(function(){
  echo"<h2>Page not found!.</h2>";
});


Route::post("/adduser","MemberDetails@addUser");
Route::get("/delete/{id}","MemberDetails@deleteUser");
Route::get("/edit/{id}","MemberDetails@showData");

Route::post("/update","MemberDetails@update");
Route::get("/getEmployee","employeedetails@getEmployeeDetails");
Route::get("/title","MemberDetails@testHasOne");
Route::get("/testroute/{key:name}","MemberDetails@testPathModeling");
Route::get("/check","DashboardController@test");
Route::resource('category','CategoryController');
Route::get('/delete_category/{id}','CategoryController@destroy');
Route::get("/test_email", "EmailController@sendEmail");
//tag part
Route::resource("/tag","TagController");
Route::get("/delete_tag/{id}","TagController@destroy");
Route::resource("/post","PostController");
