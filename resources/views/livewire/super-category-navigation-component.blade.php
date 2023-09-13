<div>
    {{-- Be like water. --}}
   <style>
    .hidden{
          display:none;
    }
    .visible{
        display: flex;         
        list-style: none; 
        padding: 0; 
    }
    .list-container {
        display: flex;
        align-items: center;
        justify-content: center; 
        list-style: none; 
        padding: 0; 
    }
    .cat_gory{
        color:red;
      }

    /* Base Styles */
    .super-main-navbar {
        position: sticky;
        z-index: 100;
        background: #000;
        margin-left: 2%;
        margin-right: 2%;
        top: 0;
    }

    ul.list-container {
        margin-bottom: 0 !important;
    }

    .super-main-navbar .list-container .di_sup_cat {
        list-style: none;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .super-main-navbar .list-container .di_sup_cat a {
        color: #f9d2e0;
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
        padding: 10px 15px;
        transition: all 0.3s ease ease-in-out;
    }
    /* .di_sup_cat a{
      color: #001233;
      text-decoration: none;
      font-size: 16px;
      font-weight: 500;
      padding: 10px 15px;
    } */

    .super-main-navbar .list-container .di_sup_cat a:hover {
        transform: scale(1.03);
        transition: all 0.3s ease-in-out;
    }

    .super-main-navbar .list-container .mobile-item {
        display: none;
    }
    .sub-link{
      color: #000;
      margin-left: 5px;
    }
    /* Styling for the subcategory container */
    .subcategory-container {
        position: absolute;
        top: 100%; 
        left: 0;
        width: 100%;
        min-height: 0 !important; 
        background-color: #fff; 
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        padding: 10px; 
        display: none;
        z-index: 1;
    }
    
    /* Styling for subcategory links */
    .subcategory-container ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .subcategory-container ul li {
        margin: 0;
    }
    
    .subcategory-container ul li a {
        color: #000; 
        text-decoration: none;
        display: block;
        padding: 5px 0;
        transition: all 0.2s ease;
    }
    
    .super-main-navbar .list-container .di_sup_cat:hover .subcategory-container {
        display: block;
    }

    /* Mobile Styles */
    @media screen and (max-width: 970px) {
        .super-main-navbar .list-container {
            display: none;
        }

        .super-main-navbar .list-container .di_sup_cat {
            width: 100%;
            text-align: center;
        }

        .super-main-navbar .list-container .di_sup_cat a {
            padding: 0 20px;
            display: block;
            font-size: 20px;
        }

        .super-main-navbar .list-container .mobile-item {
            display: block;
            color: #f2f2f2;
            font-size: 20px;
            font-weight: 500;
            padding-left: 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .super-main-navbar .list-container .mobile-item:hover {
            background: #3A3B3C;
        }

        .super-main-navbar .list-container ul {
            position: static;
            display: block;
            background-color: transparent;
            box-shadow: none;
        }
    }
</style>
    <nav class="super-main-navbar">
      <ul class="list-container">
            <li class="di_sup_cat">
                
                <a href="{{route('shop')}}">
                    Shop
                </a>
                
            </li>
          @foreach ($supcategories as $supcategory)
              <li>
                  <div class="di_sup_cat">
                      <a class="super_nav_link" href="{{route('supcategory.products',['sup_slug'=>$supcategory->slug])}}" wire:mouseover="showCategories({{ $supcategory->id }}, null)"
                        wire:mouseout="showCategories(null, null)">
                          {{ $supcategory->name }} <i class="fa-solid fa-caret-down"></i>
                      </a>                  

                    <div class="subcategory-container">
                      <ul class="{{ $selectedSupcategory == $supcategory->id ? 'visible' : 'hidden' }}">
                        @foreach ($supcategory->categories as $category)
                            <li class="list-item">
                                    <!-- wire:mouseover="showCategories({{ $supcategory->id }}, {{ $category->id }})"
                                      wire:mouseout="showCategories({{ $supcategory->id }}, null)" -->
                                <div class="di_cat " wire:mouseover="showCategories({{ $supcategory->id }}, {{ $category->id }})"
                                      wire:mouseout="showCategories({{ $supcategory->id }}, null)">
                                    <a href="{{route('category.products',['slug'=>$category->slug])}}" 
                                      class="cat_gory text-danger">
                                        {{ $category->name }} <i class="fa-solid fa-caret-down"></i>
                                    </a>
                                
                                    <!-- class="{{ $selectedCategory == $category->id ? 'visible' : 'hidden' }}" -->
                                  <ul >
                                      @foreach ($category->subcategories as $subcategory)
                                          <li>
                                              <a href="{{route('subcategory.products',['sub_slug'=>$subcategory->slug])}}" class="mx-3 text-black">{{ $subcategory->name }}</a>
                                          </li>
                                      @endforeach
                                  </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    </div>
                  </div>
              </li>
          @endforeach
          <li>
                <div class="di_sup_cat">
                <a href="#footer">
                    Contact Us
                </a>
                </div>
            </li>
      </ul>
    </nav>
    

</div>

