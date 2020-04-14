<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{


    public function user(){

        return $this->belongsTo('App\User');
      
    }
    public function itemcolor(){

        return $this->belongsTo('App\Itemcolor');
      
    }
    public function category(){

        return $this->belongsTo('App\Category');
      
    }
   
    public function coveImage2(){

        return $this->belongsTo('App\coverImage2');
      
    }
    public function coveImage3(){

        return $this->belongsTo('App\coverImage3');
      
    }
    public function coveImage4(){

        return $this->belongsTo('App\coverImage4');
      
    }
    
}
