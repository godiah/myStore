<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\SuperCategory;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public $sup_category_id;
    public $category_id;

    public function generateSlug()
    {
        $this->slug=Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required'
        ]);
    }

    public function storeCategory()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required' 
        ]);

        if ($this->sup_category_id) {
            $category= new Category();
            $category->name = $this->name;
            $category->sup_category_id=$this->sup_category_id;
            $category->slug =$this->slug;
            $category->save();
            session()->flash('message','New category has been created successfully!');
            return redirect()->route('admin.categories');
        }

        elseif ($this->category_id) {
            # code...
            $sub_category= new SubCategory();
            $sub_category->name = $this->name;
            $sub_category->slug =$this->slug;
            $sub_category->category_id=$this->category_id;
            $sub_category->save();
            session()->flash('message','New Sub category has been created successfully!');
            return redirect()->route('admin.categories');
        }
        else{
            $sup_category= new SuperCategory();
            $sup_category->name = $this->name;
            $sup_category->slug =$this->slug;
            $sup_category->save();
            session()->flash('message','New Super category has been created successfully!');
            return redirect()->route('admin.categories');
        }
        
        
    }
    public function render()
    {
        $supcategories=SuperCategory::orderBy('name','DESC')->get();
        $categories=Category::where('sup_category_id',$this->sup_category_id)->get();
        $subcategories=SubCategory::where('category_id',$this->category_id)->get();

        return view('livewire.admin.admin-add-category-component',['supcategories'=>$supcategories,'categories'=>$categories,'subcategories'=>$subcategories]);
    }
}
