<?php
    $title = "Contact";
    $head = "Contact";
?>
  
@extends('layouts.tab') 
@section('content')
  <div id="trident-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h3>Contact Information</h3>
                    <div class="row contact-info-wrap">
                        <div class="col-md-3">
                            <p><span><i class="icon-location"></i></span> 198 West 21th Street,
                                <br> Suite 721 New York NY 10016</p>
                        </div>
                        <div class="col-md-3">
                            <p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                        <div class="col-md-3">
                            <p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                        </div>
                        <div class="col-md-3">
                            <p><span><i class="icon-globe"></i></span> <a href="#">yoursite.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <div class="contact-wrap">
                        <h3>Get In Touch</h3>
                        <form action="#">
                            <div class="row form-group">
                                <div class="col-md-6 padding-bottom">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control" placeholder="Your firstname"> </div>
                                <div class="col-md-6">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control" placeholder="Your lastname"> </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" class="form-control" placeholder="Your email address"> </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" class="form-control" placeholder="Your subject of this message"> </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Send Message" class="btn btn-primary"> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> @stop