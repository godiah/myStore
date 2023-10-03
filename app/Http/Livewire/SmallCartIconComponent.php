<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SmallCartIconComponent extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];
    
    public function render()
    {
        return view('livewire.small-cart-icon-component');
    }
}
