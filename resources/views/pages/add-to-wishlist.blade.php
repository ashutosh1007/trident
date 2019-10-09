<?php
    $head = "Wishlist";
    $title = $head;
?> @extends('layouts.tab') @section('content') @if(isset(Auth::user()->email))
    <div class="trident-shop">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-10 col-md-offset-1">
                    <div class="product-name">
                        <div class="one-forth text-center"> <span>Product Details</span> </div>
                        <div class="one-eight text-center"> <span>Price</span> </div>
                        <div class="one-eight text-center"> <span>Quantity</span> </div>
                        <div class="one-eight text-center"> <span>Total</span> </div>
                        <div class="one-eight text-center"> <span>Remove</span> </div>
                    </div> @foreach($product_details as $product)
                    <div class="product-cart" id="{{$product->product_id}}">
                        <div class="one-forth">
                            <div class="product-img" style="background-image: url(images/);"> </div>
                            <div class="display-tc">
                                <h3>{{$product->product_name}}</h3> </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc"> <span class="price">{{$product->product_cost}}</span> </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="1" min="1" max="100"> </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc"> <span class="price">$120.00</span> </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <button class="btn btn-danger deleteProductFromWishlist" id="{{$product->product_id}}">Delete</button>
                            </div>
                        </div>
                    </div> @endforeach </div>
            </div>
        </div>
    </div> @else
    <h1>Please Login</h1> <a href="/login/wishlist/0" class="btn btn-primary">Please Login
    </a> @endif @stop