<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\SuperCategory;
use App\Models\SubCategory;
use App\Models\Product;

use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class AdminAddProductsComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $description;
    public $regular_price;

    public $stock_status ='instock';
    public $quantity;

    public $image;
    public $image2 = null;
    public $image3 = null;
    public $image4 = null;

    public $unique_id;
    public $product_id;
    // public $supcategories;
    // public $categories;
    // public $subcategories;
    public $category_id;
    public $sup_category_id;
    public $sub_category_id;
    
    public $cat_id;
    public $subcat_id;

    public function addProduct()
    {
        $this->validate([
            'name'=>'required',
            'regular_price'=>'required', 
            'sup_category_id'=>'required',
        ]);

        $uniqId=Carbon::now()->timestamp.uniqid(); 


        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sup_category_id = $this->sup_category_id;
        $product->category_id = $this->category_id;
        $product->sub_category_id = $this->sub_category_id;

        $product->stock_status = $this->stock_status;
        $product->quantity = $this->quantity;

        $productName = $product->slug;

        $imageName = $productName.'_'.Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products', $imageName);
        $product->image = $imageName;
        

        if ($this->image2) {
            $imageName2 = $productName.'_'.Carbon::now()->timestamp . '.' . Str::random(6) . '_' . $this->image2->extension();
            $this->image2->storeAs('products', $imageName2);
            $product->image2 = $imageName2;
        }
        if ($this->image3) {
            $imageName3 = $productName.'_'.Carbon::now()->timestamp . '.' . Str::random(6) . '_' . $this->image3->extension();
            $this->image3->storeAs('products', $imageName3);
            $product->image3 = $imageName3;
        }
        if ($this->image4) {
            $imageName4 = $productName.'_'.Carbon::now()->timestamp . '.' . Str::random(6) . '_' . $this->image4->extension();
            $this->image4->storeAs('products', $imageName4);
            $product->image4 = $imageName4;
        }

        $product->save();
        return redirect()->route('admin.products');
    }


    public function generateSlug()
    {
        $this->slug=Str::slug($this->name);
    }

    public function changeCategory()
    {
        $this->category_id=0;
    }

    public function changeSubcategory()
    {
        $this->sub_category_id=0;
    }

    public function render()
    {
        $supcategories=SuperCategory::orderBy('name','DESC')->get();
        $categories=Category::where('sup_category_id',$this->sup_category_id)->get();
        $subcategories=SubCategory::where('category_id',$this->category_id)->get();
        

        return view('livewire.admin.admin-add-products-component',['supcategories'=>$supcategories,'categories'=>$categories,'subcategories'=>$subcategories]);
    }
}
