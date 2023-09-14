<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\Shipping;
use App\Models\OrderItem;
use Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutComponent extends Component
{
    public $ship_to_different;

    public $tax;
    public $total;

    public $firstname;
    public $lastname;
    public $mobile;
    public $mobile2;
    public $email;
    public $email2;
    public $address;
    public $residence;
    public $country;
    public $county;
    public $subcounty;
    public $town;
    public $specificarea;
    public $streetname;
    public $aptnumber;
    public $addinfo;

    public $s_firstname;
    public $s_lastname;
    public $s_mobile;
    public $s_mobile2;
    public $s_email;
    public $s_email2;
    public $s_address;
    public $s_residence;
    public $s_country;
    public $s_county;
    public $s_subcounty;
    public $s_town;
    public $s_specificarea;
    public $s_streetname;
    public $s_aptnumber;
    public $s_addinfo;

    public $paymentmode;

    public $thankyou;


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'firstname' => 'required',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
            'paymentmode'=>'required'

        ]);

        if ($this->ship_to_different) {
            # code...
            $this->validateOnly($fields,[
                's_firstname' => 'required',
                's_mobile' => 'required|numeric',
                's_email' => 'required|email'
            ]);
        }
    }

    public function placeOrder()
    {
        $this->validate([
            'firstname' => 'required',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
            'paymentmode'=>'required'
        ]);

        $order = new Order();
        $order->user_id = Auth::user()->id;

        // $order->subtotal= session()->get('checkout')['subtotal'];
        // $order->tax= session()->get('checkout')['tax'];
        // $order->total= session()->get('checkout')['total'];

        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->mobile = $this->mobile;
        $order->mobile2 = $this->mobile2;
        $order->email = $this->email;
        $order->email2 = $this->email2;
        $order->address = $this->address;
        $order->residence = $this->residence;
        $order->country = $this->country;
        $order->county = $this->county;
        $order->subcounty = $this->subcounty;
        $order->town = $this->town;
        $order->specificarea = $this->specificarea;
        $order->streetname = $this->streetname;
        $order->aptnumber = $this->aptnumber;
        $order->addinfo = $this->addinfo;

        $order->status = 'ordered';

        $order->is_shipping_different = $this->ship_to_different? 1:0;

        $order->save();

        foreach (Cart::instance('cart')->content() as $item) 
        {
            $orderItem = new OrderItem();
            $orderItem->product_id=$item->id;
            $orderItem->order_id=$order->id;
            $orderItem->price=$item->price;
            $orderItem->quantity=$item->qty;

            $orderItem->save();
            

        }

        if ($this->ship_to_different) {
            # code...
            $this->validate([
                's_firstname' => 'required',
                's_mobile' => 'required|numeric',
                's_email' => 'required|email'
            ]);

            $shipping= new Shipping();

            $shipping->order_id=$order->id;
            $shipping->firstname = $this->s_firstname;
            $shipping->lastname = $this->s_lastname;
            $shipping->mobile = $this->s_mobile;
            $shipping->mobile2 = $this->s_mobile2;
            $shipping->email = $this->s_email;
            $shipping->email2 = $this->s_email2;
            $shipping->address = $this->s_address;
            $shipping->residence = $this->s_residence;
            $shipping->country = $this->s_country;
            $shipping->county = $this->s_county;
            $shipping->subcounty = $this->s_subcounty;
            $shipping->town = $this->s_town;
            $shipping->specificarea = $this->s_specificarea;
            $shipping->streetname = $this->s_streetname;
            $shipping->aptnumber = $this->s_aptnumber;
            $shipping->addinfo = $this->s_addinfo;
            $shipping->save();
        }
// 
        if ($this->paymentmode == 'cash-on-delivery') {
            # code...
            $transaction= new Transaction();
            $transaction->user_id= Auth::user()->id;
            $transaction->order_id=$order->id;
            $transaction->mode= 'cash-on-delivery';
            $transaction->status = 'pending';
            $transaction->save();
        }
        elseif ($this->paymentmode == 'direct-bank-transfer') {
            # code...
            $transaction= new Transaction();
            $transaction->user_id= Auth::user()->id;
            $transaction->order_id=$order->id;
            $transaction->mode= 'direct-bank-transfer';
            $transaction->status = 'pending';
            $transaction->save();
        }
        elseif ($this->paymentmode == 'lipa-na-m-pesa') {
            # code...
            $transaction= new Transaction();
            $transaction->user_id= Auth::user()->id;
            $transaction->order_id=$order->id;
            $transaction->mode= 'lipa-na-m-pesa';
            $transaction->status = 'pending';
            $transaction->save();
        }
        elseif ($this->paymentmode == 'card') {
            # code...
            $transaction= new Transaction();
            $transaction->user_id= Auth::user()->id;
            $transaction->order_id=$order->id;
            $transaction->mode= 'card';
            $transaction->status = 'pending';
            $transaction->save();
        }

        $this->thankyou=1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');

        return redirect()->route('thankyou');

    }

    public function verifyForCheckout()
    {
        if (Auth::check()) {
            return redirect()->route('login');
        }
        elseif($this->thankyou){
            return redirect()->route('thankyou');
        }
        elseif(!session()->get('checkout')){
            return redirect()->route('shop.cart');
        }
    }
    public function render()
    {
        // $this->verifyForCheckout();
        return view('livewire.checkout-component');
    }
}
