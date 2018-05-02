<?php

namespace App\Http\Controllers;

use App\Product;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index()
    {
      $products = Product::all();
      return response()->json($products);
    }

    public function show($id)
    {
      $product = Product::find($id);
      $product->stores = $product->stores;
      $product->reviews = $product->reviews;
      return response()->json($product);
    }
}
