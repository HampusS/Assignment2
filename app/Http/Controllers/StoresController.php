<?php

namespace App\Http\Controllers;

use App\Product;

class StoresController extends Controller
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
      $stores = Store::all();
      return response()->json($stores);
    }

}
