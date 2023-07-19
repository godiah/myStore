<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="cart-title">
    <h3>Shopping Cart</h3>
  </div>
  <div class="shop-cart">
    <div class="shop-cart-items">
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
          @if(Cart::count()>0)
            <tr>
              <td><i class="fa-regular fa-circle-xmark delete-btn"></i></td>
              <td class="item-name">              
                <img class="item-image" src="{{asset('images/product1.jpg')}}" alt="Item Image">
                <span>Fanvil X303P Enterprise IP Phone</span>
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
            </tr>
          @else
            <div><p>No items in your cart</p></div>
          @endif
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
      <div class="mt-4">
        <a href="index.html" id="continue-shop-btn" class="continue-shop-btn"><i class="fa-solid fa-arrow-left"></i>Continue Shopping</a>
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
            <td class="tt"><strong>Ksh5,500.00</strong></td>
          </tr>
          <tr>
            <td class="cart-list">Shipping</td>
            <td class="tt"><strong>Ksh2,500.00</strong></td>
          </tr>
          <tr>
            <td class="cart-list">16% VAT Tax</td>
            <td class="tt"><strong>Ksh870.00</strong></td>
          </tr>
          <tr class="bottom">
            <td class="cart-list">Total (incl tax)</td>
            <td class="tt"><strong>Ksh7,500.00</strong></td>
          </tr>
        </tbody>
      </table>
      <div class="checkout-btn">
        <a href="checkout.html" id="">Proceed to Checkout</a>
      </div>      
    </div>
  </div>
</div>
