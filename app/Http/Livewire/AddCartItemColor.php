<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;

class AddCartItemColor extends Component
{

    public $product, $colors, $quantity;
    public $color_id = "";

    public $qty = 1;

    public function mount()
    {
        $this->colors = $this->product->colors;
        $this->quantity = $this->product->quantity;
    }

    public function render()
    {
        return view('livewire.add-cart-item-color');
    }

    public function updateColorId($value)
    {
        $this->quantity = $this->product->colors->find($value)->pivot->quantity;
    }
}
