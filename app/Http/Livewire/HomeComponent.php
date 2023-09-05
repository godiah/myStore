<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SuperCategory;
use App\Models\SubCategory;
use App\Models\Product;

class HomeComponent extends Component
{
    // public $sup_category_id;
    // public $category_id;

    // public $supcategories;
    // public $categories;
    // public $subcategories;

    // public function mount()
    // {
    //     $this->supcategories = SuperCategory::all();
    //     $this->categories = Category::all();
    //     $this->subcategories = SubCategory::all();
    // }

    // public $supcategories;
    // public $selectedSupcategory;
    // public $categories;

    // public function mount()
    // {
    //     $this->supcategories = SuperCategory::all();
    //     $this->categories = Category::all();
    // }
    public $supcategories;
    public $selectedSupcategory;
    public $selectedCategory;

    public function mount()
    {
        $this->supcategories = SuperCategory::with('categories.subcategories')->get();
    }

    public function showCategories($supcategoryId, $categoryId)
    {
        $this->selectedSupcategory = $supcategoryId;
        $this->selectedCategory = $categoryId;
    }

    public function render()
    {
        // $supcategories=SuperCategory::orderBy('name','ASC')->get();
        // $categories=Category::where('sup_category_id',$this->sup_category_id)->get();
        // $subcategories=SubCategory::where('category_id',$this->category_id)->get();

        return view('livewire.home-component');
        // ,['supcategories'=>$supcategories, 'categories'=>$categories,'subcategories'=>$subcategories]
    }

    

    // public function showCategories($supcategoryId)
    // {
    //     $this->selectedSupcategory = $supcategoryId;
    // }
}
