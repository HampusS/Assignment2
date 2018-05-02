<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStore extends Model
{
    // Price Stores Reviews

    public function store(){
      return $this->hasOne('App\Store');
    }

    public function product(){
      return $this->hasOne('App/Product');
    }
}
