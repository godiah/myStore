<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\SuperCategory;
use App\Models\SubCategory;
use Livewire\WithPagination;
use Cart;

class SuperCategoryComponent extends Component
{
    use WithPagination;
    public $slug;
    public $sup_slug;
    public $sub_slug;
    public $pageSize=10;
    public $orderBy="Default Sorting";

    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added to cart');
        return redirect()->route('shop.cart');
    }

    public function mount($sup_slug)
    {
        $this->sup_slug=$sup_slug;
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
        $sup_category=SuperCategory::where('slug',$this->sup_slug)->first();
        $sup_category_id=$sup_category->id;
        $sup_category_name=$sup_category->name;

        // $products=Product::where('category_id',$category_id)->paginate(10);

        if ($this->orderBy == 'Price: Low to High') 
        {
            
            $products=Product::where('sup_category_id',$sup_category_id)->orderBy('regular_price','ASC')->paginate($this->pageSize);
            
        } 
        elseif ($this->orderBy == 'Price: High to Low') 
        {
            
            $products=Product::where('sup_category_id',$sup_category_id)->orderBy('regular_price','DESC')->paginate($this->pageSize);
        } 
        elseif ($this->orderBy == 'Latest') {
            $products=Product::where('sup_category_id',$sup_category_id)->orderBy('created_at','DESC')->paginate($this->pageSize);
        } 
        else {
            
            $products=Product::where('sup_category_id',$sup_category_id)->paginate($this->pageSize);
        }

        return view('livewire.super-category-component',[
                'products'=>$products,
                // 'categories'=>$categories, 
                'sup_category_id'=>$sup_category_id,
                'sup_category_name'=>$sup_category_name,
        ]);
    }
}
