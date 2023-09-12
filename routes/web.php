<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\SuperCategoryComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SubCategoryComponent;

use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\WishlistComponent;

use App\Http\Livewire\User\UserDashboardComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;

use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;

use App\Http\Livewire\Admin\AdminProductsComponent;
use App\Http\Livewire\Admin\AdminAddProductsComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/shop',ShopComponent::class)->name('shop');
Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
Route::get('/supercategory/{sup_slug}',SuperCategoryComponent::class)->name('supcategory.products');
Route::get('/category/{slug}',CategoryComponent::class)->name('category.products');
Route::get('/subcategory/{sub_slug}',SubCategoryComponent::class)->name('subcategory.products');
Route::get('/wishlist',WishlistComponent::class)->name('shop.wishlist');
Route::get('/cart',CartComponent::class)->name('shop.cart');
Route::get('/checkout',CheckoutComponent::class)->name('shop.checkout');

Route::get('/search',SearchComponent::class)->name('products.search');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// User Group routes
Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

// Admin group routes
Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');

    Route::get('/admin/all-categories',AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.category.edit');

    Route::get('/admin/all-products',AdminProductsComponent::class)->name('admin.products');
    Route::get('/admin/products/add',AdminAddProductsComponent::class)->name('admin.products.add');
    Route::get('/admin/products/edit/{product_id}',AdmineditProductComponent::class)->name('admin.products.edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

