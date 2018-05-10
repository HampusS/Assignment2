<?php

namespace App\Http\Controllers;

use App\Store;

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
