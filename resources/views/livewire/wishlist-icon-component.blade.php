<li>
    <a class="dropdown-item" href="wishlist.html">
        <i class="fa-solid fa-gift"></i>
        Saved Items 
        @if (Cart::instance('wishlist')->count()>0)
            <sup>
                {{Cart::instance('wishlist')->count()}}
            </sup>
        @endif
    </a>
</li>