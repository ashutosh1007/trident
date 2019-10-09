<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;
use Illuminate\Support\Facades\Input;
class DataController extends Controller
{   
    //  AJAX Functions  
    public function addProductToCart(Request $request){
        $productId = $request->addProductToCart;
        $productDetails = DB::table('products')
        ->join('product_images', 'products.product_id','=', 'product_images.product_id')
        ->join('product_color_quantities', 'product_images.product_id', '=', 'product_color_quantities.product_id')
        ->where('products.product_id', $productId)
        ->first();
        
        $customerId = Auth::user()->id;
        $productQty = $productDetails->product_quantity;
        
        $cartDetails = DB::table('carts')
        ->where([
            ['customer_id', $customerId],['product_unique_id', $productId]
        ])->get();
        
        if(count($cartDetails)>0)
        {
          return 0;
        }
        else{
            DB::table('carts')->insert(['product_unique_id'=>$productId,
            'customer_id'=>$customerId,
            'product_quantity'=>$productQty]);
            $count = DB::table('carts')->count();
            return 1;
        }
    }
    
    public function addProductToWishlist(Request $request){
        $productId = $request->addProductToWishlist;
        $customerId = Auth::user()->id;
        
        $wishlistDetails = DB::table('wishlists')
        ->where([
            ['customer_id', $customerId],['product_unique_id', $productId]
        ])->get();
        
        if(count($wishlistDetails)>0)
        {
            return 0;
        }
        else{
            DB::table('wishlists')->insert(['product_unique_id'=>$productId,
            'customer_id'=>$customerId]);
            return 1;
        }
    }
    
    public function deleteProductFromCart(Request $request){
        $productId = $request->deleteProductFromCart;
        $customerId = Auth::user()->id;
        DB::table('carts')
       ->where([
            ['customer_id', $customerId],['product_unique_id', $productId]
        ])->delete();
        return json_encode("Success ".$productId);
    }
    
    public function deleteProductFromWishlist(Request $request){
        $productId = $request->deleteProductFromWishlist;
        $customerId = Auth::user()->id;
        DB::table('wishlists')
        ->where([
            ['customer_id', $customerId],['product_unique_id', $productId]
        ])->delete();
        return json_encode("Success ".$productId);
    }
    
    public function postReview(Request $request){
        $productId = $request->postReviewId;
        $customerId = 1;    //Auth::user()->id;
        $review = $request->postComment;
        
        $data=array('comment_product_id'=>$productId,"comment_author"=>$customerId,"comment_content"=>$review);
        
        DB::table('comments')->insert($data);
        $count = DB::table('comments')->count();
        
        return json_encode($productId);
    }    

}