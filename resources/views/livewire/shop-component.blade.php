<div>
    {{-- The whole world belongs to you. --}}
    <div class="online-shop-container">
      <div>
          <h3 class="online-title">Online Shopping</h3>
      </div>
      <div class="shop-about">
        <p> MyStore is your number one Online Shopping solution. You can purchase all your Computer 
            and Networking Accessorries, Computing Equipment, Electronics, TELEPHONE SYSTEM, Networking Equipment,
            Power & Electrical, Security Systems , Telephone Systems and more online and have them delivered to you. 
            MyStore has payment options that suit everyone, and we have a payment-on-delivery option for extra convenience. 
            We are a trusted Computer shop in Nairobi, Kenya with express delivery countrywide and a proven track record on variety, 
            best prices, speedy delivery and excellent service.
        </p>
      </div>
      <div class="row">
        <!-- Categories & Products-->
        <div class="col-md-3">
          <div class="categories">
              <h5 class="category-title">Categories</h5>
              <select>
                    <option value="all">All Categories</option>
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                    <option value="category3">Category 3</option>
              </select>
          </div>
          <div class="categories">
            <h5 class="category-title">Product Categories</h5>
            <div>
              <ul>
                <li><a href="#">Computing Products</a></li>
                <li><a href="#">Computing Products</a></li>
                <li><a href="#">Computing Products</a></li>
                <li><a href="#">Computing Products</a></li>
                <li><a href="#">Computing Products</a></li>
              </ul>
            </div>                  
          </div>
        </div>
        <!-- Products -->
        <div class="col-md-9">                
          <div class="shop-container">
              <div class="product-cards">
                @foreach($products as $product)
                    <div class="product-card">
                    <a href="product_details.html"><img src="{{asset('images/product-')}}{{$product->id}}.jpg" alt="image of {{$product->name}}"></a>
                    <h5>{{$product->name}}</h5>
                    <p class="p-desc"><a href="product_details.html">TP-Link 300Mbps Wireless N Wall-Plate Access Point – EAP115-WALL</a></p>
                    <p class="price">{{$product->regular_price}}</p>
                    <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>  
                @endforeach


                <!-- <div class="product-card">
                  <a href="product_details.html"><img src="{{asset('images/hp2.png')}}" alt="Product Image"></a>
                  <h5>Fanvil X303P Enterprise IP Phone</h5>
                  <p class="p-desc"><a href="product_details.html">TP-Link 300Mbps Wireless N Wall-Plate Access Point – EAP115-WALL</a></p>
                  <p class="price">Ksh1,119.99</p>
                  <a href="#" class="add-to-cart">Add to Cart</a>
                </div>                   -->

                
                <div class="pagination-container">
                    {{$products->links()}}
                </div>
              
              </div>                    
          </div>
        </div>
      </div>
    </div>
</div>
