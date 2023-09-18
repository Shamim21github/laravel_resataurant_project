<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RawmaterialController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\ProductController;

// use App\Http\Controllers\


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
// Route::get('/',[HomeController::class,'index']);
Route::get('/', [HomeController::class, 'home']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);
// Route::get('/home',[HomeController::class,'home']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/help', [HomeController::class, 'help']);


Route::resource('bookings', BookingController::class);
Route::resource('customers', CustomerController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('rawmaterials', RawmaterialController::class);
Route::resource('warehouses', WarehouseController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('orders', OrderController::class);
Route::resource('menus', MenuController::class);
Route::resource('categorys', CategoryController::class);

Route::resource('products', ProductController::class);
Route::get("getproduct", [ProductController::class, 'get_product_json']);
Route::resource('customers', CustomerController::class);
Route::get("getcustomer", [CustomerController::class, 'get_customer_json']);

// Route::resource('orders', ::class);
