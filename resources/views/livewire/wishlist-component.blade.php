<!-- Wishlist Details -->
<div id="wishlist-cont">
      <!-- @if(Session::has('success_message'))
        <div>
          <strong>Success | {{Session::get('success_message')}}</strong>
        </div>
      @endif -->

    <h4 class="text-center">Saved Items</h4>
    @if(Cart::instance('wishlist')->count()>0)
      @foreach(Cart::instance('wishlist')->content() as $item)

      
        <div class="wishlist-item">
            <div class="wishlist-item-image">
              <a href="{{route('product.details',['slug'=>$item->model->slug])}}">
                <img src="{{asset('images/')}}/{{$item->model->image}}.jpg" alt="Product Image">
              </a>
            </div>
            <div class="wishlist-item-details">
              <h5><a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a></h5>
              <p class="price"><sup>Ksh</sup><strong>{{$item->model->regular_price}}</strong></p>
            </div>
            <div class="wishlist-item-buttons">
              <a href="#" wire:click.prevent="store({{$item->model->id}},'{{$item->model->name}}',{{$item->model->regular_price}})" class="buy-now"><i class="fa-solid fa-cart-shopping"></i>Buy Now</a>
              <a href="#" wire:click.prevent="removeFromWishlist({{$item->model->id}})" class="remove-product"><i class="fa-solid fa-trash"></i> Remove</a>
            </div>
        </div>
      @endforeach
    @else
      <div>
        <p>No items in your wishlist</p>
      </div>
    @endif

    <!-- <div class="wishlist-item">
        <div class="wishlist-item-image">
          <a href="product_details.html">
            <img src="images/product1.jpg" alt="Product Image">
          </a>
        </div>
        <div class="wishlist-item-details">
          <h5><a href="product_details.html">ASUS Zenbook Pro Duo 15 OLED UX582ZM-H2901W, Intel Core i9 12900H, 32GB RAM, 1TB SSD</a></h5>
          <p class="price"><sup>Ksh</sup><strong>999.99</strong></p>
        </div>
        <div class="wishlist-item-buttons">
          <a href="#" class="buy-now"><i class="fa-solid fa-cart-shopping"></i>Buy Now</a>
          <a href="#" class="remove-product"><i class="fa-solid fa-trash"></i> Remove</a>
        </div>
    </div> -->
  </div>
