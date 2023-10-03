<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SuperCategory;
use App\Models\Category;
use App\Models\SubCategory;

class SmallMenuComponent extends Component
{
    public $supcategories;

    public function mount()
    {
        $this->supcategories = SuperCategory::with('categories.subcategories')->get();
    }
    public function render()
    {
        return view('livewire.small-menu-component');
    }
}
