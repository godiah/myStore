<div>
    <style>
        /* ::-webkit-scrollbar{
        display: none;
    }  */
    body{
        overflow-x: hidden;
    }
    </style>
    <!-- Edit Product Form -->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        @if(Session::has('message'))
            <div class="">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg> -->
                <span class="">Success! | {{Session::get('message')}}</span>
            </div>
        @endif
            <form action="" method="post"  class="sign-up-form mt-5 mb-5" enctype="multipart/form-data" wire:submit.prevent="updateProduct" >
                <h2 class="title">Edit Product Form</h2>
                <!-- Product Name -->
                <div class="input-field">
                    <span class="material-icons-outlined"><i class="fa-solid fa-layer-group"></i></span>
                    <input type="text" name="name" id="" placeholder="Name" required autocomplete="off" wire:model="name" wire:keyup="generateSlug()">
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
                <div class="input-field">
                    <!-- <label for=""></label> -->
                    <span class="material-icons-outlined"><i class="fa-solid fa-note-sticky"></i></span>
                    <input type="text" name="short_description" id="" placeholder="Short Description" required autocomplete="off" wire:model="short_description">
                    @error('short_description')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>

                <!-- Product Description -->
                <div class="input-field">
                    <span class="material-icons-outlined"><i class="fa-solid fa-note-sticky"></i></span>
                    <input type="text" name="description" id="" placeholder="Description" required autocomplete="off" wire:model="description">
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
                <!-- Product Keyword -->
                <!-- <div class="input-field">
                    <span class="material-icons-outlined"><i class="fa-solid fa-key"></i></span>
                    <input type="text" name="" id="" placeholder="Keywords" required autocomplete="off">
                </div> -->
                <!-- Product Images -->
                <div class="input-field">
                    <span class="material-icons-outlined"><i class="fa-solid fa-image"></i></span>
                    <input type="file" name="image" id="" placeholder="Product Name"  autocomplete="off" wire:model="newimage">
                    @if($newimage)
                        <img src="{{$newimage->temporaryUrl()}}" class="" style="width:30px" alt="">
                    @else
                        <img src="{{asset('images/products')}}/{{$image}}" class="" style="width:30px" alt="">    
                    @endif    
                    @error('newimage')
                        <p style="text-color:red;">{{$message}}</p>
                    @enderror
                </div>

                <!-- Product Image2 -->
                <div class="input-field">
                    <span class="material-icons-outlined"><i class="fa-solid fa-image"></i></span>
                    <input type="file" name="image2" id="" placeholder="Product Name"  autocomplete="off" wire:model="newimage2">
                    @if($newimage2)
                        <img src="{{$newimage2->temporaryUrl()}}" class="" style="width:30px" alt="">
                    @else
                        <img src="{{asset('images/products')}}/{{$image}}" class="" style="width:30px" alt="">    
                    @endif    
                    @error('newimage2')
                        <p class="" style="text-color:red;">{{$message}}</p>
                    @enderror
                </div>

                <!-- Product Image3 -->
                <div class="input-field">
                    <span class="material-icons-outlined"><i class="fa-solid fa-image"></i></span>
                    <input type="file" name="image3" id="" placeholder="Product Name"  autocomplete="off" wire:model="newimage3">
                    @if($newimage3)
                        <img src="{{$newimage3->temporaryUrl()}}" class="" style="width:30px" alt="">
                    @else
                        <img src="{{asset('images/products')}}/{{$image}}" class="" style="width:30px" alt="">    
                    @endif    
                    @error('newimage3')
                        <p class="" style="text-color:red;">{{$message}}</p>
                    @enderror
                </div>

                <!-- Product Image4 -->
                <div class="input-field">
                    <span class="material-icons-outlined"><i class="fa-solid fa-image"></i></span>
                    <input type="file" name="image4" id="" placeholder="Product Name"  autocomplete="off" wire:model="newimage4">
                    @if($newimage4)
                        <img src="{{$newimage4->temporaryUrl()}}" class="" style="width:30px" alt="">
                    @else
                        <img src="{{asset('images/products')}}/{{$image}}" class="" style="width:30px" alt="">    
                    @endif    
                    @error('newimage4')
                        <p class="" style="text-color:red;">{{$message}}</p>
                    @enderror
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
                <input type="submit" name="" id="" class="btn solid" value="Edit Product">
            </form>            
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
