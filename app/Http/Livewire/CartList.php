<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Darryldecode\Cart\Facades\CartFacade as Cart;

class CartList extends Component
{
    protected $listeners = ['cartUpdated' => '$refresh'];
      public $cartItems = [];

      public function removeCart($id)
      {
          Cart::session(auth()->user()->id)->remove($id);
          session()->flash('success', 'Item has removed !');
          $this->emit('removed-from-cart');
      }

      public function clearAllCart()
      {
          Cart::session(auth()->user()->id)->clear();
          session()->flash('success', 'All Item Cart Clear Successfully !');
          $this->emit('cartReset');
      }

      public function render()
      {
          $this->cartItems = Cart::session(auth()->user()->id)->getContent()->toArray();

          return view('livewire.cart-list');
      }
}
