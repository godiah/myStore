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

    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added to cart');
        return redirect()->route('shop.cart');
    }

    public function mount($slug)
    {
        $this->slug=$slug;
    }

    public function render()
    {
        $category=Category::where('slug',$this->slug)->first();
        $category_id=$category->id;
        $category_name=$category->name;

        $products=Product::where('category_id',$category_id)->paginate(10);


        $categories=Category::orderBy('name','ASC')->get();
        return view('livewire.category-component',['products'=>$products,'categories'=>$categories, 'category_id'=>$category_id,'category_name'=>$category_name]);
    }
}
