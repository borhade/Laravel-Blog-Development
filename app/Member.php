<?php

namespace App;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
  function getGroup(){
      //protected $primaryKey = "id";
      return $this->hasMany("App\post","user_id");
    } 

   // protected $fillable = ["name","email","address"];
}
