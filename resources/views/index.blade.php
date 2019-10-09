<?php
    $title = "Home";
?>

@extends('layouts.app') 


@section('content')

<aside id="trident-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(images/img_bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1 class="head-1">Men's</h1>
                                    <h2 class="head-2">Jeans</h2>
                                    <h2 class="head-3">Collection</h2>
                                    <p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
                                    <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            
        </ul>
    </div>
</aside>
<div class="trident-shop">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center trident-heading">
                <h2><span>New Arrival</span></h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="product-entry">
                    <div class="product-img" style="background-image: url(images/item-5.jpg);">
                        <p class="tag"><span class="new">New</span></p>
                        <div class="cart">
                            <p> <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> <span><a href="#"><i class="icon-heart3"></i></a></span> <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span> </p>
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
</div>
<div class="trident-shop">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center trident-heading">
                <h2><span>Our Products</span></h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="product-entry">
                    <div class="product-img" style="background-image: url(images/item-9.jpg);">
                        <p class="tag"><span class="sale">Sale</span></p>
                        <div class="cart">
                            <p> <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> <span><a href="#"><i class="icon-heart3"></i></a></span> <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span> </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="shop.html">Floral Dress</a></h3>
                        <p class="price"><span>$199.00</span> <span class="sale">$300.00</span> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="product-entry">
                    <div class="product-img" style="background-image: url(images/item-10.jpg);">
                        <p class="tag"><span class="new">New</span></p>
                        <div class="cart">
                            <p> <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> <span><a href="#"><i class="icon-heart3"></i></a></span> <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span> </p>
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
</div>
<div id="trident-testimony" class="trident-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center trident-heading">
                <h2><span>Our Satisfied Customer says</span></h2> </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="owl-carousel2">
                    <div class="item">
                        <div class="testimony text-center"> <span class="img-user" style="background-image: url(images/person1.jpg);"></span> <span class="user">Alysha Myers</span> <small>Miami Florida, USA</small>
                            <blockquote>
                                <p>" A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony text-center"> <span class="img-user" style="background-image: url(images/person2.jpg);"></span> <span class="user">James Fisher</span> <small>New York, USA</small>
                            <blockquote>
                                <p>One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony text-center"> <span class="img-user" style="background-image: url(images/person3.jpg);"></span> <span class="user">Jacob Webb</span> <small>Athens, Greece</small>
                            <blockquote>
                                <p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop