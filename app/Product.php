<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Price Stores Reviews

    public function stores(){
      return $this->belongsToMany('App\Store');
    }

    public function reviews(){
      return $this->hasMany('App\Review');
    }
}
