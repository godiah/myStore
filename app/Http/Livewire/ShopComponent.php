<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use Cart;
// use Livewire\Component;


class ShopComponent extends Component
{
    use WithPagination;

    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Moddels\Product');
        session()->flash('success_message','Item added to cart');
        return redirect()->route('shop.cart');
    }

    public function render()
    {
        $products=Product::paginate(10);
        return view('livewire.shop-component',['products'=>$products]);
    }
}
