<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Darryldecode\Cart\Facades\CartFacade as Cart;


class CartUpdate extends Component
{
    public $cartItems = [];
    public $quantity = 1;

    public function mount($item)
    {
        $this->cartItems = $item;

        $this->quantity = $item['quantity'];
    }

    public function updateCart()
    {
        Cart::session(auth()->user()->id)->update($this->cartItems['id'], [
            'quantity' => [
                'relative' => false,
                'value' => $this->quantity
            ]
        ]);

        $this->emit('cartUpdated');
    }

    public function render()
    {
        return view('livewire.cart-update');
    }
}
