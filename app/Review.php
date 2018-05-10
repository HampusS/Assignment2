<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // Price Stores Reviews
    public function product(){
      return $this->hasOne('App/Product');
    }
}
