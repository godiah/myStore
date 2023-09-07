<div>
  <style>
    .clear-cart-div{
       text-align: right;
    }
    /* Clear Cart Button Styles */
.clear-cart-button {
    display: inline-block;
    padding: 7px 30px;
    margin-top: 15px;
    background-color: #f44336; 
    color: #fff; 
    text-decoration: none;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.clear-cart-button:hover {
    background-color: #d32f2f; /* Darker red on hover */
}

.clear-cart-button:focus {
    outline: none; /* Remove the default focus outline */
}

  </style>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="cart-title">
    <h3>Shopping Cart</h3>
  </div>
  <div class="shop-cart">
    <div class="shop-cart-items">
      @if(Session::has('success_message'))
        <div>
          <strong>Success | {{Session::get('success_message')}}</strong>
        </div>
      @endif
      @if(Cart::instance('cart')->count()>0)

      <table id="cart">
          
        <thead>
          <tr class="cart-heading">
            <th></th>
            <th>PRODUCT</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>SUBTOTAL</th> 
            <th>REMOVE</th>           
          </tr>
        </thead>

          <tbody>
              @foreach(Cart::instance('cart')->content() as $item)
                <tr>
                  <td><i class="fa-regular fa-circle-xmark delete-btn"></i></td>
                  <td class="item-name">              
                    <img class="item-image" src="{{asset('images/')}}/{{$item->model->image}}.jpg" alt="Item Image">
                    <span>{{$item->model->name}}</span>
                  </td>
                  <td class="item-price"><strong>Ksh.{{$item->model->regular_price}}</strong></td>
                  <td>
                    <div class="cart-quantity">
                      <span class="minus decrement-btn"> <a href="#" style="text-decoration: none;"  wire:click.prevent="decreaseQuantity('{{$item->rowId}}')" >-</a> </span>
                      <span class="num number"> {{$item->qty}} </span>
                      <span class="plus increment-btn"> <a href="#" style="text-decoration: none;" wire:click.prevent="increaseQuantity('{{$item->rowId}}')">+</a> </span>
                    </div>
                  </td>
                  <td class="sub-total"><strong>Ksh.{{$item->subtotal}}</strong></td>      
                  <td><a href="#" wire:click.prevent="destroy('{{$item->rowId}}')">delete</a></td>      
                </tr>
              @endforeach
            
            <!-- <tr>
              <td><i class="fa-regular fa-circle-xmark delete-btn"></i></td>
              <td class="item-name">
                <img class="item-image" src="{{asset('images/hp.webp')}}" alt="Item Image">
                <span>ASUS Zenbook Pro Duo 15 OLED UX582ZM-H2901W, Intel Core i9 12900H, 32GB RAM, 1TB SSD</span>
              </td>
              <td class="item-price"><strong>Ksh5,500.00</strong></td>
              <td>
                <div class="cart-quantity">
                  <span class="minus"> - </span>
                  <span class="num"> 1 </span>
                  <span class="plus"> + </span>
                </div>
              </td>
              <td class="sub-total"><strong>Ksh5,500.00</strong></td>            
            </tr>                   				 -->
          </tbody>
      </table>
      @else
        <div>
          <p>No items in your cart</p>
        </div>
      @endif
      <div class="clear-cart-div">
        <a class="clear-cart-button" href="#" wire:click.prevent="clearAll()">
          <span class="material-symbols-outlined">delete</span>Clear Cart
        </a>
      </div>
      <div class="mt-4">
        <a href="{{route('shop')}}" id="continue-shop-btn" class="continue-shop-btn"><i class="fa-solid fa-arrow-left"></i>Continue Shopping</a>
      </div>
    </div>
    <div class="shop-cart-totals">
      <table id="cart-totals">
        <thead>
          <tr>
            <th class="cart-heading">CART TOTALS</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr >
            <td class="cart-list">Subtotal</td>
            <td class="tt"><strong>Ksh. {{Cart::subtotal()}}</strong></td>
          </tr>
          <tr>
            <td class="cart-list">Free Shipping</td>
            <td class="tt"><strong>Ksh. 0.00</strong></td>
          </tr>
          <tr>
            <td class="cart-list">16% VAT Tax</td>
            <td class="tt"><strong>Ksh. {{Cart::tax()}}</strong></td>
          </tr>
          <tr class="bottom">
            <td class="cart-list">Total (incl tax)</td>
            <td class="tt"><strong>Ksh. {{Cart::total()}}</strong></td>
          </tr>
        </tbody>
      </table>
      <div class="checkout-btn">
        <a href="checkout.html" id="">Proceed to Checkout</a>
      </div>      
    </div>
  </div>
  <!-- Increment and decrement JS -->
  <script>
    const decrementBtn = document.querySelector('.decrement-btn');
    const incrementBtn = document.querySelector('.increment-btn');
    const numberDisplay = document.querySelector('.number');

    let number = 1;

    decrementBtn.addEventListener('click', () => {
        if (number > 1) {
        number--;
        numberDisplay.textContent = number;
        }
    });

    incrementBtn.addEventListener('click', () => {
        number++;
        numberDisplay.textContent = number;
    });
  </script>
</div>
