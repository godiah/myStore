<div>
    <a href="{{route('shop.cart')}}">
        <i class="crt fa-solid fa-cart-shopping"></i>
        @if (Cart::count()==0)
            <sup>0</sup>Cart/Ksh0.00
        @elseif(Cart::count()>0)
            <sup>{{Cart::count()}}</sup>
            Cart/Ksh.{{Cart::total()}}
        @endif
        
    </a>
</div>
