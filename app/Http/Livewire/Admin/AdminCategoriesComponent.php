<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\SuperCategory;
use App\Models\SubCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoriesComponent extends Component
{
    use WithPagination;

    public $category_id;
    public $sup_category_id;
    public $sub_category_id;

    public function deleteCategory($categoryId)
    {
        $this->category_id = $categoryId;

        $category= Category::find($this->category_id);
        $category->delete();
        session()->flash('message','Category has been deleted succesfully');
    }

    public function deleteSupCategory($supcategoryId)
    {
        $this->supcategory_id = $supcategoryId;

        $supercategory= SuperCategory::find($this->supcategory_id);
        $supercategory->delete();
        session()->flash('message','Super Category has been deleted succesfully');
    }

    public function deleteSubCategory($subcategoryId)
    {
        $this->subcategory_id = $subcategoryId;

        $subcategory= SubCategory::find($this->subcategory_id);
        $subcategory->delete();
        session()->flash('message','Sub Category has been deleted succesfully');
    }

    public function render()
    {
        $categories=Category::orderBy('name','ASC')->get();
        $supcategories=SuperCategory::orderBy('name','ASC')->get();
        $subcategories=SubCategory::orderBy('name','ASC')->get();


        return view('livewire.admin.admin-categories-component',['categories'=>$categories,'supcategories'=>$supcategories,'subcategories'=>$subcategories]);
    }
}
