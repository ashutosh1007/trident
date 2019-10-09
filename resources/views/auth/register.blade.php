<?php 
    $title = "Register in!";
?>
@extends('layouts.app')

@section('content')
<div id="div-body">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4  col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 div-bg">
                <h1 class="text-align">Register</h1>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                </div>
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
        
                <form method="POST" action="/register/create">
                @csrf
                    <div class="form-group">
                        <label for="name" class="form-control">Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="">
                    </div>

                    <div class="form-group">
                        <label for="emailId" class="form-control">E-Mail Address</label>
                        <input id="emailId" type="email" class="form-control" name="email" value="">
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-control">Password</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="form-control">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <div class="form-control">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
