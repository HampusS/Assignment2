<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    // Price Stores Reviews

    public function stores(){
      return $this->belongsToMany('App\Product');
    }


}
