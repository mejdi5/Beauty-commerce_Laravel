<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use \Darryldecode\Cart\Facades\CartFacade as Cart;

class OrderController extends Controller
{
    public function index() {
        return view('orders.index', [
            'orders' => Order::where('user_id', auth()->user()->id)->get()->toArray()
        ]);
    }

    public function show(Order $order) {
        return view('orders.show', [
            'order' => $order->toArray(),
        ]);
    }

    public function create () {
        return view('orders.create', [
            'cartItems' => Cart::session(auth()->user()->id)->getContent()
        ]);
    }

    public function store () {
        $cartItems = Cart::session(auth()->user()->id)->getContent();
        $unitPrices = $cartItems->pluck('price')->toArray();
        $quantities = $cartItems->pluck('quantity')->toArray();
        $prices = [];
        foreach (array_keys($unitPrices + $quantities) as $key) {
            $prices[$key] = @($unitPrices[$key] * $quantities[$key]);
        }
        $total = array_reduce($prices, function($a,$b){
            return $a+$b;
        });
        request()->validate([
            'address' => 'required',
        ]);
        $newOrder = Order::create([
            'user_id' => auth()->user()->id,
            'address' => request('address'),
            'total' => $total,
            'items' => $cartItems->toArray()
        ]);
        Cart::session(auth()->user()->id)->clear();
        return redirect("/orders/$newOrder->id")->with('success', 'order passed with success');
    }

}
