<div>
    @foreach ($supcategories as $supcategory)
        <li class="nav-item dropdown">
            <a href="shop_accessories.html" class="desktop-item nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{$supcategory->name}}
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
                @foreach ($supcategory->categories as $category)
                    <li><a class="dropdown-item" href="#">{{$category->name}}</a>
                        <ul class="mega-links-canvas">
                            @foreach ($category->subcategories as $subcategory)
                            <li><a href="#" class="off-link">{{$subcategory->name}}s</a></li>
                                
                            @endforeach
                            <!-- <li><a href="#" class="off-link">Laptop Chargers</a></li>
                            <li><a href="#" class="off-link">Laptop Batteries</a></li>
                            <li><a href="#" class="off-link">Webcam</a></li>
                            <li><a href="#" class="off-link">VGA Cables</a></li> -->
                        </ul>
                    </li>
                @endforeach
                
                <!-- <li><a class="dropdown-item" href="#">Storage</a>
                <ul class="mega-links-canvas">
                    <li><a href="#" class="off-link">Flash Drives</a></li>
                    <li><a href="#" class="off-link">Memory Cards</a></li>
                    <li><a href="#" class="off-link">Internal Hard Disk HDD</a></li>
                    <li><a href="#" class="off-link">Solid State Devices SSD</a></li>
                </ul>
                </li>
                <li><a class="dropdown-item" href="#">Network Accessories</a>
                <ul class="mega-links-canvas">
                    <li><a href="#" class="off-link">Patch Panel</a></li>
                </ul>
                </li> -->
            </ul>  
        </li>
    @endforeach
</div>
