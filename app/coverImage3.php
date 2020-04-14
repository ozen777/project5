<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coverImage3 extends Model
{
    protected $table = "coverImage3";
    public function items(){
     return $this->hasMany('App\item');
    }
}
