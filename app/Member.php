<?php

namespace App;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
  
  public  $timestamps= false;

  function getMember()
  {
    return $this->hasOne(post::class,"user_id");
  } 

  public function getNameAttribute($value){
    return ucwords($value);
  }

  public function setNameAttribute($value){
    $this->attributes["name"]= strtoupper($value);
  }

   protected $fillable = ["name","email","address"];
}
