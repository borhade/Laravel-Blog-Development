<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class GeneralException extends Exception
{
    public function report(){
        echo"1234";
     } 

     public function render($request){
        
             return new JsonResponse([
                "error"=>$this->getMessage(),
            ],$this->code);
     }
}
