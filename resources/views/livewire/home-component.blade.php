<div>
   
    <style>
      .hidden{
          display:none;
      }
      .visible{
        display:block;
      }
      .cat_gory{
        color:red;
      }
      .di_sup_cat{
        margin:8px;
      }
      .di_cat{
        /* margin:4px; */
      }
      .list-container {
        display: flex; /* Use flexbox to create a row layout */
        list-style: none; /* Remove default list bullets/numbers */
        padding: 0; /* Remove default padding */
      }
      .list-item {
          margin-right: 10px; /* Add space between list items */
          /* Additional styling as needed */
      }
    </style>
    <div>
    <ul class="list-container">
        @foreach ($supcategories as $supcategory)
            <li>
                <div class="di_sup_cat">
                    <a href="#" wire:mouseover="showCategories({{ $supcategory->id }}, null)"
                       wire:mouseout="showCategories(null, null)">
                        {{ $supcategory->name }} <i class="fa-solid fa-caret-down"></i>
                    </a>
                

                  <ul class="{{ $selectedSupcategory == $supcategory->id ? 'visible' : 'hidden' }}">
                      @foreach ($supcategory->categories as $category)
                          <li>
                              <div class="di_cat" wire:mouseover="showCategories({{ $supcategory->id }}, {{ $category->id }})"
                                    wire:mouseout="showCategories({{ $supcategory->id }}, null)">
                                  <a href="#" 
                                     class="cat_gory">
                                      {{ $category->name }} <i class="fa-solid fa-caret-down"></i>
                                  </a>
                              

                                <ul class="{{ $selectedCategory == $category->id ? 'visible' : 'hidden' }}">
                                    @foreach ($category->subcategories as $subcategory)
                                        <li>
                                            <a href="#" class="mx-4">{{ $subcategory->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                              </div>
                          </li>
                      @endforeach
                  </ul>
                </div>
            </li>
        @endforeach
    </ul>
</div>




    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <main>
    <!-- Hero Section -->
    <div class="main-hero" id="home-hero">
      <div class="horizon-line">
        <h3>Welcome to My Store</h3>
      </div>
      <p class="heading"><h1>Discounted Prices : Wholesale & Retail</h1></p>
      <div class="horizon-line">
        <p>Save time and money on free deliveries on orders above Ksh. 10,000</p>
      </div>
      <div class="btn-box">
        <a href="shop_computing.html" class="btn1">Shop Computers</a>
        <a href="shop_networking.html" class="btn1">Shop Networking</a>
        <a href="shop_page.html" class="btn1">Shop All</a>
      </div>
    </div>

    <!-- Browse Our Categories -->
    <section class="category_layout">
      <div class="heading_center container">
        <h2><span>Our Categories</span></h2>
      </div>
    </section>
    <section id="categories-card">
      <div class="category-container">
        <div class="category-cards">
          <div class="category-card">
            <a href="shop_accessories.html"><img src="images/product2.png" alt="Product Image"></a>
            <h5><b>Accesories</b></h5>            
          </div>      
          <div class="category-card">
            <a href="shop_computing.html"><img src="images/hp2.png" alt="Product Image"></a>            
            <h5><b>Computing</b></h5>            
          </div>      
          <div class="category-card">
            <a href="shop_electronics.html"><img src="images/product3.png" alt="Product Image"></a>            
            <h5><b>Electronics</b></h5>
          </div>
         <div class="category-card">
            <a href="shop_networking.html"><img src="images/product1.jpg" alt="Product Image"></a>
            <h5><b>Networking</b></h5>
          </div>
        <!-- Add more category cards here -->
        </div>                    
      </div>
    </section>

    <!-- Best Selling Products -->
    <section class="category_layout">
      <div class="heading_center container">                
        <h2><span>Best Selling Products</span></h2>
      </div>
    </section>
    <section class="best-selling-product"> 
      <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
      <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
      <div class="best-selling-product-container">
        <div class="best-selling-product-card">
          <div class="best-selling-product-image">
            <img src="images/product1.jpg" class="product-thumb" alt="">
          </div>
          <div class="best-selling-product-info">
            <h2 class="best-selling-product-brand">UGREEN Bluetooth 5.3 USB Adapter CM591</h2>
            <p class="product-short-description"><a href="product_details.html">ASUS E410MA-BV1517, Intel Celeron N4020, 4GB DDR4 2666, 256GB SSD</a></p>
            <span class="best-selling-price">Ksh999.99</span>
          </div>
        </div>
        <div class="best-selling-product-card">
          <div class="best-selling-product-image">
            <img src="images/hp.webp" class="product-thumb" alt="">
          </div>
          <div class="best-selling-product-info">
            <h2 class="best-selling-product-brand">UGREEN Bluetooth 5.3 USB Adapter CM591</h2>
            <p class="product-short-description"><a href="product_details.html">ASUS E410MA-BV1517, Intel Celeron N4020, 4GB DDR4 2666, 256GB SSD</a></p>
            <span class="best-selling-price">Ksh999.99</span>
          </div>
        </div>
        <div class="best-selling-product-card">
          <div class="best-selling-product-image">
            <img src="images/hp2.png" class="product-thumb" alt="">
          </div>
          <div class="best-selling-product-info">
            <h2 class="best-selling-product-brand">UGREEN Bluetooth 5.3 USB Adapter CM591</h2>
            <p class="product-short-description"><a href="product_details.html">ASUS E410MA-BV1517, Intel Celeron N4020, 4GB DDR4 2666, 256GB SSD</a></p>
            <span class="best-selling-price">Ksh999.99</span>
          </div>
        </div>
        <div class="best-selling-product-card">
          <div class="best-selling-product-image">
            <img src="images/product1.jpg" class="product-thumb" alt="">
          </div>
          <div class="best-selling-product-info">
            <h2 class="best-selling-product-brand">UGREEN Bluetooth 5.3 USB Adapter CM591</h2>
            <p class="product-short-description"><a href="product_details.html">ASUS E410MA-BV1517, Intel Celeron N4020, 4GB DDR4 2666, 256GB SSD</a></p>
            <span class="best-selling-price">Ksh999.99</span>
          </div>
        </div>  
      </div>
    </section>
  </main>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.desktop-item').hover(
            function () {
                const supcategoryId = $(this).data('supcategory');
                $('[data-category-container]').hide();
                $(`[data-category-container="${supcategoryId}"]`).show();
            },
            function () {
                $('[data-category-container]').hide();
            }
        );
    });
</script>

</div>
