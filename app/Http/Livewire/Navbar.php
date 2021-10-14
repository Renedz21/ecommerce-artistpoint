<?php

namespace App\Http\Livewire;

use App\Models\category;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        $categoria = category::all();
        return view('livewire.navbar', compact('categoria'));
    }
}
