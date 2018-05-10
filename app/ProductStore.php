<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStore extends Model
{
  protected $table = "product_store";
    public function store(){
      return $table->hasOne('App\Store');
    }

    public function product(){
      return $table->hasOne('App/Product');
    }
}
