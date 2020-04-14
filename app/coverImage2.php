<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coverImage2 extends Model
{
    protected $table = "coverImage2";
    public function items(){
     return $this->hasMany('App\item');
    }
}
