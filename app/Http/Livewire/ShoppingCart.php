<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShoppingCart extends Component
{

    protected $listeners = ['render' => 'render'];

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}
