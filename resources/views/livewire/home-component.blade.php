<div>
  
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
    <!-- <section class="category_layout">
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
        </div>                    
      </div>
    </section> -->

    <!-- Best Selling Products -->
    @foreach ($supcategories as $supcategory)
    <section class="category_layout">
      <div class="heading_center container">                
        <h2><span>{{$supcategory->name}} Products</span></h2>
      </div>
    </section>
    <section class="best-selling-product"> 
      <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
      <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
      <div class="best-selling-product-container">
        @foreach ($supcategory->products as $product)
        <div class="best-selling-product-card">
          <div class="best-selling-product-image">
            <img src="{{asset('images/')}}/{{$product->image}}.jpg" class="product-thumb" alt="">
          </div>
          <div class="best-selling-product-info">
            <h2 class="best-selling-product-brand">{{$product->name}}</h2>
            <div class="overflow-info">
              <p class="product-short-description"><a class="ov-link" href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->short_description}}</a></p>
            </div>
            <span class="best-selling-price">Ksh. {{$product->regular_price}}</span>
          </div>
        </div>
        @endforeach  
      </div>
    </section>
    @endforeach

    <!-- Best selling (Mobile Devices) -->
    @foreach ($supcategories as $supcategory)
    <section class="category_layout-swiper">
      <div class="heading_center container">                
        <h2><span>{{$supcategory->name}} Products</span></h2>
      </div>
    </section>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @foreach ($supcategory->products as $product)
        <div class="swiper-slide">
          <div class="swiper-best-selling-product-image">
              <img src="{{asset('images/')}}/{{$product->image}}.jpg" class="swiper-product-thumb" alt="">
          </div>
          <div class="swiper-best-selling-product-info">
              <h2 class="swiper-best-selling-product-brand">{{$product->name}}</h2>
              <p class="swiper-product-short-description"><a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->short_description}}</a></p>
              <span class="swiper-best-selling-price">Ksh. {{$product->regular_price}}</span>
          </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>
    @endforeach


  </main>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
  <!-- Image Slider -->
  <script>
    const productContainers = [...document.querySelectorAll('.best-selling-product-container')];
    const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
    const preBtn = [...document.querySelectorAll('.pre-btn')];

    productContainers.forEach((item, i) => {
        let containerDimensions = item.getBoundingClientRect();
        let containerWidth = containerDimensions.width;
    
        nxtBtn[i].addEventListener('click', () => {
            item.scrollLeft += containerWidth;
        })
      
        preBtn[i].addEventListener('click', () => {
            item.scrollLeft -= containerWidth;
        })
  })
  </script>
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
