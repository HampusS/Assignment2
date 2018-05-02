<?php

namespace App\Http\Controllers;

use App\Product;

class ReviewsController extends Controller
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
      $reviews = Store::all();
      return response()->json($reviews);
    }
}
