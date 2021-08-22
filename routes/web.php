<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',\App\Http\Livewire\HomeComponent::class);
Route::get('/shop',\App\Http\Livewire\ShopComponent::class);
Route::get('/cart',\App\Http\Livewire\CartComponent::class)->name('product.cart');
Route::get('/product-category/{category_slug}',\App\Http\Livewire\CategoryComponent::class)->name('product.category');
Route::get('/product/{slug}',\App\Http\Livewire\DetailsComponent::class)->name('product.details');
Route::get('/checkout',\App\Http\Livewire\CheckoutComponent::class)->name('checkout')->middleware('auth');
Route::get('/search',\App\Http\Livewire\SearchComponent::class)->name('product.search');
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//  return view('dashboard');
//})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    Route:: get('/user/dashboard',\App\Http\Livewire\User\UserDashboardComponent::class)->name('user.dashboard');
});
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group( function () {
    Route:: get('/admin/dashboard',\App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');

    Route:: get('/admin/category',\App\Http\Livewire\Admin\AdminCategoryComponent::class)->name('admin.categories');
    Route:: get('/admin/category/add',\App\Http\Livewire\Admin\AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route:: get('/admin/category/edit/{category_slug}',\App\Http\Livewire\Admin\AdminEditCategoryComponent::class)->name('admin.editcategory');

    Route:: get('/admin/product',\App\Http\Livewire\Admin\AdminProductComponent::class)->name('admin.product');
    Route:: get('/admin/product/add',\App\Http\Livewire\Admin\AdminAddProductComponent::class)->name('admin.addproduct');

    Route:: get('/admin/slider',\App\Http\Livewire\Admin\AdminHomeSliderComponent::class)->name('admin.homeslider');
    Route:: get('/admin/slider/add',\App\Http\Livewire\Admin\AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route:: get('/admin/slider/edit/{slide_id}',\App\Http\Livewire\Admin\AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

    Route:: get('/admin/coupon',\App\Http\Livewire\Admin\AdminCouponsComponent::class)->name('admin.coupons');
    Route:: get('/admin/coupon/add',\App\Http\Livewire\Admin\AdminAddCouponsComponent::class)->name('admin.addcoupons');
    Route:: get('/admin/coupon/edit/{coupon_id}',\App\Http\Livewire\Admin\AdminEditCouponsComponent::class)->name('admin.editcoupons');
});
