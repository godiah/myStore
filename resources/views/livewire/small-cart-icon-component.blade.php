<div>
    <a href="{{route('shop.cart')}}" class="cart-sm d-xl-none d-lg-none d-md-none">
        <i class="fa-solid fa-cart-shopping mx-1"></i>
        @if (Cart::instance('cart')->count()==0)
            <sup>0</sup>
            
        @else (Cart::instance('cart')->count()>0)
            <sup>{{Cart::instance('cart')->count()}}</sup>
        @endif
    </a>
</div>
