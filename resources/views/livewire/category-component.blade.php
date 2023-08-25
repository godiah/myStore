<div>
    {{-- The whole world belongs to you. --}}
    <style>
        nav svg{
            height:20px;
        }
        nav .hidden{
            display:block;
        }
    </style>
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
                @foreach ($categories as $category)
                <li><a href="{{route('category.products',['slug'=>$category->slug])}}">{{$category->name}}</a></li>
                  
                @endforeach
                <!-- <li><a href="#">Computing Products</a></li>
                <li><a href="#">Computing Products</a></li>
                <li><a href="#">Computing Products</a></li>
                <li><a href="#">Computing Products</a></li> -->
              </ul>
            </div>                  
          </div>
        </div>
        <!-- Products -->
        <div class="col-md-9"> 
            <div>
                <p style="text-decoration: none;">We have found <strong>{{$products->total()}}</strong> products from <strong>{{$category_name}}</strong> for you.</p>
            </div>        
            
            <!-- sort by page size -->
            <style>
                    /* Style the dropdown container */
                    .dropdown {
                    position: relative;
                    display: inline-block;
                    }

                    /* Style the button that toggles the dropdown */
                    .dropbtn {
                    background-color: #3498db;
                    color: white;
                    padding: 10px;
                    border: none;
                    cursor: pointer;
                    }

                    /* Style the dropdown content (hidden by default) */
                    .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f9f9f9;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                    }

                    /* Style the dropdown content links */
                    .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                    }

                    /* Change color of dropdown content links on hover */
                    .dropdown-content a:hover {
                    background-color: #ddd;
                    }

                    /* Show the dropdown content when hovering over the container */
                    .dropdown:hover .dropdown-content {
                    display: block;
                    }

            </style>

            <div class="dropdown">
                <button class="dropbtn" >Show: {{$pageSize}} products</button>
                <ul class="dropdown-content">
                    <li><a href="#" wire:click.prevent="changePageSize(10)">10 Products</a></li>
                    <li><a href="#" wire:click.prevent="changePageSize(15)">15 Products</a></li>
                    <li><a href="#" wire:click.prevent="changePageSize(20)">20 Products</a></li>
                </ul>
            </div>

            <!-- sort by price -->
            <style>
                    /* Style the dropdown container */
                    .pdropdown {
                    position: relative;
                    display: inline-block;
                    }

                    /* Style the button that toggles the dropdown */
                    .pdropbtn {
                    background-color: #3498db;
                    color: white;
                    padding: 10px;
                    border: none;
                    cursor: pointer;
                    }

                    /* Style the dropdown content (hidden by default) */
                    .pdropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f9f9f9;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                    }

                    /* Style the dropdown content links */
                    .pdropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                    }

                    /* Change color of dropdown content links on hover */
                    .pdropdown-content a:hover {
                    background-color: #ddd;
                    }

                    /* Show the dropdown content when hovering over the container */
                    .pdropdown:hover .pdropdown-content {
                    display: block;
                    }

            </style>

            <div class="pdropdown">
                <button class="pdropbtn" >Sort By: {{$orderBy}}</button>
                <ul class="pdropdown-content">
                    <li><a href="#" wire:click.prevent="changeOrderBy('Default Sorting')">Default Sorting</a></li>
                    <li><a href="#" wire:click.prevent="changeOrderBy('Price: Low to High')">Price: Low to High</a></li>
                    <li><a href="#" wire:click.prevent="changeOrderBy('Price: High to Low')">Price: High to Low</a></li>
                    <li><a href="#" wire:click.prevent="changeOrderBy('Latest')">Latest</a></li>
                </ul>
            </div>
          
            <div class="shop-container">
            
              <div class="product-cards">
                @foreach($products as $product)
                    <div class="product-card">
                    <a href="{{route('product.details',['slug'=>$product->slug])}}"><img src="{{asset('images/')}}/{{$product->image}}.jpg" alt="image of {{$product->name}}"></a>
                    <h5>{{$product->name}}</h5>
                    <p class="p-desc"><a href="product_details.html">TP-Link 300Mbps Wireless N Wall-Plate Access Point – EAP115-WALL</a></p>
                    <p class="price">{{$product->regular_price}}</p>
                    <a href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})" class="add-to-cart">Add to Cart</a>
                    </div>  
                @endforeach


                <!-- <div class="product-card">
                  <a href="product_details.html"><img src="{{asset('images/hp2.png')}}" alt="Product Image"></a>
                  <h5>Fanvil X303P Enterprise IP Phone</h5>
                  <p class="p-desc"><a href="product_details.html">TP-Link 300Mbps Wireless N Wall-Plate Access Point – EAP115-WALL</a></p>
                  <p class="price">Ksh1,119.99</p>
                  <a href="#" class="add-to-cart">Add to Cart</a>
                </div>                   -->

                
                <!-- <div class="pagination-container">
                    {{-- $products->links() --}}
                </div> -->

                
              
              </div>  
                                
          </div>
        </div>
      </div>
        <div>
            {{$products->links()}}
        </div>
    </div>
</div>
