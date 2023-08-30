<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoriesComponent extends Component
{
    use WithPagination;

    public $category_id;

    public function deleteCategory($categoryId)
    {
        $this->category_id = $categoryId;

        $category= Category::find($this->category_id);
        $category->delete();
        session()->flash('message','Category has been deleted succesfully');
    }

    public function render()
    {
        $categories=Category::orderBy('name','ASC')->paginate(12);

        return view('livewire.admin.admin-categories-component',['categories'=>$categories]);
    }
}