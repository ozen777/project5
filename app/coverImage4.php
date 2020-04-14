<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coverImage4 extends Model
{
    protected $table = "coverImage4";
    public function items(){
     return $this->hasMany('App\item');
    }
}
