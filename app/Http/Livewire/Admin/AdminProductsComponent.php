<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\ProductImages;

use App\Models\Category;

class AdminProductsComponent extends Component
{
    use WithPagination;
    public $product_id;


    public function render()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(15);

        return view('livewire.admin.admin-products-component',['products'=>$products]);
    }
}
