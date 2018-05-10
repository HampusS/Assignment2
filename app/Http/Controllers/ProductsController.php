<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductStore;
use App\Store;
use Illuminate\Http\Request;

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

    public function add(Request $request){
      $product = new Product;
      $product->title = $request->input("title");
      $product->price = $request->input("price");
      $product->brand = $request->input("brand");
      $product->image = $request->input("image");
      $product->description = $request->input("description");
      $product->save();

      foreach ($request->input("stores") as $store)
      {
        $productStore = new ProductStore;
        $productStore->store_id = $store;
        $productStore->product_id = $product->id;
        $productStore->save();
      }

      return response()->json([
        "success" => true
      ]);
    }
}
