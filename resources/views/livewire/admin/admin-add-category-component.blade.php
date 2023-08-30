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
                    <label for="name">Category name</label>
                    <span class="material-icons-outlined">style</span>
                    <input type="text" name="name" id="name" placeholder="Category Name" required autocomplete="off" wire:model="name" wire:keyup="generateSlug()">
                    @error('name')
                        <p styles="color:red;" class="">{{$message}}</p>
                    @enderror
                </div>     
               <!-- Category slug -->
               <div class="input-field">
                    <label for="name">Category Slug</label>
                    <span class="material-icons-outlined">style</span>
                    <input type="text" name="slug" id="slug"  required autocomplete="off" wire:model="slug">
                    @error('slug')
                        <p styles="color:red;"  class="">{{$message}}</p>
                    @enderror
                </div>
                <!-- Submit Button -->
                <input type="submit" name="" id="" class="btn solid" value="Add Category">
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
