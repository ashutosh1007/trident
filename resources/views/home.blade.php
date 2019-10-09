<?php 
    $title = "Home";
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                @if(isset(Auth::user()->email))
                    <div class="alert alert-danger success-block">
                    You are logged in!
                    <strong>{{ Auth::user()->email }}</strong>
                    <a href="{{ url('/logout') }}">logout</a>
                    </div>
                @else
                     <script> window.location = "/login" </script>
                @endif

                </div>
            </div>
            
        </div>
    </div>
    
</div>
@endsection
