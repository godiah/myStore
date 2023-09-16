<div>
    {{-- In work, do what you enjoy. --}}
    <!-- Page Title -->
  <div class="chk-title">
    <h3>Checkout</h3>
  </div>
  <!-- Checkout -->
  <!-- <form wire:submit.prevent="placeOrder"> -->
  <div>
    <form wire:submit.prevent="placeOrder">
      <div class="checkout-details">
        <div class="user-details">
          <div class="address-details">
            <div class="address-title">
              <h1><strong>BILLING DETAILS</strong></h1>
            </div>
            <div class="address-from">
              <div action="#">
                <div class="d-flex">
                  <!-- First Name -->
                  <div class="address-input">
                    <label for="input" class="text">First Name: </label>
                    <input type="text" placeholder="First Name..." name="" class="input" wire:model="firstname">
                    @error('firstname')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                  <!-- Last Name -->
                  <div class="address-input">
                    <label for="input" class="text">Last Name: </label>
                    <input type="text" placeholder="Last Name..." name="" class="input" wire:model="lastname">
                    @error('lastname')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="d-flex">
                  <!-- Phone Number -->
                  <div class="address-input">
                    <label for="input" class="text">Phone Number: </label>
                    <input type="text" placeholder="Phone Number" required name="" class="input" wire:model="mobile">
                    @error('mobile')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                  <!-- Additional Phone Number -->
                  <div class="address-input">
                    <label for="input" class="text">Additional Number: </label>
                    <input type="text" placeholder="Additional Phone Number" name="" class="input" wire:model="mobile2">
                    @error('mobile2')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="d-flex">
                  <!-- Email -->
                  <div class="address-input">
                    <label for="input" class="text">Email: </label>
                    <input type="text" placeholder="Email" name="" class="input" wire:model="email">
                    @error('email')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                  <!-- Additional email -->
                  <div class="address-input">
                    <label for="input" class="text">Additional Email: </label>
                    <input type="text" placeholder="Additional Email" name="" class="input" wire:model="email2">
                    @error('email2')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                          
                <div class="d-flex">
                  <!-- Country -->
                  <div class="address-input">
                    <label for="input" class="text">Country: </label>
                    <input type="text" placeholder="Country" name="" class="input" wire:model="country">
                    @error('country')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                  <!-- County -->
                  <div class="address-input">
                    <label for="input" class="text">County: </label>
                    <input type="text" placeholder="County" name="" class="input" wire:model="county">
                    @error('county')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="d-flex">
                  <!-- Subcounty -->
                  <div class="address-input">
                    <label for="input" class="text">SubCounty/Area: </label>
                    <input type="text" placeholder="SubCounty/Area:" name="" class="input" wire:model="subcounty">
                    @error('subcounty')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                  <!-- Town -->
                  <div class="address-input">
                    <label for="input" class="text">Town: </label>
                    <input type="text" placeholder="Town" name="" class="input" wire:model="town">
                    @error('town')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <!-- Specific Area -->
                <div class="address-input" id="address-width">
                  <label for="input" class="text">Specific Area: </label>
                  <input type="text" placeholder="Specific Area" name="" class="input" required wire:model="specificarea">
                  @error('specificarea')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <!-- Address -->
                <div class="d-flex">
                  <div class="address-input" id="address-width">
                    <label for="input" class="text">Address: </label>
                    <input type="text" placeholder="Street Name" name="" class="input" wire:model="streetname" >  
                    @error('streetname')
                      <p style="color:red;">{{$message}}</p>
                    @enderror            
                  </div>
                  <div class="address-input" id="address-width">
                    <label for="input" class="text">Residence: </label>        
                    <input type="text" placeholder="Apartment Name & House Number" name="" class="input" wire:model="aptnumber">
                    @error('aptnumber')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div> 
                </div>
                <!-- Additional Information -->
                <div class="address-input mb-4" id="address-width">
                  <label for="input" class="text">Additional Information: </label>
                  <input type="text" placeholder="Additional Information" name="" class="input" wire:model="addinfo">
                  @error('addinfo')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>

                <!-- 
                  <div class="address-button">
                  <a href="#" class="btn-cancel">Cancel</a>
                  <a href="#" class="btn-save">Save</a>
                  </div>  -->
              </div>
            </div>
            <!-- <div style="">
              <input type="checkbox" name="" value="1" id="" wire:model="ship_to_different"> <span>Ship to different address?</span>
            </div> -->
            <div class="form-check mb-3 mt-3 mx-2">
              <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" wire:model="ship_to_different">
              <label class="form-check-label" for="flexCheckDefault">
                Ship to different address?
              </label>
            </div>
            @if ($ship_to_different)
              <div class="address-title">
                <h1><strong>ENTER SHIPPING DETAILS</strong></h1>
              </div>
              <div class="address-from">
              <div action="#">
                <div class="d-flex">
                  <!-- First Name -->
                  <div class="address-input">
                    <label for="input" class="text">First Name: </label>
                    <input type="text" placeholder="First Name..." name="" class="input" wire:model="s_firstname">
                    @error('s_firstname')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                  <!-- Last Name -->
                  <div class="address-input">
                    <label for="input" class="text">Last Name: </label>
                    <input type="text" placeholder="Last Name..." name="" class="input" wire:model="s_lastname">
                    @error('s_lastname')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="d-flex">
                  <!-- Phone Number -->
                  <div class="address-input">
                    <label for="input" class="text">Phone Number: </label>
                    <input type="text" placeholder="Phone Number" required name="" class="input" wire:model="s_mobile">
                    @error('s_mobile')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                  <!-- Additional Phone Number -->
                  <div class="address-input">
                    <label for="input" class="text">Additional Number: </label>
                    <input type="text" placeholder="Additional Phone Number" name="" class="input" wire:model="s_mobile2">
                    @error('s_mobile2')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="d-flex">
                  <!-- Email -->
                  <div class="address-input">
                    <label for="input" class="text">Email: </label>
                    <input type="text" placeholder="Email" name="" class="input" wire:model="s_email">
                    @error('s_email')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                  <!-- Additional email -->
                  <div class="address-input">
                    <label for="input" class="text">Additional Email: </label>
                    <input type="text" placeholder="Additional Email" name="" class="input" wire:model="s_email2">
                    @error('s_email2')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                          
                <div class="d-flex">
                  <!-- Country -->
                  <div class="address-input">
                    <label for="input" class="text">Country: </label>
                    <input type="text" placeholder="Country" name="" class="input" wire:model="s_country">
                    @error('s_country')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                  <!-- County -->
                  <div class="address-input">
                    <label for="input" class="text">County: </label>
                    <input type="text" placeholder="County" name="" class="input" wire:model="s_county">
                    @error('s_county')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="d-flex">
                  <!-- Subcounty -->
                  <div class="address-input">
                    <label for="input" class="text">SubCounty/Area: </label>
                    <input type="text" placeholder="SubCounty/Area:" name="" class="input" wire:model="s_subcounty">
                    @error('s_subcounty')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                  <!-- Town -->
                  <div class="address-input">
                    <label for="input" class="text">Town: </label>
                    <input type="text" placeholder="Town" name="" class="input" wire:model="s_town">
                    @error('s_town')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <!-- Specific Area -->
                <div class="address-input" id="address-width">
                  <label for="input" class="text">Specific Area: </label>
                  <input type="text" placeholder="Specific Area" name="" class="input" required wire:model="s_specificarea">
                  @error('s_specificarea')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <!-- Address -->
                <div class="d-flex">
                  <div class="address-input" id="address-width">
                    <label for="input" class="text">Address: </label>
                    <input type="text" placeholder="Street Name" name="" class="input" wire:model="s_streetname" > 
                    @error('s_streetname')
                      <p style="color:red;">{{$message}}</p>
                    @enderror             
                  </div>
                  <div class="address-input" id="address-width">
                    <label for="input" class="text">Residence: </label>        
                    <input type="text" placeholder="Apartment Name & House Number" name="" class="input" wire:model="s_aptnumber">
                    @error('s_aptnumber')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div> 
                </div>
                <!-- Additional Information -->
                <div class="address-input mb-4" id="address-width">
                  <label for="input" class="text">Additional Information: </label>
                  <input type="text" placeholder="Additional Information" name="" class="input" wire:model="s_addinfo">
                  @error('s_addinfo')
                      <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <!-- <div class="address-button">
                  <a href="#" class="btn-cancel">Cancel</a>
                  <a href="#" class="btn-save">Save</a>
                </div>             -->
              </div>
              </div>
            @endif
          </div>
        </div> 
      
        <!--  -->
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
                @foreach(Cart::instance('cart')->content() as $item)
                  <tr>
                    <td>{{$item->model->name}} - <span>{{$item->model->short_description}}</span></td>
                    <td><strong>KSh.{{$item->subtotal}}</strong></td>
                  </tr>
                @endforeach
                  @if (Session::has('checkout'))
                    <tr class="chk-total">
                      <td><strong>Total: </strong></td>
                      <td><strong>KSh.{{Session::get('checkout')['total']}}</strong></td>
                    </tr>
                  @endif
              </tbody>
            </table>
            <div class="payment-options">
              <h3>Payment Options</h3>
              <!-- Direct Bank Transfer -->
              <label class="payment-option-label">
                <input type="radio" name="payment-option" value="direct-bank-transfer"
                  onclick="showPaymentInstructions('direct-bank-transfer')" wire:model="paymentmode">
                Direct Bank Transfer
              </label>
              <div class="payment-instructions" data-option="direct-bank-transfer">
                Make your payment directly into our bank
                account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have
                cleared in our account.<hr>
              </div>

              <!-- Card Payment -->
              <label class="payment-option-label">
                <input type="radio" name="payment-option" value="card"
                  onclick="showPaymentInstructions('card')" wire:model="paymentmode">
                Card
              </label>
              <div class="payment-instructions" data-option="card">
                Coming Soon | Sorry this payment method isn't available at the moment<hr>
              </div>

              <!-- Lipa na Mpesa -->
              <label class="payment-option-label">
                <input type="radio" name="payment-option" value="lipa-na-m-pesa"
                  onclick="showPaymentInstructions('lipa-na-m-pesa')" wire:model="paymentmode">
                Lipa na MPESA
              </label>
              <div class="payment-instructions" data-option="lipa-na-m-pesa">
                Kindly pay through Lipa na MPESA Paybill; Business
                Number 996488. After payment, kindly forward the Mpesa confirmation text to +254700449778.<hr>
              </div>

              <!-- Cash on Delivery -->
              <label class="payment-option-label">
                <input type="radio" name="payment-option" value="cash-on-delivery"
                  onclick="showPaymentInstructions('cash-on-delivery')" wire:model="paymentmode">
                Cash on Delivery
              </label>
              <div class="payment-instructions" data-option="cash-on-delivery">
                Pay with cash upon delivery.<hr>
              </div>
              @error('paymentmode')
                <p style="color:red;">{{$message}}</p>
              @enderror
            </div>
            <div class="place-order">
              <!-- <a href="#" class="checkout-btn-place-order">Confirm Order</a>  -->
            </div>
            <button type="submit" class="checkout-btn-place-order">Confirm Order</button>
          </div>
        </div>
          
      </div>
    </form>
  </div>
  <!-- </form> -->
  
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
