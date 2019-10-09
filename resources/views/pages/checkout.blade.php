<?php
    $head = "Checkout";
    $title = "Shopping Cart";
    $subTitle = $head;
?> @extends('layouts.sub-tab') @section('content')
    <div class="trident-shop">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-10 col-md-offset-1">
                    <div class="process-wrap">
                        <div class="process text-center active">
                            <p><span>01</span></p>
                            <h3>Shopping Cart</h3> </div>
                        <div class="process text-center active">
                            <p><span>02</span></p>
                            <h3>Checkout</h3> </div>
                        <div class="process text-center">
                            <p><span>03</span></p>
                            <h3>Order Complete</h3> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <form method="post" class="trident-form">
                        <h2>Billing Details</h2>
                        <div class="row">
                            <div class="col-md-12">
                               <div class="form-group">
                                    <input type="text" name="name" id="nname" class="form-control name" placeholder="Name *"> </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="mobileno" id="mobileno" class="mobileno form-control" placeholder="Mobile No *"> </div>
                            </div>
                            <div class="col-md-12">    
                                <div class="form-group">
                                    <input type="text" name="pincode" id=pincode class="pincode form-control" placeholder="Pin Code *"> </div>
                            </div>
                            <div class="col-md-12">
                               <div class="form-group">
                                    <input type="text" name="address" id="address" class="address form-control" placeholder="Address(House No, Building, Street, Area) *"> </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="towncity" id="towncity" class="towncity form-control" placeholder="Locality/Town"> </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="citydistrict" id="citydistrict" class="citydistrict form-control" placeholder="City/District"> </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="stateprovince" id="stateprovince" class="stateprovince form-control" placeholder="State Province"> </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="form-control"> Type of Address *</label>
                                    <input type="radio" name="address"  value="Home" checked>Home<br>
                                    <input type="radio" name="address"  value="Office" checked>Office/Commercial<br>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <input type="checkbox" name="address" value="true"> Make this my default address
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" name="submit" id="submit" class="submit btn btn-primary" > Add Address!!!!</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="cart-detail">
                        <h2>Cart Total</h2>
                        <ul>
                            <li> <span>Subtotal</span> <span>$100.00</span>
                                <ul>
                                    <li><span>1 x Product Name</span> <span>$99.00</span></li>
                                    <li><span>1 x Product Name</span> <span>$78.00</span></li>
                                </ul>
                            </li>
                            <li><span>Shipping</span> <span>$0.00</span></li>
                            <li><span>Order Total</span> <span>$180.00</span></li>
                        </ul>
                    </div>
                    <div class="cart-detail">
                        <h2>Payment Method</h2>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optradio">Direct Bank Tranfer</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optradio">Check Payment</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optradio">Paypal</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">I have read and accept the terms and conditions</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p><a href="/order-complete" class="btn btn-primary">Place an order</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="trident-shop">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center trident-heading">
                    <h2><span>Recommended Products</span></h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url(images/item-5.jpg);">
                            <p class="tag"><span class="new">New</span></p>
                            <div class="cart">
                                <p> <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> <span><a href="#"><i class="icon-heart3"></i></a></span> <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span> </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="shop.html">Floral Dress</a></h3>
                            <p class="price"><span>$300.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url(images/item-6.jpg);">
                            <p class="tag"><span class="new">New</span></p>
                            <div class="cart">
                                <p> <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> <span><a href="#"><i class="icon-heart3"></i></a></span> <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span> </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="shop.html">Floral Dress</a></h3>
                            <p class="price"><span>$300.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url(images/item-7.jpg);">
                            <p class="tag"><span class="new">New</span></p>
                            <div class="cart">
                                <p> <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> <span><a href="#"><i class="icon-heart3"></i></a></span> <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span> </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="shop.html">Floral Dress</a></h3>
                            <p class="price"><span>$300.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url(images/item-8.jpg);">
                            <p class="tag"><span class="new">New</span></p>
                            <div class="cart">
                                <p> <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> <span><a href="#"><i class="icon-heart3"></i></a></span> <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span> </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="shop.html">Floral Dress</a></h3>
                            <p class="price"><span>$300.00</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> @stop