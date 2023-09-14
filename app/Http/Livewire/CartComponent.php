<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Cart;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        // $product = Cart::instance('cart')->get($rowId);
        $product = Cart::instance('cart')->get($rowId);

        $qty = $product->qty + 1;
        // Cart::instance('cart')->update($rowId,$qty);
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }

    public function decreaseQuantity($rowId)
    {
        // $product = Cart::instance('cart')->get($rowId);
        $product = Cart::instance('cart')->get($rowId);

        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        // Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');

    }

    

    public function destroy($id)
    {
        Cart::instance('cart')->remove($id);
        // instance('cart')->
        $this->emitTo('cart-icon-component','refreshComponent');
        session()->flash('success_message','Item has been removed!');
    }

    public function clearAll()
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-icon-component','refreshComponent');
        session()->flash('success_message','Cart has been cleared');
    }

    public function checkout()
    {
        if (Auth::check()) {
            return redirect()->route('checkout');
            return redirect('/checkout');
        }
        else
        {
            return redirect()->route('login');
        }
        // Somewhere in your code when initiating the checkout process
        // session()->put('checkout', true);

        // return redirect()->route('checkout');

    }

    public function setAmountForCheckout()
    {
        
        if (!Cart::instance('cart')->count()>0) {
            session()->forget('checkout');
            return;
        }

        session()->put('checkout',[
            'subtotal'=>Cart::instance('cart')->subtotal(),
            'tax'=>Cart::instance('cart')->tax(),
            // 'delivery'=>Cart::instance('cart')->tax(),
            'total'=>Cart::instance('cart')->total()
        ]);
    }


    public function render()
    {
        $this->setAmountForCheckout();

        return view('livewire.cart-component');
    }
}
