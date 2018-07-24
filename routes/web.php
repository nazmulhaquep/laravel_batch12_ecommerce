<?php

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

/*User View Route*/
Route::get('/','WelcomeController@index');
Route::get('/category/{id}','WelcomeController@category');
Route::get('/product-details/{id}','WelcomeController@productDetails');
Route::get('/contact','WelcomeController@contact');
Route::get('send-mail','WelcomeController@send_mail');


Route::get('/add-to-cart/{id}','CartController@addToCart');
Route::get('/show-cart','CartController@showCart');
Route::get('/remove-to-cart/{id}','CartController@removeToCart');
Route::post('/update-cart-qty','CartController@updateCartQty');
Route::get('/empty-cart','CartController@emptyCart');
Route::get('/billing','CheckoutController@billingInfo');
Route::post('/update-billing','CheckoutController@updateBilling');
Route::get('/shipping','CheckoutController@shipping');
Route::post('/save-shipping','CheckoutController@saveShipping');
Route::get('/payment','CheckoutController@payment');

/*
 * Start Checkout
 */
Route::get('/checkout','CheckoutController@checkout');
Route::post('/register-customer','CheckoutController@registerCustomer');
Route::post('/customer-login-check','CheckoutController@CustomerLoginCheck');
Route::get('/customer-logout','CheckoutController@customerLogout');

/*Admin Route login issue*/
Route::get('/admin','AdminController@index');
Route::post('/admin-login-check','AdminController@adminLoginCheck');
Route::get('/logout','AdminController@logout');


/*Admin After Login*/
Route::get('/dashboard','SuperAdminController@index');


/*Category Route*/

Route::get('/add-category','CategoryController@createCategory');
Route::post('/save-category','CategoryController@storeCategory');

Route::get('/view-category/{id}','CategoryController@showCategory');
Route::get('/edit-category/{id}','CategoryController@editTheCategory');
Route::post('/update-category','CategoryController@updateTheCategory');
Route::get('/delete-category/{id}','CategoryController@deleteTheCategory');

Route::get('/manage-category','CategoryController@controlCategory');

/*Sub Category Route*/

Route::get('/add-subcategory','SubCategoryController@createSubCategory');
Route::post('/save-subcategory','SubCategoryController@storeSubCategory');

Route::get('/view-subcategory/{id}','SubCategoryController@showSubCategory');
Route::get('/edit-subcategory/{id}','SubCategoryController@editTheSubCategory');
Route::post('/update-subcategory','SubCategoryController@updateTheSubCategory');
Route::get('/delete-subcategory/{id}','SubCategoryController@deleteTheSubCategory');

Route::get('/manage-subcategory','SubCategoryController@controlSubCategory');

/*Manufacturer Route*/

Route::get('/add-manufacturer','ManufacturerController@createManufacturer');
Route::post('/save-manufacturer','ManufacturerController@storeManufacturer');

Route::get('/view-manufacturer/{id}','ManufacturerController@showManufacturer');
Route::get('/edit-manufacturer/{id}','ManufacturerController@editTheManufacturer');
Route::post('/update-manufacturer','ManufacturerController@updateTheManufacturer');
Route::get('/delete-manufacturer/{id}','ManufacturerController@deleteTheManufacturer');

Route::get('/manage-manufacturer','ManufacturerController@controlManufacturer');

/*Product Route*/

Route::get('/add-product','ProductController@createProduct');
Route::post('/save-product','ProductController@storeProduct');
Route::get('/manage-product','ProductController@controlProduct');

Route::get('/view-product/{id}','ProductController@showProduct');
Route::get('/edit-product/{id}','ProductController@editTheProduct');
Route::post('/update-product','ProductController@updateTheProduct');
Route::get('/delete-product/{id}','ProductController@deleteTheProduct');




/*Slider Route*/

Route::get('/add-slider','sliderController@createSlider');
Route::post('/save-slider','sliderController@storeSlider');
Route::get('/manage-slider','sliderController@controlSlider');


Route::get('/view-slider/{id}','sliderController@showSlider');
Route::get('/edit-slider/{id}','sliderController@editTheSlider');
Route::post('/update-slider','sliderController@updateTheSlider');
Route::get('/delete-slider/{id}','sliderController@deleteTheSlider');
