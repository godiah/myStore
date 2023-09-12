<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\SuperCategory;
use App\Models\SubCategory;
use Livewire\WithPagination;
use Cart;

class SubCategoryComponent extends Component
{
    use WithPagination;
    public $slug;
    // public $sup_slug;
    public $sub_slug;
    public $pageSize=10;
    public $orderBy="Default Sorting";

    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added to cart');
        return redirect()->route('shop.cart');
    }

    public function mount($sub_slug)
    {
        $this->sub_slug=$sub_slug;
    }

    public function changePageSize($size)
    {
        $this->pageSize=$size;
    }

    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }


    public function render()
    {
        $sub_category=SubCategory::where('slug',$this->sub_slug)->first();
        $sub_category_id=$sub_category->id;
        $sub_category_name=$sub_category->name;

        // $products=Product::where('category_id',$category_id)->paginate(10);

        if ($this->orderBy == 'Price: Low to High') 
        {
            
            $products=Product::where('sub_category_id',$sub_category_id)->orderBy('regular_price','ASC')->paginate($this->pageSize);
            
        } 
        elseif ($this->orderBy == 'Price: High to Low') 
        {
            
            $products=Product::where('sub_category_id',$sub_category_id)->orderBy('regular_price','DESC')->paginate($this->pageSize);
        } 
        elseif ($this->orderBy == 'Latest') {
            $products=Product::where('sub_category_id',$sub_category_id)->orderBy('created_at','DESC')->paginate($this->pageSize);
        } 
        else {
            
            $products=Product::where('sub_category_id',$sub_category_id)->paginate($this->pageSize);
        }
        return view('livewire.sub-category-component',[
                'products'=>$products,
                // 'categories'=>$categories, 
                'sub_category_id'=>$sub_category_id,
                'sub_category_name'=>$sub_category_name,
        ]);
    }
}
