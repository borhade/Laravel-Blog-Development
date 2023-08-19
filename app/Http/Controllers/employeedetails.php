<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use Illuminate\Support\Facades\DB;
class employeedetails extends Controller
{
    
    public function getEmployeeDetails(){
       
        echo DB::table("members as m")
                ->select("m.name")
                ->join("posts as p","p.author_id","=", "m.id")
                ->where("m.id",2)
                ->get();

    }

}
