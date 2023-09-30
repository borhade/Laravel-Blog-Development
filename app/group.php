<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    public $timestamps = false;
    public function getMember(){
        return $this->belongsTo(Member::class);
    }
}
