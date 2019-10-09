<?php
    $title = "Shop";
		$head = "Products";
?> @extends('layouts.tab') @section('content')
    <div class="trident-shop">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-push-2">
                    <div class="row row-pb-lg"> @foreach($products as $product)
                        <div class="col-md-4 text-center trident-product-detail">
                            <div class="product-entry">
                                <div class="product-img" style="background-image:url('images/{{$product->product_image_src}}');">
                                    <p class="tag"><span class="new">New</span></p>
                                    <div class="cart">
                                        <p> <span><button class="addProductToCart btn btn-primary" id="cart-{{$product->product_id}}">Cart</button></span> <span><a href="/product-detail/{{$product->product_id}}"><i class="icon-eye"></i></a></span> <span><a href="#"><i class="icon-heart3"></i></a></span> @if(isset(Auth::user()->email)) <span><button class="addProductToWishlist btn btn-primary" id="wishlist-{{$product->product_id}}">Wishlist</button></span> @else <span>
                                               <a href="/login/add-to-wishlist/{{$product->product_id}}" class="btn btn-primary">Wishlist</a>
                                           </span> @endif </p>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="/product-detail">{{$product->product_name}}</a></h3>
                                    <p class="price"><span>{{$product->product_cost}}</span></p>
                                </div>
                            </div>
                        </div> @endforeach
                        <div class="col-md-3 col-md-pull-7">
                            <div class="sidebar">
                                <div class="side">
                                    <h2>Price Range</h2>
                                    <form method="post" class="trident-form-2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="range" min="1" max="100"> </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="side">
                                    <h2>Color</h2>
                                    <div class="color-wrap">
                                        <p class="color-desc">
                                            <a href="#" class="color color-1"></a>
                                            <a href="#" class="color color-2"></a>
                                            <a href="#" class="color color-3"></a>
                                            <a href="#" class="color color-4"></a>
                                            <a href="#" class="color color-5"></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="side">
                                    <h2>Size</h2>
                                    <div class="size-wrap">
                                        <p class="size-desc"> <a href="#" class="size size-1">XS</a> <a href="#" class="size size-2">S</a> <a href="#" class="size size-3">M</a> <a href="#" class="size size-4">L</a> <a href="#" class="size size-5">XL</a> <a href="#" class="size size-5">XXL</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> @stop