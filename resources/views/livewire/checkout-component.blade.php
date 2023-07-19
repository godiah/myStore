<div>
    {{-- In work, do what you enjoy. --}}
    <!-- Page Title -->
  <div class="chk-title">
    <h3>Checkout</h3>
  </div>
  <!-- Checkout -->
  <div class="checkout-details">
    <div class="user-details">
      <div class="address-details">
        <div class="address-title">
          <h1><strong>BILLING DETAILS</strong></h1>
        </div>
        <div class="address-from">
          <form action="#">
            <div class="d-flex">
              <!-- First Name -->
              <div class="address-input">
                <label for="input" class="text">First Name: </label>
                <input type="text" placeholder="First Name..." name="" class="input">
              </div>
              <!-- Last Name -->
              <div class="address-input">
                <label for="input" class="text">Last Name: </label>
                <input type="text" placeholder="Last Name..." name="" class="input">
              </div>
            </div>
            <div class="d-flex">
              <!-- Phone Number -->
              <div class="address-input">
                <label for="input" class="text">Phone Number: </label>
                <input type="text" placeholder="Phone Number" name="" class="input">
              </div>
              <!-- Additional Phone Number -->
              <div class="address-input">
                <label for="input" class="text">Additional Number: </label>
                <input type="text" placeholder="Additional Phone Number" name="" class="input">
              </div>
            </div>
            <!-- Address -->
            <div class="d-flex">
              <div class="address-input" id="address-width">
                <label for="input" class="text">Address: </label>
                <input type="text" placeholder="Street Name" name="" class="input">              
              </div>
              <div class="address-input" id="address-width">
                <label for="input" class="text">Residence: </label>        
                <input type="text" placeholder="Apartment Name & House Number" name="" class="input">
              </div> 
            </div>           
            <div class="d-flex">
              <!-- Region -->
              <div class="address-input">
                <label for="input" class="text">Region: </label>
                <input type="text" placeholder="Region" name="" class="input">
              </div>
              <!-- City -->
              <div class="address-input">
                <label for="input" class="text">City: </label>
                <input type="text" placeholder="City" name="" class="input">
              </div>
            </div>
            <!-- Additional Information -->
            <div class="address-input" id="address-width">
              <label for="input" class="text">Additional Information: </label>
              <input type="text" placeholder="Additional Information" name="" class="input">
            </div>
            <div class="address-button">
              <a href="#" class="btn-cancel">Cancel</a>
              <a href="#" class="btn-save">Save</a>
            </div>            
          </form>
        </div>
      </div>
    </div>    
    <!-- Order Summary -->
    <div class="order-summary">
      <div class="order-summary-title">
        <h1><strong>ORDER SUMMARY</strong></h1>
      </div>
      <div class="order-details-checkout">
        <table>
          <thead>
            <tr>
              <th>PRODUCT</th>
              <th>SUBTOTAL</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>Fanvil X303P Enterprise IP Phone <span></span></td>
                <td><strong>KSh22,000.00</strong></td>
              </tr>
              <tr>
                <td>ASUS E410MA-BV1517, Intel Celeron N4020, 4GB DDR4 2666, 256GB SSD</td>
                <td><strong>KSh32,000.00</strong></td>
              </tr>
              <tr>
                <td>ASUS E410MA-BV1517, Intel Celeron N4020, 4GB DDR4 2666, 256GB SSD</td>
                <td><strong>KSh32,000.00</strong></td>
              </tr>
              <tr>
                <td>ASUS Zenbook Pro Duo 15 OLED UX582ZM-H2901W, Intel Core i9 12900H, 32GB RAM, 1TB SSD</td>
                <td><strong>KSh32,000.00</strong></td>
              </tr>
              <tr class="chk-total">
                <td><strong>Total: </strong></td>
                <td><strong>KSh70,640.00</strong></td>
              </tr>
          </tbody>
        </table>
        <div class="payment-options">
          <h3>Payment Options</h3>
          <label class="payment-option-label">
            <input type="radio" name="payment-option" value="direct-bank-transfer"
              onclick="showPaymentInstructions('direct-bank-transfer')">
            Direct Bank Transfer
          </label>
          <div class="payment-instructions" data-option="direct-bank-transfer">Make your payment directly into our bank
            account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have
            cleared in our account.<hr></div>
          
          <label class="payment-option-label">
            <input type="radio" name="payment-option" value="lipa-na-m-pesa"
              onclick="showPaymentInstructions('lipa-na-m-pesa')">
            Lipa na MPESA
          </label>
          <div class="payment-instructions" data-option="lipa-na-m-pesa">Kindly pay through Lipa na MPESA Paybill; Business
            Number 996488. After payment, kindly forward the Mpesa confirmation text to +254700449778.<hr></div>
          
          <label class="payment-option-label">
            <input type="radio" name="payment-option" value="cash-on-delivery"
              onclick="showPaymentInstructions('cash-on-delivery')">
            Cash on Delivery
          </label>
          <div class="payment-instructions" data-option="cash-on-delivery">Pay with cash upon delivery.<hr></div>
        </div>
        <div class="place-order">
          <a href="#" class="checkout-btn-place-order">Confirm Order</a> 
        </div>
      </div>
    </div>
  </div>
  
  <!-- Continue Shopping -->
  <div class="continue-shop">
    <a href="shop_page.html"><i class="fa-solid fa-less-than"></i>Go back & continue shopping</a>
  </div>

  <!-- Js code to display no payment instruction -->
  <script>
    const paymentInstructions = document.querySelectorAll('.payment-instructions');
    paymentInstructions.forEach(function (instructions) {
    instructions.style.display = 'none';
    });
  </script>
</div>
