<div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form wire:submit.prevent="addProduct" class="sign-up-form mt-5 mb-5" enctype="multipart/form-data">
                <h2 class="title">New Product Form</h2>
                <!-- Product Name -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined"><i class="fa-solid fa-layer-group"></i></span>
                    <input type="text" name="name" id="name" placeholder="Name" required autocomplete="off" wire:model="name" wire:keyup="generateSlug()">
                    @error('name')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>
                <!-- Product Slug -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined"><i class="fa-solid fa-layer-group"></i></span>
                    <input type="text" name="slug" id="slug" placeholder="Slug" required autocomplete="off" wire:model="slug">
                    @error('slug')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>
                <!-- Product Description -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined"><i class="fa-solid fa-note-sticky"></i></span>
                    <input type="text" name="" id="" placeholder="Description" required autocomplete="off" wire:model="description">
                    @error('description')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>

                <!-- Product Super Category -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined">Super Category</span>            
                    <select name="sup_category_id" id="" wire:model="sup_category_id" wire:change="changeCategory">
                        <option value="">Select Super Category</option>
                        @foreach ($supcategories as $supcategory)
                            <option value="{{$supcategory->id}}">{{$supcategory->name}}</option>
                        @endforeach
                    </select>
                    @error('sup_category_id')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>

                <!-- Product Category -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined">category</span>            
                    <select name="category_id" id="" wire:model="category_id" wire:change="changeSubcategory">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>

                <!-- Product sub category -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined">sub category</span>            
                    <select name="sub_category_id" id="" wire:model="sub_category_id">
                        <option value="">Select Category</option>
                        @foreach ($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>  
                        @endforeach
                    </select>
                    @error('sub_category_id')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>

                <!-- Product Instock -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined">Stock Status</span>            
                    <select name="stock_status" id="" wire:model="stock_status">
                        <option value="">Select Category</option>
                        <option value="in stock">Instock</option>
                        <option value="out of stock">Out of Stock</option>
                        <!-- <option value="">Category 3</option> -->
                    </select>
                    @error('stock_status')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>

                <!-- Product Keyword -->
                <!-- <div class="input-field">
                    <label for=""></label>
                    <span class="material-icons-outlined"><i class="fa-solid fa-key"></i></span>
                    <input type="text" name="" id="" placeholder="Keywords" required autocomplete="off">
                </div> -->

                <!-- Product Images -->
                <!-- Image 1 -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined"><i class="fa-solid fa-image"></i></span>
                    <input type="file" name="" id="" placeholder="Product Name" required autocomplete="off" wire:model="image">
                </div>
                <!-- Image 2 -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined"><i class="fa-solid fa-image"></i></span>
                    <input type="file" name="" id="" placeholder="Product Name" required autocomplete="off" wire:model="image2">
                </div>
                <div class="d-flex">
                    <!-- Product Quantity -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined"><i class="fa-solid fa-basket-shopping"></i></span>
                    <input type="number" name="quantity" id="" placeholder="Quantity" required autocomplete="off" wire:model="quantity">
                </div>
                <!-- Product Price -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined"><i class="fa-solid fa-tag"></i></span>
                    <input type="number" name="regular_price" id="" placeholder="Price" required autocomplete="off" wire:model="regular_price">
                </div>
                </div>                         
                <!-- Submit Button -->
                <input type="submit" name="" id="" class="btn solid" value="Add Product">
            </form>            
        </div>
        <div class="col-md-3"></div>
    </div>
