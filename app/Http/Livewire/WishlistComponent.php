<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;


class WishlistComponent extends Component
{
    public function store($product_id,$product_name)
    {
        Cart::instance('cart')->add($product_id,$product_name)->associate('\App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        $this->emitTo('cart-icon-component','refreshComponent');
        return redirect()->route('shop.cart');
    }
    
    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if($witem->id==$product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                // session()->flash('success_message','Item removed from wishlist');
                $this->emitTo('wishlist-icon-component','refreshComponent');
                return redirect()->route('shop.wishlist');
            }
        }
    }
    public function render()
    {
        return view('livewire.wishlist-component');
    }
}
