<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SuperCategory;
use App\Models\SubCategory;

class CategoryNavComponent extends Component
{
    public $supercategories;
    public $selectedSupcategory;
    public $selectedCategory;

    public function mount()
    {
        $this->supercategories = SuperCategory::with('categories.subcategories')->get();
    }

    // public function showCategories($supcategoryId, $categoryId)
    // {
    //     $this->selectedSupcategory = $supcategoryId;
    //     $this->selectedCategory = $categoryId;
    // }

    public function showSubCategories($categoryId)
    {
        // Check if the clicked category is already selected; if so, toggle its visibility
        if ($this->selectedCategory === $categoryId) {
            $this->selectedCategory = null; // Unselect the category
        } else {
            $this->selectedCategory = $categoryId;
        }
    }

    public function render()
    {
        // $categories=Category::orderBy('name','ASC')->get();

        return view('livewire.category-nav-component');
    }
}
