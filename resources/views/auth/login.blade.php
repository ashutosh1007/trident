<?php 
    $title = "Log in!";

?>
@extends('layouts.app')

@section('content')
<div id="div-body">
<div class="row">
        <div class="col-lg-4 col-lg-offset-4  col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 div-bg">
        <h1 class="text-align">Login</h1>
        
        @if(isset(Auth::user()->email))
            <script>window.location = "/successlogin"; </script>
            
        @endif

        @if($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/successlogin') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="form-control">E-Mail Address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="password" class="form-control">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Remember Me!</label>
                </div>
            </div>
            
            <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                        <a class="btn btn-link" href="">
                            Forgot Your Password?
                        </a>
            </div>  
        </form>
        </div>
    </div>
</div>
@stop