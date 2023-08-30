<div>
    <style>
        ::-webkit-scrollbar{
        display: none;
    } 
    form{
        height: 100vh;
    }
    </style>
    <!-- Edit Category Form -->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form  wire:submit.prevent="updateCategory" class="sign-up-form">
                <h2 class="title">Edit Category Form</h2>
                <!-- Category Name -->
                <div class="input-field">
                    <label for="name">Name</label>
                    <span class="material-icons-outlined">style</span>
                    <input type="text" name="name" id="name" required autocomplete="off" wire:model="name" wire:keyup="generateSlug()">
                </div>  
                
                <!-- Category slug -->
                <div class="input-field">
                    <label for="slug">slug</label>
                    <span class="material-icons-outlined">style</span>
                    <input type="text" name="slug" id="slug" required autocomplete="off"  wire:model="slug">
                </div>

                <!-- Submit Button -->
                <input type="submit" name="" id="" class="btn solid" value="Edit Category">
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
