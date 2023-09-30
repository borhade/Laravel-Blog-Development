<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    
    public $timestamps=false;

    //protected $fillable =['title','description',''];

    public function post(){
        return $this->belongsTo(Member::class);
    }

    

}
