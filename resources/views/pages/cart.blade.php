<?php
    $head = "Shopping Cart";
    $title = "Product";
    $subTitle = $head;
?> @extends('layouts.sub-tab') @section('content') @if(\Auth::check())
    <div class="trident-shop">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-10 col-md-offset-1">
                    <div class="process-wrap">
                        <div class="process text-center active">
                            <p><span>01</span></p>
                            <h3>Shopping Cart</h3> </div>
                        <div class="process text-center">
                            <p><span>02</span></p>
                            <h3>Checkout</h3> </div>
                        <div class="process text-center">
                            <p><span>03</span></p>
                            <h3>Order Complete</h3> </div>
                    </div>
                </div>
            </div>
            <div class="product-img" style="background-image: url(images/item-6.jpg);"> </div>
            <div class="row row-pb-md">
                <div class="col-md-12">
                    <div class="product-name">
                        <div class="one-forth text-center"> <span>Product Details</span> </div>
                        <div class="one-eight text-center"> <span>Price</span> </div>
                        <div class="one-eight text-center"> <span>Quantity</span> </div>
                        <div class="one-eight text-center"> <span>Total</span> </div>
                        <div class="one-eight text-center"> <span>Remove</span> </div>
                    </div> @foreach($product_detail as $product)
                    <div class="product-cart" id="{{$product->product_id}}">
                        <div class="one-forth">
                            <div class="product-img" style="background-image: url(images/item-6.jpg);"> </div>
                            <div class="display-tc">
                                <h3>{{$product->product_name}}</h3> </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc"> <span class="price">{{$product->product_cost}}</span> </div>
                        </div>
                        <!--test-->
                        <div class="one-eight">
                            <div class="display-tc">
                                <div class="input-group"> <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn btn-padding"  data-type="minus" data-field="">
                                          <i class="icon-minus2"></i>
                                    </button>
                                </span>
                                    <label for="" id="quantity" name="quantity" class=" input-number">{{$product->product_quantity}}</label> <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn btn-padding" data-type="plus" data-field="">
                                            <i class="icon-plus2"></i>
                                    </button>
                                </span> </div>
                            </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc"> <span class="price">{{$product->product_cost* $product->product_quantity}}</span> </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <button class="btn deleteProductFromCart" id="{{$product->product_id}}"><span class="far fa-bookmark"></span></button>
                            </div>
                        </div>
                    </div> @endforeach </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="total-wrap">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="#">
                                    <div class="row form-group">
                                        <div class="col-md-9">
                                            <input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number..."> </div>
                                        <div class="col-md-3">
                                            <input type="submit" value="Apply Coupon" class="btn btn-primary"> </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-md-push-1">
                                <div class="total">
                                    <div class="sub">
                                        <p><span>Total MRP</span> <span></span></p>
                                        <p><span>Bag Discount</span> <span>$200.00</span></p>
                                        <p><span>Estimated Tax</span> <span>$0.00</span></p>
                                        <p><span>Coupon Discount</span> <span>$45.00</span></p>
                                        <p><span>Delivery Charges</span> <span>$45.00</span></p>
                                    </div>
                                    <div class="grand-total">
                                        <p><span><strong>Total:</strong></span> <span>$450.00</span></p>
                                    </div> @if(isset(Auth::user()->email))
                                    <div class=""> <a href="/checkout" type="button" class="btn btn-primary btn-block"> Place Order</a> </div> @else
                                    <div class=""> <a href="/login/checkout/{{$product->product_id}}" type="button" class="btn btn-primary btn-block"> Place Order</a> </div> @endif </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> @else
    <h1>
        Theres nothing to show
    </h1> <a href="/add-to-wishlist" class="btn btn-primary ">Add From Wishlist</a> @endif @stop