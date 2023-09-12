<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SuperCategory;
use App\Models\SubCategory;

class SuperCategoryNavigationComponent extends Component
{
    public $supcategories;
    public $selectedSupcategory;
    public $selectedCategory;

    public function mount()
    {
        $this->supcategories = SuperCategory::with('categories.subcategories')->get();
    }

    // public function showCategories($supcategoryId, $categoryId)
    // {
    //     $this->selectedSupcategory = $supcategoryId;
    //     $this->selectedCategory = $categoryId;
    // }
    // 
    public function showCategories($supcategoryId, $categoryId)
    {
        $this->selectedSupcategory = $supcategoryId;
        $this->selectedCategory = $categoryId;
    }


    public function render()
    {
        return view('livewire.super-category-navigation-component');
    }
}
