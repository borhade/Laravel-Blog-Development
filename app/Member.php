<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Member extends Model
{
    public $timestamps =false;

    public function getNameAttribute($value){
        return ucfirst($value);
    }

    public function getAddressAttribute($value){
        return $value;
    }

    public function setNameAttribute($value){
       return $this->attributes['name']= "Mr".$value;
    }
    public function getCompanyDetails(){

        return $this->hasOne("App\company");
    }

   

}
