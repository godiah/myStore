<!-- All Products -->
<div class="container" id="admin-prod-cont">
        <h3 class="text-center">All Products</h3>
        @foreach ($products as $product)
            <div class="admin-prod-item">
                <div class="admin-prod-item-image">
                <a href="{{route('admin.products.edit',['product_id'=>$product->id])}}">
                    <img src="{{asset('images/')}}/{{$product->image}}.jpg" alt="Product Image">
                </a>
                </div>
                <div class="admin-prod-item-details">
                <h5>{{$product->name}}</h5>
                <h5>{{$product->category_id}}</h5>
                <?php
                /*
                    if ($product->category !== null) {
                        echo "<h5>{$product->category->name}</h5>";
                    } else {
                        echo "<h5>Category name is missing</h5>";
                    }
                    */
                ?>
                            
                </div>
                <div class="admin-prod-item-buttons">
                <a href="{{route('admin.products.edit',['product_id'=>$product->id])}}" class="buy-now"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                <a href="#" class="remove-product"><i class="fa-solid fa-trash"></i> Remove</a>
                </div>
            </div>
            
        @endforeach
        <!-- <div class="admin-prod-item">
            <div class="admin-prod-item-image">
              <a href="#">
                <img src="../images/product1.jpg" alt="Product Image">
              </a>
            </div>
            <div class="admin-prod-item-details">
              <h5>Product</h5>
              <h5>Category</h5>              
            </div>
            <div class="admin-prod-item-buttons">
              <a href="edit_product.html" class="buy-now"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
              <a href="#" class="remove-product"><i class="fa-solid fa-trash"></i> Remove</a>
            </div>
        </div>
        <div class="admin-prod-item">
            <div class="admin-prod-item-image">
              <a href="#">
                <img src="../images/product1.jpg" alt="Product Image">
              </a>
            </div>
            <div class="admin-prod-item-details">
              <h5>Product</h5>
              <h5>Category</h5>              
            </div>
            <div class="admin-prod-item-buttons">
              <a href="edit_product.html" class="buy-now"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
              <a href="#" class="remove-product"><i class="fa-solid fa-trash"></i> Remove</a>
            </div>
        </div>
        <div class="admin-prod-item">
            <div class="admin-prod-item-image">
              <a href="#">
                <img src="../images/product1.jpg" alt="Product Image">
              </a>
            </div>
            <div class="admin-prod-item-details">
              <h5>Product</h5>
              <h5>Category</h5>              
            </div>
            <div class="admin-prod-item-buttons">
              <a href="edit_product.html" class="buy-now"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
              <a href="#" class="remove-product"><i class="fa-solid fa-trash"></i> Remove</a>
            </div>
        </div> -->
    </div>
