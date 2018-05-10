<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    // Price Stores Reviews

    public function products(){
      return $this->hasMany('App\Product');
    }


}
