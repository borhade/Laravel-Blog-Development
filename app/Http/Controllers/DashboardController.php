<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function test(){
        return view('admin.dashboard.index');
    }


}
