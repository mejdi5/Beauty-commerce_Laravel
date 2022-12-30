<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        return view('home.index', [
            'latestProducts' => array_slice(Product::with('category')->get()->toArray(), -5),
            'categories' => Category::all()->toArray(),
        ]);
    }
}
