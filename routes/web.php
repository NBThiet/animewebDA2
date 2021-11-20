
<?php
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AdminController; 
use App\Http\Controllers\CategoryProduct; 
use App\Http\Controllers\BlogerController;
use App\Http\Controllers\ProductController; 




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/
// phan login bloger
Route::get('/register', [BlogerController::class, 'showregister'])->name('show-form-register');
Route::post('/register', [BlogerController::class, 'register'])->name('register');

//Route::get('/', [BlogerController::class, 'layout']);

Route::get('/', [BlogerController::class, 'index'])->name('show-form-login');
Route::post('/discover', [BlogerController::class, 'login'])->name('login');

Route::get('/logout', [BlogerController::class, 'logout'])->name('logout');

Route::get('/profile', [BlogerController::class, 'showprofile'])->name('show-profile');
Route::post('/profile', [BlogerController::class, 'profile'])->name('profile');





// phan frontend

Route::get('/discover', [HomeController::class, 'index']);


Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/dis', [HomeController::class, 'cate_home']);



Route::get('/homepage', [HomeController::class, 'home']);

Route::get('/add-product', [ ProductController::class, 'add_product']);

// phan backend 
Route::get('/admin', [ AdminController::class, 'index']);

Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);

// category product

Route::get('/add-category-product', [ CategoryProduct::class, 'add_category_product']);
Route::get('/all-category-product', [ CategoryProduct::class, 'all_category_product']);

Route::get('/edit-category-product/{category_product_id}', [ CategoryProduct::class, 'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}', [ CategoryProduct::class, 'delete_category_product']);

Route::get('/unactive-category-product/{category_product_id}', [ CategoryProduct::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}', [ CategoryProduct::class, 'active_category_product']);

Route::post('/save-category-product', [ CategoryProduct::class, 'save_category_product']);
Route::post('/update-category-product/{category_product_id}', [ CategoryProduct::class, 'update_category_product']);

//product theo category 
Route::get('/danh-muc-anime/{category_id}', [ CategoryProduct::class, 'show_category_home']);


//product
Route::get('/chi-tiet-anime/{product_id}', [ ProductController::class, 'details_product']);


Route::get('/all-product', [ ProductController::class, 'all_product']);



Route::get('/edit-product/{product_id}', [ ProductController::class, 'edit_product']);
Route::get('/delete-product/{product_id}', [ ProductController::class, 'delete_product']);

Route::get('/unactive-product/{product_id}', [ ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}', [ ProductController::class, 'active_product']);

Route::post('/save-product', [ ProductController::class, 'save_product']);
Route::post('/update-product/{product_id}', [ ProductController::class, 'update_product']);

//product_profile



Route::get('/edit-product-profile/{product_id}', [ ProductController::class, 'edit_product']);
Route::get('/delete-product-profile/{product_id}', [ ProductController::class, 'delete_product']);

Route::post('/update-product-profile/{product_id}', [ ProductController::class, 'update_product']);


// tim kiem

Route::post('/tim-kiem', [ HomeController::class, 'search']);

// comment
Route::post('/comment-ajax', [ ProductController::class, 'load_comment']);
Route::post('/send-comment-ajax', [ ProductController::class, 'send_comment']);

