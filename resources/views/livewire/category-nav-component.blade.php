<div class="col-md-3">
    <!-- <div class="categories">
        <h5 class="category-title">Categories</h5>
        <select>
            <option value="all">Super Categories</option>
            @foreach ($supercategories as $supercategory)
                <option value="category1">{{$supercategory->name}}</option>    
            @endforeach
            <option value="category2">Category 2</option>
        </select>
    </div> -->
    <div class="categories">
    <h5 class="category-title">Product Categories</h5>
    <div>
        <ul>
            @foreach ($supercategories as $supercategory)
            <li>
                <a href="{{route('supcategory.products',['sup_slug'=>$supercategory->slug])}}">{{$supercategory->name}}</a> 
            
                <ul>
                @foreach ($supercategory->categories as $category)
                    <li>
                        <a href="{{route('category.products',['slug'=>$category->slug])}}">
                            {{$category->name}}
                        </a> 

                        <div wire:click.prevent="showSubCategories({{ $category->id }})">
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        @if ($selectedCategory === $category->id)
                            <ul>
                                @foreach ($category->subcategories as $subcategory)
                                    <li>
                                        <a href="{{route('subcategory.products',['sub_slug'=>$subcategory->slug])}}">{{$subcategory->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li> 
                @endforeach
                <!-- <li><a href="#">Computing Products</a></li> -->
                </ul>
            </li>
            
            @endforeach
        </ul>
    </div>                  
    </div>
</div>
