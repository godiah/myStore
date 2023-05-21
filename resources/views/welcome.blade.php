<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="home/assets/best_selling.css">
    <link rel="stylesheet" href="home/assets/styles.css" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>My Store</title>
    <link rel="icon" type="image/x-icon" href="home/images/icons8-shopify.png" />
  </head>
  <body>
    <!-- Super Navigation Bar -->
    <div class="superNav border-bottom py-2 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
            <span  class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3">
              <strong>info@somedomain.com</strong>
            </span>
            <span class="me-3">
              <i class="fa-solid fa-phone"></i>
              <strong>+2547 4554 8093</strong>
            </span>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
            <span class="me-3" id="about_vertical">
              <a class="text-muted text-decoration-none" href="home/aboutus.html">About Us</a>
            </span>
            <span class="me-3"><i class="fa-brands fa-facebook"></i></span>
            <span class="me-3"><i class="fa-brands fa-instagram"></i></span>
            <span class="me-3"><i class="fa-brands fa-pinterest"></i></span>
            <span class="me-3"><i class="fa-brands fa-whatsapp"></i></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">
          <i class="fa-solid fa-shop me-2"></i>
          <strong>My Store</strong>
        </a>
        <!-- Toggle Button -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
          <div class="input-group">
            <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" class="form-control border-warning"/>
            <button class="btn btn-warning text-white">Search</button>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="ms-auto d-none d-lg-block">
            <div class="input-group">
              <span class="input-group-text bg-gray text-dark">
                <i class="fa-solid fa-magnifying-glass"></i>
              </span>
              <input type="text" class="form-control"/>
              <button class="btn btn-dark">Search</button>
            </div>
          </div>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 " href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 " href="#">Services</a>
            </li>
             <li class="nav-item">
              <a class="nav-link mx-2 " href="#">Contact Us</a>
            </li>            
          </ul>
          <ul class="navbar-nav ms-auto"> 
            <li class="nav-item">
              <a class="nav-link mx-2" href="home/cart.html"><i class="fa-solid fa-basket-shopping"></i><sup>2</sup> Cart</a>
            </li>           
            <li class="nav-item">
              <a class="nav-link mx-2" href="#"><i class="fa-solid fa-circle-user me-1"></i> Guest</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <main>
      <!-- Hero Section -->
      <div class="container" id="hero">
        <div class="horizon-line">
          <h3>Welcome to My Store</h3>
        </div>
        <p class="heading"><h1>Discounted Prices: Wholesale & Retail</h1></p>
        <div class="horizon-line">
          <p>Save time and money on free deliveries on orders above Ksh. 10,000</p>
        </div>
        <div class="btn-box">
          <a href="" class="btn1">Shop Computers</a>
          <a href="" class="btn1">Shop Networking</a>
          <a href="" class="btn1">Shop All</a>
        </div>
      </div>

    <!-- Browse Our Categories -->
    <section class="category layout_padding container">
      <div class="heading_container heading_center">
        <h2><span>Browse Our Categories</span></h2>
      </div>
    </section>
    <section class="categories">
      <div class="board">
        <div class="wrapper">
          <div class="product1">
            <div class="image">
              <img src="home/images/product1.jpg" alt="TP Link Equipment">
            </div>
            <div class="title">
              <h3>Networking Equipment</h3>
            </div>
        </div>
        <div class="product1">
          <div class="image">
            <img src="home/images/product1.jpg" alt="TP Link Equipment">
          </div>
          <div class="title">
            <h3>Networking Equipment</h3>
          </div>
        </div>
        <div class="product1">
          <div class="image">
            <img src="home/images/product1.jpg" alt="TP Link Equipment">
          </div>
          <div class="title">
            <h3>Networking Equipment</h3>
          </div>
        </div>
      </div>
    </div>
    </section>

    <!-- Best Selling Products -->
    <section class="container">
      <div class="heading" id="sellprod" data-aos="fade-up" data-aos-anchor-placement="top-bottom">                
        <h2><span>Best Selling Products</span></h2>
      </div>
    </section>
    <section class="product"> 
        <button class="pre-btn"><img src="home/images/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="home/images/arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="home/images/product1.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">Product Description</p>
                    <span class="price">Ksh. 20</span><span class="actual-price">Ksh. 40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="home/images/product1.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">Product Description</p>
                    <span class="price">Ksh. 20</span><span class="actual-price">Ksh. 40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="home/images/product1.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">Product Description</p>
                    <span class="price">Ksh. 20</span><span class="actual-price">Ksh. 40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="home/images/product1.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">Product Description</p>
                    <span class="price">Ksh. 20</span><span class="actual-price">Ksh. 40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="home/images/product1.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">Product Description</p>
                    <span class="price">Ksh. 20</span><span class="actual-price">Ksh. 40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="home/images/product1.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">Product Description</p>
                    <span class="price">Ksh. 20</span><span class="actual-price">Ksh. 40</span>
                </div>
            </div>
        </div>
    </section>
  </main>

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
              <div class="open_time">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Monday</td>
                      <td>0800 - 1700</td>
                    </tr>
                    <tr>
                      <td>Tuesday</td>
                      <td>0800 - 1700</td>
                    </tr>
                    <tr>
                      <td>Wednesday</td>
                      <td>0800 - 1700</td>
                    </tr>
                    <tr>
                      <td>Thursday</td>
                      <td>0800 - 1700</td>
                    </tr>
                    <tr>
                      <td>Friday</td>
                      <td>0800 - 1700</td>
                    </tr>
                    <tr>
                      <td>Saturday</td>
                      <td>0800 - 1500</td>
                    </tr>
                    <tr>
                      <td>Sunday</td>
                      <td>Closed</td>
                    </tr>                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-6">
                    <div class="widget_menu">
                      <h3>Quick Links</h3>                      
                      <ul>
                        <li><a href="#">Ubuquiti Suppliers</a></li>
                        <li><a href="#">Fanvil Resellers</a></li>
                        <li><a href="#">TP Link Equipment</a></li>
                        <li><a href="#">Alarm Systems</a></li>
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
                        <li><a href="#">My Account</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="widget_menu">
                  <h3>Newsletter</h3>
                    <div class="information_f">
                      <p>Subscribe by our newsletter and get update protidin.</p>
                    </div>
                    <div class="form_sub">
                      <form>
                        <fieldset>
                           <div class="field">
                              <input type="email" placeholder="Enter Your Mail" name="email" />
                              <input type="submit" value="Subscribe" />
                           </div>
                        </fieldset>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Copyright & Blog -->
    <div class="cpy_">
      <div class=" container quick-links">
        <ul>
          <li><a href="#">Networking Equipment</a></li>
          <li><a href="#">Power & Electrical</a></li>
          <li><a href="#">Security Systems</a></li>
          <li><a href="#">Telephone System</a></li>
          <li><a href="#">Computing Products & Electronics Products</a></li>
        </ul>
        <hr>
      </div>
      
      <a href="#"><img class="footer_img" src="home/images/twitter.png" alt="..."></a>
      <a href="#"><img class="footer_img" src="home/images/facebook.png" alt="..."></a>
      <a href="#"><img class="footer_img" src="home/images/insta.png" alt="..."></a>
      <p class="mx-auto">© 2023 All Rights Reserved.<br> My Store</p>
    </div>

    <!-- Js Links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="home/assets/script.js"></script>
  </body>
</html>

