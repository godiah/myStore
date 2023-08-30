<div>
    
    <!-- All Categories -->
    <div class="container" id="admin-prod-cont">
        <h3 class="text-center">All Categories:</h3>
            @foreach ($categories as $category)
            <div class="admin-prod-item">
                <!-- <div class="admin-prod-item-image">
                <a href="#">
                    <img src="../images/product1.jpg" alt="Product Image">
                </a>
                </div> -->
                <div class="admin-prod-item-details">              
                <h5>{{$category->name}}</h5>              
                </div>
                <div class="admin-prod-item-buttons">
                <a href="{{route('admin.category.edit',['category_id'=>$category->id])}}" class="buy-now"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                <a href="#" wire:click.prevent="deleteCategory({{ $category->id }})" class="remove-product"><i class="fa-solid fa-trash"></i> Remove</a>
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
                <h5>Category 5</h5>              
                </div>
                <div class="admin-prod-item-buttons">
                <a href="edit_categories.html" class="buy-now"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                <a href="#" class="remove-product"><i class="fa-solid fa-trash"></i> Remove</a>
                </div>
            </div> -->
            <!-- <div class="admin-prod-item">
                <div class="admin-prod-item-image">
                <a href="#">
                    <img src="../images/product1.jpg" alt="Product Image">
                </a>
                </div>
                <div class="admin-prod-item-details">              
                <h5>Category</h5>              
                </div>
                <div class="admin-prod-item-buttons">
                <a href="edit_categories.html" class="buy-now"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                <a href="#" class="remove-product"><i class="fa-solid fa-trash"></i> Remove</a>
                </div>
            </div> -->
            {{$categories->links()}}
    </div>
</div>
