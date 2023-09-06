<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\SuperCategory;


class HomeComponent extends Component
{
    public $supcategories;

    public function mount()
    {
        $this->supcategories = SuperCategory::with('products')->get();
        // Limit each supercategory's products to 4
        $this->supcategories->each(function ($supcategory) {
        $supcategory->products = $supcategory->products->take(8);
    });
    }
    public function render()
    {
        return view('livewire.home-component');
    }

}
