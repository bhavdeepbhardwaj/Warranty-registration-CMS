<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// User

// Dashboard
Route::get('/', [UserController::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->name('home');

// Profile
Route::get('user/profile', [UserController::class, 'profile'])->name('profile');
Route::post('user/profile/profilesave', [UserController::class, 'profilesave'])->name('profilesave');

// Password Change
Route::get('user/password-change', [UserController::class, 'changePassword'])->name('change-password');
Route::post('user/password-change/store', [UserController::class, 'changePasswordSave'])->name('user.changePassword');

// Register Product
Route::get('user/my-product', [UserController::class, 'myProduct'])->name('my-product');

// Product Registration
Route::get('user/product-registration', [UserController::class, 'productRegistration'])->name('product-registration');
Route::post('user/product-registration/store', [UserController::class, 'productRegistrationStore'])->name('productRegistrationStore.store');

// Product Extend
Route::get('user/product-extend', [UserController::class, 'productExtend'])->name('product-extend');
Route::post('user/product-extend/store', [UserController::class, 'productExtendStore'])->name('productExtendStore.store');
Route::get('user/product-extend//search', [UserController::class, 'productExtendStore']);

// test
// Route::post('user/product-extend/store', [UserController::class, 'productExtendStores'])->name('productExtendStores.store');

// ContactUS
Route::get('user/contactUS', [UserController::class, 'contactUS'])->name('contactus');


Route::post('/getpurchaseCodeID', [UserController::class, 'getpurchaseCodeID']);






// Route::get('/', [HomeController::class,'indexx']);

Route::post('/getproductseries', [AdminController::class, 'getproductseries']);
Route::post('/getproductmodel', [AdminController::class, 'getproductmodel']);
Route::post('/getproductnumber', [AdminController::class, 'getproductnumber']);
Route::post('/getproductConfiguration', [AdminController::class, 'getproductConfiguration']);


// Admin
Route::get('admin', [AdminController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
Route::post('admin/profile/profilesave', [AdminController::class, 'adminProfilesave'])->name('admin.profilesave');
Route::post('changePassword', [AdminController::class, 'changePasswordSave'])->name('changePassword');
Route::get('admin/user', [AdminController::class, 'user'])->name('user');
Route::get('admin/warranty-registration', [AdminController::class, 'warrantyRegistration'])->name('warranty-registration');


Route::resource('admin/products', App\Http\Controllers\App\Http\Controllers\ProductController::class);

Route::get('admin/products/', [ProductController::class, 'index'])->name('products.index');
Route::get('admin/products/create/', [ProductController::class, 'create'])->name('products.create');


Route::get('admin/products/create/product-type', [ProductController::class, 'createproductTypes'])->name('product.add');
Route::post('admin/products/create/product-type/store', [ProductController::class, 'productTypestore'])->name('product.store');

Route::get('admin/products/create/series', [ProductController::class, 'productSeries'])->name('create.series');
Route::post('admin/products/create/series/store', [ProductController::class, 'productSeriesstore'])->name('series.store');

Route::get('admin/products/create/model', [ProductController::class, 'productModelsCreate'])->name('create.model');
Route::post('admin/products/create/model/store', [ProductController::class, 'productModelsStore'])->name('model.store');

Route::get('admin/products/create/number', [ProductController::class, 'productNumberCreate'])->name('create.number');
Route::post('admin/products/create/number/store', [ProductController::class, 'productNumberStore'])->name('number.store');

Route::get('admin/products/create/configuration', [ProductController::class, 'productConfigurationCreate'])->name('create.configuration');
Route::post('admin/products/create/configuration/store', [ProductController::class, 'productConfigurationStore'])->name('configuration.store');
