<?php

namespace App;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
  function getMember()
  {
    return $this->hasOne(post::class,"user_id");
  } 

   // protected $fillable = ["name","email","address"];
}
