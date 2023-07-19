<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <!-- Product Details -->
    <div class="product-wrapper">
      <div class="product-image">
        <img src="{{asset('images/')}}/{{$product->image}}.jpg" alt="Product Image">
      </div>
      <div class="product-description">
        <div class="product-title">
          <h5>{{$product->name}}</h5>
        </div>
        <p class="product-price"><sup>Ksh. </sup>{{$product->regular_price}}</p>
        <div class="product-details">
          <h6>{{$product->name}}:</h6>
          <ul class="mb-3">
            <li>Display: 15.6" Full HD</li>
            <li>Processor: Intel Core i7</li>
            <li>RAM: 16GB</li>
            <li>Storage: 1TB SSD</li>
            <li>Graphics: NVIDIA GeForce GTX 1650</li>
            <li>Operating System: Windows 10</li>
          </ul>

          <div class="d-flex">
            <div class="quantity">
              <span class="minus"> - </span>
              <span class="num"> 1 </span>
              <span class="plus"> + </span>
            </div>
            <div>
              <a href="#" class="add-to-cart">Add to Cart</a>
              <a href="wishlist.html" class="add-to-wishlist"><i class="fa-regular fa-heart"></i>Add to Wishlist</a>
            </div>
          </div>
          <p class="mt-3">Buy at Best and Discounted prices in Nairobi kenya</p>
          <div class="social-icons">
            <span class="whatsapp">
            <i class="fa-brands fa-whatsapp"></i>          
            </span>
            <span class="facebook">
            <i class="fab fa-facebook-f"></i>          
            </span>
            <span class="ig">
            <i class="fab fa-instagram"></i></i>          
            </span>
            <span class="mail">
            <i class="fa-solid fa-envelope"></i></i>           
            </span>
            <span class="lnkd">
            <i class="fab fa-linkedin-in"></i>          
            </span>
          </div>          
        </div>
      </div>
    </div>

    <!-- Product Description Tab -->
    <div class="description-tab">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Description</a>
        </li>
      </ul>
      <div class="tab-info">
        <h5>{{$product->name}}</h5>
        <p>
          {{$product->description}}.
        </p>
        <h6>{{$product->name}} Key Features:</h6>
        <ul>
          <li>2.4-inch 320×240 pixel color screen</li>
          <li>Support audio codec G.722 and Opus, HD audio on speakerphone and handset</li>
          <li>Support 6-party local conference</li>
          <li>Support EHS wireless headset</li>
        </ul>
        <h6>Similar Products:</h6>
        <ul>
          <li><a href="#" class="similar-products">Fanvil X4 4 Line Enterprise Multi Color Screens Phone</a></li>
          <li><a href="#" class="similar-products">Fanvil X4 4 Line Enterprise Multi Color Screens Phone</a></li>
        </ul>
      </div>
    </div>

    <!-- Related Products -->
    <div class="related-products">
      <h4>Related Products</h4>
      <div class="related-container">
        <div class="related-product-cards">
            @foreach ($rproducts as $rproduct)
                <div class="related-product-card">
                    <a href="{{route('product.details',['slug'=>$rproduct->slug])}}"><img src="{{asset('images/')}}/{{$rproduct->image}}.jpg" alt="Image of {{$rproduct->name}}"></a>
                    <h5>{{$rproduct->name}}</h5>
                    <p class="desc">Fanvil X6 High-End VoIP IP Phone 4.3-Inch Color Display</p>
                    <p class="price">Kshs. {{$rproduct->regular_price}}</p>
                    <a href="#" class="add-to-cart">Add to Cart</a>
                </div>
            @endforeach
          <!-- <div class="related-product-card">
            <a href="product_details.html"><img src="{{asset('images/1.jpg')}}" alt="Product Image"></a>
            <h5>FANVIL IP PHONES</h5>
            <p class="desc">Fanvil X6 High-End VoIP IP Phone 4.3-Inch Color Display</p>
            <p class="price">19.99</p>
            <a href="#" class="add-to-cart">Add to Cart</a>
          </div>       -->
        <!-- Add more product cards here -->
        </div>
      </div>
      <!-- <div>More</div> -->
    </div>
</div>
