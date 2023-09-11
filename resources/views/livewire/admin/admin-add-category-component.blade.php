<div>
    <style>
        ::-webkit-scrollbar{
        display: none;
    } 
    form{
        height: 100vh;
    }
    </style>
    <!-- New Category Form -->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" method="post" class="sign-up-form"  wire:submit.prevent="storeCategory">
                <h2 class="title">New Category Form</h2>
                <!-- Category Name -->
                <div class="input-field">
                    <span class="material-icons-outlined">style</span>
                    <input type="text" name="name" id="name" placeholder=" Name" required autocomplete="off" wire:model="name" wire:keyup="generateSlug()">
                    @error('name')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>     
               <!-- Category slug -->
                <div class="input-field">
                    <span class="material-icons-outlined">style</span>
                    <input type="text" name="slug" id="slug" placeholder="Slug"  required autocomplete="off" wire:model="slug">
                    @error('slug')
                        <p styles="color:red;"  class="">{{$message}}</p>
                    @enderror
                </div>
                <!--Super Category Name -->
                <div class="input-field">
                    <span class="material-icons-outlined"><i class="fa-brands fa-slack"></i></span>            
                    <select name="sup_category_id" id="" placeholder="Super Category" wire:model="sup_category_id">
                        <option value="">Select Super Category</option>
                        @foreach ($supcategories as $supcategory)
                            <option value="{{$supcategory->id}}">{{$supcategory->name}}</option>
                        @endforeach
                    </select>
                </div> 
                <!--Category Name -->
                <div class="input-field">
                    <span class="material-icons-outlined">category</span>            
                    <select name="category_id" id="" placeholder="Category" wire:model="category_id">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div> 
                <!-- Submit Button -->
                <input type="submit" name="" id="" class="btn solid" value="Add Category">
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
