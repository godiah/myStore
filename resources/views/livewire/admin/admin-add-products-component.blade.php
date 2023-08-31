<div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" method="post"  class="sign-up-form mt-5 mb-5" enctype="multipart/form-data">
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
                    <span class="material-icons-outlined">category</span>            
                    <select name="category" id="">
                        <option value="">Select Category</option>
                        <option value="">Category 1</option>
                        <option value="">Category 2</option>
                        <option value="">Category 3</option>
                    </select>
                    @error('category')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>

                <!-- Product Category -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined">category</span>            
                    <select name="category" id="">
                        <option value="">Select Category</option>
                        <option value="">Category 1</option>
                        <option value="">Category 2</option>
                        <option value="">Category 3</option>
                    </select>
                    @error('category')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>

                <!-- Product Sub Category -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined">category</span>            
                    <select name="category" id="">
                        <option value="">Select Category</option>
                        <option value="">Category 1</option>
                        <option value="">Category 2</option>
                        <option value="">Category 3</option>
                    </select>
                    @error('category')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>

                <!-- Product Instock -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined">Instock/Out of stock</span>            
                    <select name="category" id="">
                        <option value="">Select Category</option>
                        <option value="">Instock</option>
                        <option value="">Out of Stock</option>
                        <!-- <option value="">Category 3</option> -->
                    </select>
                    @error('category')
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
                    <input type="file" name="" id="" placeholder="Product Name" required autocomplete="off">
                </div>
                <!-- Image 2 -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined"><i class="fa-solid fa-image"></i></span>
                    <input type="file" name="" id="" placeholder="Product Name" required autocomplete="off">
                </div>
                <div class="d-flex">
                    <!-- Product Quantity -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined"><i class="fa-solid fa-basket-shopping"></i></span>
                    <input type="number" name="" id="" placeholder="Quantity" required autocomplete="off">
                </div>
                <!-- Product Price -->
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined"><i class="fa-solid fa-tag"></i></span>
                    <input type="number" name="" id="" placeholder="Price" required autocomplete="off" wire:model="regular_price">
                </div>
                </div>                         
                <!-- Submit Button -->
                <input type="submit" name="" id="" class="btn solid" value="Add Product">
            </form>            
        </div>
        <div class="col-md-3"></div>
    </div>
