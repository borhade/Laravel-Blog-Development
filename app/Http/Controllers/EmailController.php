<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendMailJob;

class EmailController extends Controller
{
    
     public function sendEmail(){
        //echo"hii";
        $emailJob = new SendMailJob();
        dispatch($emailJob);
    }

}
