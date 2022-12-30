<?php

namespace App\Http\Livewire;

use \Darryldecode\Cart\Facades\CartFacade as Cart;
use Livewire\Component;

class NavbarCart extends Component
{
    protected $totalQuantity = 0;

    protected $listeners = ['cartUpdated' => '$refresh', 'cartReset' => '$refresh', 'removed-from-cart' => '$refresh'];
    public function render()
    {
        $this->totalQuantity = Cart::session(auth()->user()->id)->getTotalQuantity();
        return view('livewire.navbar-cart', [
            'totalQuantity' => $this->totalQuantity
        ]);
    }
}
