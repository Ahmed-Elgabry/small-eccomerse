<?php

use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\Store\AddStore;
use App\Http\Livewire\Admin\Store\AllStore;
use App\Http\Livewire\Admin\Store\EditStore;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
 return ('test_tarek');
});

Route::get('/', HomeComponent::class)->name('home.index');

Route::get('/shop/{slug?}/{slug_cat?}', ShopComponent::class)->name('shop');

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/cart', CartComponent::class)->name('shop.cart');

Route::get('/wishlist', WishlistComponent::class)->name('shop.wishlist');

Route::get('/checkout', CheckoutComponent::class)->name('shop.checkout');

Route::get('/product-category/{slug}', CategoryComponent::class)->name('product.category');

Route::get('/search', SearchComponent::class)->name('product.search');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//For User or Customer
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

//For Admin
Route::middleware(['auth', 'authadmin'])->prefix('admin')->name('admin.')->group(function () {


    Route::get('/dashboard', AdminDashboardComponent::class)->name('dashboard');
    Route::get('/categories', AdminCategoriesComponent::class)->name('categories');
    Route::get('/category/add', AdminAddCategoryComponent::class)->name('category.add');
    Route::get('/category/edit/{category_id}', AdminEditCategoryComponent::class)->name('category.edit');
    Route::get('/products',AdminProductComponent::class)->name('products');
    Route::get('/product/add',AdminAddProductComponent::class)->name('product.add');
    Route::get('/product/edit/{product_id}',AdminEditProductComponent::class)->name('product.edit');

    Route::get('/stores',AllStore::class)->name('stores');
    Route::get('/store/add',AddStore::class)->name('store.add');
    Route::get('/store/edit/{store_id}',EditStore::class)->name('store.edit');
});

require __DIR__ . '/auth.php';



Route::get('clear-all',function(){
  Artisan::call('optimize');
  Artisan::call('cache:clear');
  Artisan::call('config:clear');
  Artisan::call('view:clear');
//   Artisan::call('migrate:fresh');
  Artisan::call('storage:link');
   dd('done3');
});
