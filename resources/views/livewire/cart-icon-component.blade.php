<div>
    <a href="{{route('shop.cart')}}">
        <i class="crt fa-solid fa-cart-shopping"></i>
        @if (Cart::instance('cart')->count()==0)
            <sup>0</sup>Cart/Ksh0.00
        @elseif(Cart::instance('cart')->count()>0)
            <sup>{{Cart::instance('cart')->count()}}</sup>
            Cart/Ksh.{{Cart::instance('cart')->total()}}
        @endif
        
    </a>
</div>
