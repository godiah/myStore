<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\SuperCategory;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\ProductImages;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $short_description;

    public $description;
    public $regular_price;

    public $stock_status ='instock';
    public $quantity;

    public $image;
    public $image2;
    public $image3;
    public $image4;

    public $newimage;
    public $newimage2;
    public $newimage3;
    public $newimage4;

    public $unique_id;
    public $product_id;

    public $category_id;
    public $sup_category_id;
    public $sub_category_id;
    
    public $cat_id;
    public $subcat_id;

    public function mount($product_id)
    {
        $product = Product::find($product_id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description      = $product->short_description;
        $this->description      = $product->description;
        $this->regular_price    = $product->regular_price;
        $this->sup_category_id  = $product->sup_category_id;
        $this->category_id      = $product->category_id;
        $this->sub_category_id  = $product->sub_category_id;
        $this->stock_status     = $product->stock_status;
        $this->quantity         = $product->quantity;

        // images

        $this->image=$product->image;
        $this->image2=$product->image2;
        $this->image3=$product->image3;
        $this->image4=$product->image4;
        $this->image5=$product->image5;
        $this->image6=$product->image6;
        $this->image7=$product->image7;
    }

    public function deleteImage($id)
    {
        $image=ProductImages::where('id', $id)->first();
        $image->delete();
        session()->flash('message', 'Image has been deleted');

    }

    public function generateSlug()
    {
        $this->slug=Str::slug($this->name);
    }

    public function updateProduct()
    {
        $this->validate([
            'name'=>'required',
            // 'slug'=>'required',
            // 'regular_price'=>'required',
            'sup_category_id'=>'required',
        ]);

        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;

        $product->sup_category_id = $this->sup_category_id;
        $product->category_id = $this->category_id;
        $product->sub_category_id = $this->sub_category_id;

        $productName = $product->slug;

        if ($this->newimage) {
            unlink('images/products/'.$product->image);
        $productName = $product->slug;
            $imageName = $productName.'_'.Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('products', $imageName);
            $product->image = $imageName;
        }

        if ($this->newimage2) {
            unlink('images/products/'.$product->image2);
            $imageName = $productName.'_'.Carbon::now()->timestamp.'.'.Str::random(6).$this->newimage2->extension();
            $this->newimage2->storeAs('products', $imageName);
            $product->image2 = $imageName;
        }

        if ($this->newimage3) {
            if ($this->image3) {
                unlink('images/products/'.$product->image3);
            }
            $imageName = $productName.'_'.Carbon::now()->timestamp.'.'.Str::random(6).$this->newimage3->extension();
            $this->newimage3->storeAs('products', $imageName);
            $product->image3 = $imageName;
        }

        if ($this->newimage4) {
            if ($this->image4) {
                unlink('images/products/'.$product->image4);
            }
            $imageName = $productName.'_'.Carbon::now()->timestamp.'.'.Str::random(6).$this->newimage4->extension();
            $this->newimage4->storeAs('products', $imageName);
            $product->image4 = $imageName;
        }

        $product->save();
        session()->flash('message', 'Product details have been Updated!');
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


        return view('livewire.admin.admin-edit-product-component',['supcategories'=>$supcategories,'categories'=>$categories,'subcategories'=>$subcategories]);
    }
}
