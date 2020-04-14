<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemColor extends Model
{
    protected $table = "itemcolor";

    public function items(){
        return $this->hasMany('App\item');
       }
}
