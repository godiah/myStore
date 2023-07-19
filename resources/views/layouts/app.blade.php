<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="{{asset('css/best_selling.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/searchbar.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main-navbar.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/aboutus.css')}}">
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact-us.css')}}">
    <link rel="stylesheet" href="{{asset('css/payment.css')}}">
    <link rel="stylesheet" href="{{asset('css/product_details.css')}}">
    <link rel="stylesheet" href="{{asset('css/shop_page.css')}}">
    <link rel="stylesheet" href="{{asset('css/shopping-cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/wishlist.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagination.css')}}">



    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>My Store</title>
    <link rel="icon" type="image/x-icon" href="images/icons8-shopify.png" />
    @livewireStyles
  </head>
  <body>
    <!-- Super Navigation Bar -->    
    <div class="superNav border-bottom py-2 bg-light sticky-top">
      <div class="container-super-nav">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
            <span class="">
              <strong><a href="#" class="abt">info@somedomain.com</a></strong>
            </span>
            <span class="tel-no">
              <i class="fa-solid fa-phone"></i>
              <strong><a href="#" style="text-decoration: none; color: #f9d2e0; text-align: center;">+2547 4554 8093</a></strong>
            </span>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block text-end">
            <span class="me-3" id="about_vertical">
              <a class="abt" href="aboutus.html" >About Us</a>
            </span>
            <!-- Blog -->
            <span class="blog"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></span>
            <span class="blog"><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
            <span class="blog"><a href="#"><i class="fa-brands fa-whatsapp"></i></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Logo, Search Bar Log In & Cart  -->
    <div class="logo-search" id="header-1">
      <!-- <div class="burger"><div class="line1"></div><div class="line2"></div><div class="line3"></div></div> -->
      <div class="sm-menu-btn">
        <a href="#" class="cart-sm d-xl-none d-lg-none d-md-none">
          <i class="fa-solid fa-bars-staggered"></i>
        </a>
      </div>
      <!-- Logo -->
      <div class="logo-container">
          <a class="logo-brand" href="/">
            <i class="fa-solid fa-shop me-2"></i>
            <strong>My Store</strong>
          </a>
      </div>
      <!-- Search Bar -->
      <div class="InputContainer">
          <input type="text" name="text" class="input" id="input" placeholder="Search...">  
          <label for="input" class="labelforsearch">
            <svg viewBox="0 0 512 512" class="searchIcon"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg>
          </label>          
      </div>
      <!-- Log In & Cart  -->
      <div class="log-in-container"> 
        <div class="dropdown">
            @auth
                @if(Auth::user()->utype=='ADM')
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>{{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <a class="dropdown-item hm-sgn-in" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
                            </form>
                        </li>
                        
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('admin.dashboard')}}"><i class="fa-solid fa-user"></i>Dashboard</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-basket-shopping"></i>Orders</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-basket-shopping"></i>Products</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-basket-shopping"></i>Categories</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-basket-shopping"></i>Customers</a></li>
                        <li><a class="dropdown-item" href="wishlist.html"><i class="fa-solid fa-gift"></i>Saved Items</a></li>
                    </ul>
                @else
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>{{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <a class="dropdown-item hm-sgn-in" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
                            </form>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('user.dashboard')}}"><i class="fa-solid fa-user"></i>My Account</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-basket-shopping"></i>Orders</a></li>
                        <li><a class="dropdown-item" href="wishlist.html"><i class="fa-solid fa-gift"></i>Saved Items</a></li>
                    </ul>
                @endif
            @else

                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>Account
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item hm-sgn-in" href="{{route('login')}}">Sign In</a></li>
                    <li><a class="dropdown-item hm-sgn-in" href="{{route('register')}}">Register</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <!-- <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>My Account</a></li> -->
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-basket-shopping"></i>Orders</a></li>
                    <li><a class="dropdown-item" href="wishlist.html"><i class="fa-solid fa-gift"></i>Saved Items</a></li>
                </ul>
            @endif
        </div>
        <div class="border-login"></div>
        <a href="cart.html"><i class="crt fa-solid fa-cart-shopping"></i><sup>2</sup> Cart/Ksh0.00</a>          
      </div>
      <div>
        <a href="cart.html" class="cart-sm d-xl-none d-lg-none d-md-none"><i class="fa-solid fa-cart-shopping mx-1"></i><sup>1</sup></a>
      </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="sticky-nav">
      <div class="wrapper">
        <input type="radio" name="slider" id="menu-btn">
        <input type="radio" name="slider" id="close-btn">
        <ul class="nav-links">
          <!-- <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label> -->
          <li><a href="{{route('shop')}}">Shop</a></li>
          <!-- Computer Accesories -->
          <li>
            <a href="shop_accessories.html" class="desktop-item">Accesories <i class="fa-solid fa-caret-down"></i></a>
            <input type="checkbox" id="showMega">
            <label for="showMega" class="mobile-item">Accesories</label>
            <div class="mega-box">
            <div class="content">
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#" class="mx-4" id="row-header"><b>Computer Accesories</b></a></li>
                  <li><a href="#" class="mx-4">Headphones</a></li>
                  <li><a href="#" class="mx-4">Laptop Chargers</a></li>
                  <li><a href="#" class="mx-4">Laptop Batteries</a></li>
                  <li><a href="#" class="mx-4">Webcam</a></li>
                  <li><a href="#" class="mx-4">VGA Cables</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#" id="row-header"><b>Storage</b></a></li>
                  <li><a href="#">Flash Drives</a></li>
                  <li><a href="#">Memory Cards</a></li>
                  <li><a href="#">Internal Hard Disk HDD</a></li>
                  <li><a href="#">Solid State Devices SSD</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#" id="row-header"><b>Network Accesories</b></a></li>
                  <li><a href="#">Patch Panel</a></li>                  
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#">USB Cables</a></li>
                  <li><a href="#">HDMI</a></li>
                  <li><a href="#">Surge Protector</a></li>
                  <li><a href="#">Speakers</a></li>
                </ul>
              </div>
            </div>
            </div>
          </li>
          <!-- Computing -->
          <li>
            <a href="shop_computing.html" class="desktop-item">Computing <i class="fa-solid fa-caret-down"></i></a>
            <input type="checkbox" id="showMega">
            <label for="showMega" class="mobile-item">Computing</label>
            <div class="mega-box">
            <div class="content">
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#" class="mx-4" id="row-header"><b>Laptops</b></a></li>
                  <li><a href="#" class="mx-4">DELL Laptops</a></li>
                  <li><a href="#" class="mx-4">HP Laptops</a></li>
                  <li><a href="#" class="mx-4">Lenovo Laptops</a></li>
                  <li><a href="#" class="mx-4">Asus Laptops</a></li>
                  <li><a href="#" class="mx-4">Refurbished Laptops</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#" id="row-header"><b>Desktop Computers</b></a></li>
                  <li><a href="#">Flash Drives</a></li>
                  <li><a href="#">Memory Cards</a></li>
                  <li><a href="#">Memory Cards</a></li>
                  <li><a href="#">Solid State Devices SSD</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#" id="row-header"><b>Printers & Scanners</b></a></li>
                  <li><a href="#">Flash Drives</a></li>
                  <li><a href="#">Memory Cards</a></li>
                  <li><a href="#">Solid State Devices SSD</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#">USB Cables</a></li>
                  <li><a href="#">HDMI</a></li>
                  <li><a href="#">Surge Protector</a></li>
                  <li><a href="#">Speakers</a></li>
                </ul>
              </div>
            </div>
            </div>
          </li>
          <!-- Electronics -->
          <li>
            <a href="shop_electronics.html" class="desktop-item">Electronics <i class="fa-solid fa-caret-down"></i></a>
            <input type="checkbox" id="showMega">
            <label for="showMega" class="mobile-item">Electronics</label>
            <div class="mega-box">
            <div class="content">
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#" class="mx-4" id="row-header"><b>Cameras</b></a></li>
                  <li><a href="#" class="mx-4">Headphones</a></li>
                  <li><a href="#" class="mx-4">Laptop Chargers</a></li>
                  <li><a href="#" class="mx-4">Laptop Batteries</a></li>
                  <li><a href="#" class="mx-4">Webcam</a></li>
                  <li><a href="#" class="mx-4">VGA Cables</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#" id="row-header"><b>TVs</b></a></li>
                  <li><a href="#">Flash Drives</a></li>
                  <li><a href="#">Memory Cards</a></li>
                  <li><a href="#">Memory Cards</a></li>
                  <li><a href="#">Solid State Devices SSD</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#" id="row-header"><b>Mobile Phones</b></a></li>
                  <li><a href="#">Flash Drives</a></li>
                  <li><a href="#">Memory Cards</a></li>
                  <li><a href="#">Solid State Devices SSD</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#">USB Cables</a></li>
                  <li><a href="#">HDMI</a></li>
                  <li><a href="#">Surge Protector</a></li>
                  <li><a href="#">Speakers</a></li>
                </ul>
              </div>
            </div>
            </div>
          </li>
          <!--  Networking -->
          <li>
            <a href="shop_networking.html" class="desktop-item">Networking <i class="fa-solid fa-caret-down"></i></a>
            <input type="checkbox" id="showMega">
            <label for="showMega" class="mobile-item">Networking</label>
            <div class="mega-box">
            <div class="content">
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#" class="mx-4" id="row-header"><b>TP Link</b></a></li>
                  <li><a href="#" class="mx-4">Headphones</a></li>
                  <li><a href="#" class="mx-4">Laptop Chargers</a></li>
                  <li><a href="#" class="mx-4">Laptop Batteries</a></li>
                  <li><a href="#" class="mx-4">Webcam</a></li>
                  <li><a href="#" class="mx-4">VGA Cables</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#" id="row-header"><b>Tenda</b></a></li>
                  <li><a href="#">Flash Drives</a></li>
                  <li><a href="#">Memory Cards</a></li>
                  <li><a href="#">Memory Cards</a></li>
                  <li><a href="#">Solid State Devices SSD</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#" id="row-header"><b>DP Link</b></a></li>
                  <li><a href="#">Flash Drives</a></li>
                  <li><a href="#">Memory Cards</a></li>
                  <li><a href="#">Solid State Devices SSD</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#">USB Cables</a></li>
                  <li><a href="#">HDMI</a></li>
                  <li><a href="#">Surge Protector</a></li>
                  <li><a href="#">Speakers</a></li>
                </ul>
              </div>
            </div>
            </div>
          </li>
          <!-- Contact Us -->
          <li><a href="contact_us.html">Contact Us</a></li>           
        </ul>
        <!-- <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label> -->
      </div>
    </nav>          

  {{$slot}}

   <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="full">
            <div class="logo_footer">
              <h3>Contact Us</h3>
            </div>
            <br>
            <div class="information_footer">
              <p><strong>ADDRESS:</strong> Old Mutual, Moi Avenue, KEN</p>
              <p><strong>TELEPHONE:</strong> +2547 4554 8093</p>
              <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
              <p><strong>URL:</strong> www.mystore.co.ke</p>
            </div>            
          </div>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-10">
              <div class="row">
                <div class="col-md-6">
                  <div class="widget_menu">
                    <h3>Quick Links</h3>                      
                    <ul>
                      <li><a href="#">HP Laptops</a></li>
                      <li><a href="#">Mobile Phones</a></li>
                      <li><a href="#">TP Link Equipment</a></li>
                      <li><a href="shop_accessories.html">Accesories</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="widget_menu">
                    <h3>Information</h3>
                    <ul>
                      <li><a href="#">General Terms and Conditions.</a></li>
                      <li><a href="#">Privacy and Security Policy.</a></li>
                      <li><a href="#">Delivery and Order Information.</a></li>
                      <li><a href="#">Return Policy</a></li>
                      <li><a href="aboutus.html">About Us</a></li>
                      <li><a href="#">My Account</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Copyright & Blog -->
  <div class="cpy_">
    <div class="quick-links">
      <ul>
        <li><a href="shop_networking.html">Networking Equipment</a></li>
        <li><a href="shop_accessories.html">Accesories</a></li>
        <li><a href="shop_computing.html">Computing Products </a></li>
        <li><a href="shop_electronics.html">Electronics Products </a></li>
      </ul>
    </div>   
    <div class="footer-img">
      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
      <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
    </div>   
    <p class="mx-auto">© 2023 All Rights Reserved.<br> My Store</p>
  </div>

    <!-- Js Links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/checkout.js')}}"></script>
    <script src="{{asset('js/cart.js')}}"></script>
    @livewireScripts
  </body>
</html>

