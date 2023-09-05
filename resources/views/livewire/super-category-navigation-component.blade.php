<div>
    {{-- Be like water. --}}
    <style>
      .hidden{
          display:none;
      }
      .visible{
        display: flex; /* Use flexbox to create a row layout */
        list-style: none; /* Remove default list bullets/numbers */
        padding: 0; /* Remove default padding */
      }
      .cat_gory{
        color:red;
      }
      .di_sup_cat{
        margin:8px;
      }
      .di_cat{
        /* margin:4px; */
      }
      .list-container {
        display: flex; /* Use flexbox to create a row layout */
        list-style: none; /* Remove default list bullets/numbers */
        padding: 0; /* Remove default padding */
      }
      .list-item {
          margin-right: 10px; /* Add space between list items */
          /* Additional styling as needed */
      }
    </style>
    <div>
      <ul class="list-container">
            <li>
                <div class="di_sup_cat">
                <a href="{{route('shop')}}">
                    Shop
                </a>
                </div>
            </li>
          @foreach ($supcategories as $supcategory)
              <li>
                  <div class="di_sup_cat">
                      <a href="#" wire:mouseover="showCategories({{ $supcategory->id }}, null)"
                        wire:mouseout="showCategories(null, null)">
                          {{ $supcategory->name }} <i class="fa-solid fa-caret-down"></i>
                      </a>
                  

                    <ul class="{{ $selectedSupcategory == $supcategory->id ? 'visible' : 'hidden' }}">
                        @foreach ($supcategory->categories as $category)
                            <li class="list-item">
                                <!-- wire:mouseover="showCategories({{ $supcategory->id }}, {{ $category->id }})"
                                      wire:mouseout="showCategories({{ $supcategory->id }}, null)" -->
                                <div class="di_cat " wire:mouseover="showCategories({{ $supcategory->id }}, {{ $category->id }})"
                                      wire:mouseout="showCategories({{ $supcategory->id }}, null)">
                                    <a href="#" 
                                      class="cat_gory">
                                        {{ $category->name }} <i class="fa-solid fa-caret-down"></i>
                                    </a>
                                
                                    <!-- class="{{ $selectedCategory == $category->id ? 'visible' : 'hidden' }}" -->
                                  <ul >
                                      @foreach ($category->subcategories as $subcategory)
                                          <li>
                                              <a href="#" class="mx-4">{{ $subcategory->name }}</a>
                                          </li>
                                      @endforeach
                                  </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>
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
    </div>
    

</div>
