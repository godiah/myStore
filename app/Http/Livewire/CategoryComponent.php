<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\WithPagination;
use Cart;
// use Livewire\Component;


class CategoryComponent extends Component
{
    use WithPagination;
    public $slug;
    public $pageSize=10;
    public $orderBy="Default Sorting";

    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added to cart');
        return redirect()->route('shop.cart');
    }

    public function mount($slug)
    {
        $this->slug=$slug;
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
        
        $category=Category::where('slug',$this->slug)->first();
        $category_id=$category->id;
        $category_name=$category->name;

        // $products=Product::where('category_id',$category_id)->paginate(10);

        if ($this->orderBy == 'Price: Low to High') 
        {
            
            $products=Product::where('category_id',$category_id)->orderBy('regular_price','ASC')->paginate($this->pageSize);
            
        } 
        elseif ($this->orderBy == 'Price: High to Low') 
        {
            
            $products=Product::where('category_id',$category_id)->orderBy('regular_price','DESC')->paginate($this->pageSize);
        } 
        elseif ($this->orderBy == 'Latest') {
            $products=Product::where('category_id',$category_id)->orderBy('created_at','DESC')->paginate($this->pageSize);
        } 
        else {
            
            $products=Product::where('category_id',$category_id)->paginate($this->pageSize);
        }


        $categories=Category::orderBy('name','ASC')->get();
        return view('livewire.category-component',['products'=>$products,'categories'=>$categories, 'category_id'=>$category_id,'category_name'=>$category_name]);
    }
}
