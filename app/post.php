<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use SoftDeletes;
    public $timestamps=false;
    //protected $fillable =['title','description',''];

    public function post(){
        return $this->belongsTo(Member::class);
    }

  

    

}
