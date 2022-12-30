<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use \Darryldecode\Cart\Facades\CartFacade as Cart;

class ProductController extends Controller
{
    public function index() {
        return view('products.index', [
            'category' => Category::firstWhere('slug',  request('category')),
        ]);
    }

    public function show(Product $product) {
        return view('products.show', [
            'product' => $product->toArray(),
        ]);
    }

    public function cartList()
    {
        if(!auth()->user()) {
            abort(404);
        }
        return view('cart');
    }

    public function addToCart(Request $request)
    {
        if($request->inStock) {
            Cart::session(auth()->user()->id)->add([
                'id' => $request->id,
                'name' => $request->title,
                'price' => $request->price,
                'quantity' => intval($request->quantity),
                'attributes' => array(
                    'image' => $request->image,
                )
            ]);
            session()->flash('success', 'Product is Added to Cart Successfully !');
            return redirect()->back();
        } else {
            abort(404);
        }

    }
}
