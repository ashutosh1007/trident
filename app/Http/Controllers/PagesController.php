<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
class PagesController extends Controller
{
     
    //Navbar Pages
    public function index(){
        return view('index');
    }
    public function home(){
         return view('index');
    }
    
    public function about(){
        return view('pages.about');
    }
    
    public function contact(){
        return view('pages.contact');
    }
    
    public function shop(){
        $products = DB::table('products')
        ->join('product_images', 'products.product_id','=', 'product_images.product_id')
        ->get();
        return view('pages.shop',['products'=>$products]);
    }
    
    public function viewCart(){
        if(\Auth::check()){
            $customerId = Auth::user()->id;
            $productDetail = DB::table('products')
            ->join('product_images', 'products.product_id','=', 'product_images.product_id')
            ->join('product_color_quantities', 'product_images.product_id', '=', 'product_color_quantities.product_id')
            ->join('carts', 'product_color_quantities.product_unique_id', '=', 'carts.product_unique_id' )
            ->where('carts.customer_id', $customerId)
            ->get();
            return view('pages.cart',['product_detail'=>$productDetail]);
        }else{
            return view('pages.cart');
        }
    }

    public function checkout(){
        return view('pages.checkout');
    }
    
    public function orderComplete(){
        return view('pages.order-complete');
    }
  
    public function viewWishlist(){
    if(\Auth::check()){
        $customerId = Auth::user()->id;
        $productDetails = DB::table('wishlists')
        ->join('products', 'products.product_id', '=', 'wishlists.product_unique_id')
        ->join('product_images', 'wishlists.product_unique_id','=', 'product_images.product_id') 
        ->join('product_color_quantities', 'product_images.product_id', '=', 'product_color_quantities.product_unique_id')
        ->where('wishlists.customer_id', $customerId)
        ->get();
        return view('pages.add-to-wishlist',['product_details'=>$productDetails]);
    }
    else{
        return view('pages.add-to-wishlist');
    }
    }
    
    public function viewProductDetails($id){
        $productId = $id;
        $productDetails = DB::table('products')
        ->where('products.product_id', $productId)
        ->join('product_images', 'products.product_id','=', 'product_images.product_id')
        ->get();
        return view('pages.product-detail')->with('product_details',$productDetails);
    } 
    
    public function viewReview(){
        $reviewDetails = DB::table('comments')
         ->join('products', 'products.product_id','=', 'comments.comment_product_id')  
        ->get();
        return view('pages.product-detail',['review_details'=>$reviewDetails]);
;
    }       
}