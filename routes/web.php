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
// Register Pages Routing

Route::get('/register','LoginController@register');

Route::get('/register/create', 'LoginController@create');

Route::post('/register/create', 'LoginController@store');

//Login Pages Routing

Route::get('/login/{variable}/{id}', 'LoginController@loginWithValue');

Route::post('/successlogin', 'LoginController@successLogin');

Route::get('/logout', 'LoginController@logout');

//Data Pages Routing

Route::get('/', 'PagesController@index');

Route::get('/index', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

// Route::get('/cart/addtocart/{id}', 'PagesController@addToCart');

Route::get('/cart', 'PagesController@viewCart');

Route::get('/shop', 'PagesController@shop');

Route::get('/checkout', 'PagesController@checkout');

Route::get('/add-to-wishlist', 'PagesController@viewWishlist');

//Route::get('/add-to-wishlist/{id}', 'PagesController@addToWishlist');

Route::get('/order-complete','PagesController@orderComplete');


Route::get('/product-detail/{id}','PagesController@viewProductDetails');

Route::get('/product-detail','PagesController@viewProductDetails');

Route::get('/home',function(){
        return view('home');
});

//Admin Pages Routing

Route::get('/dashboard', function(){
        return view('admin.dashboard');
});

//AJAX Pages Routing

Route::post('/addProductToCart','DataController@addProductToCart');

Route::post('/addProductToWishlist','DataController@addProductToWishlist');

Route::post('/addProdToWishlist','DataController@addProductToWishlist');

Route::post('/addProdToCart','DataController@addProductToCart');

Route::post('/deleteProductFromCart', 'DataController@deleteProductFromCart');

Route::post('/deleteProductFromWishlist', 'DataController@deleteProductFromWishlist');

Route::post('/address/addaddress', 'DataController@addAddress');

Route::post('/postReview', 'DataController@postReview');

Route::post('/post', 'PagesController@viewReview');