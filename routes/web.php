<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\HomePageController;
use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\SubCategoryController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// backend controller start
// dashboard controller
Route::group(['middleware' => ['auth', 'role:admin|manager|editor|seller']], function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'create')->name('dashboard');
    });

    // category controller
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/create/category','create')->name('create.category');
        Route::post('/store/category','store')->name('store.category');
        Route::get('/all/category','all')->name('all.category');
        Route::get('/edit/category/{id}','edit')->name('edit.category');
        Route::post('/update/category/{id}','update')->name('update.category');
        Route::post('/delete/category/{id}','delete')->name('delete.category');
    });

     // sub category controller
     Route::controller(SubCategoryController::class)->group(function(){
        Route::get('/create/sub-category','create')->name('create.subCategory');
        Route::post('/store/sub-category','store')->name('store.subCategory');
        Route::get('/all/subCategory','all')->name('all.subCategory');
        Route::get('/edit/subCategory/{id}','edit')->name('edit.subCategory');
        Route::post('/update/subCategory/{id}','update')->name('update.subCategory');
        Route::post('/delete/subCategory/{id}','delete')->name('delete.subCategory');
    });

});

Route::controller(AdminProfileController::class)
    ->group(function () {
        // update profile
        Route::get('/create/profile', 'create')->name('create.profile');
        Route::post('/update/profile/{id}', 'update')->name('update.profile');

        // update password
        Route::get('/edit/password/', 'editPassword')->name('edit.password');
        Route::put('/update/password/{id}', 'updatePassword')->name('update.password');
    })
    ->middleware(['auth', 'verified']);
// profile controller end

// backend controller end

// google login end
Route::get('/google/login', [ProfileController::class, 'login'])->name('google.login');
Route::get('/google/redriect', [ProfileController::class, 'redriect'])->name('google.redriect');
// google login end

// frontend all controller start
// HomePage Controller Start
Route::controller(HomePageController::class)->group(function () {
    // home page setup
    Route::get('/', 'create')->name('home.create');

    // product details page setup
    Route::get('/product/details', 'createProductDetailsPage')->name('product.details.create');

    // mega menu
    // shop grid
    Route::get('/shop/grid', 'createShopGrid')->name('shop.grid.create');
    // shop list
    Route::get('/shop/list', 'createShopList')->name('shop.list.create');
    // shop left list
    Route::get('/shop/left/list', 'createShopLeftList')->name('shop.left.list.create');
    // shop right list
    Route::get('/shop/right/list', 'createShopRightList')->name('shop.right.list.create');
    // shop product details left side
    Route::get('/shop/details/left', 'createShopDetailsLeft')->name('shop.left.details.create');
    // shop product details right side
    Route::get('/shop/details/right', 'createShopDetailsRight')->name('shop.right.details.create');
    // store listing
    Route::get('/store/listing', 'createShopStoreListing')->name('store.listing.create');
    // single store listing
    Route::get('/store/single', 'createSingleShopStore')->name('store.single.create');
    // account page
    Route::get('/account/page', 'createAccountPage')->name('create.account');
    // profile page
    Route::get('/profile/page', 'createProfilePage')->name('profile.create');
    // password page
    Route::get('/password/page', 'createPasswordPage')->name('password.create');
    // odrer page
    Route::get('/odrer/page', 'createOdrerPage')->name('odrer.create');
    // address page
    Route::get('/address/page', 'createAddressPage')->name('address.create');
    // wisih list page
    Route::get('/wisih/page', 'createWisihPage')->name('wisih.create');
    // vendor page
    Route::get('/vendor/page', 'createVendorPage')->name('vendor.create');
    // cart page
    Route::get('/cart/page', 'createCartPage')->name('cart.create');
    // check out page
    Route::get('/check-out/page', 'createCheckOutPage')->name('check.out.create');
    //error 400 page
    Route::get('/error/400/page', 'createError400Page')->name('error.400.create');
    //error 500 page
    Route::get('/error/500/page', 'createError500Page')->name('error.500.create');
});
// HomePage Controller End

// fortend all controller end

require __DIR__ . '/auth.php';
require __DIR__ . '/frontend.php';
