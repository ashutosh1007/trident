<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
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
        return view('pages.shop');
    }
    
    public function cart(){
         return view('pages.cart');
    }
    
    public function addWishlist(){
          return view('pages.add-to-wishlist');
    }
    public function checkout(){
          return view('pages.checkout');
    }
    public function orderComplete(){
          return view('pages.order-complete');
    }
    public function productDetail(){
        return view('pages.product-detail');
    } 
}
