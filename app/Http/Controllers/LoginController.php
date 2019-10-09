<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
use Session;
use Redirect;

class LoginController extends Controller{
    public function register(){
        return view('auth.register');
    }

    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
                'name' => 'required',
                'password' => ['required', 'string', 'min:6', 'confirmed'],
                'email' => 'required|email|unique:users'
            ], [
                'name.required' => 'Name is required',
                'password.required' => 'Password is required'
            ]);
        $input = request()->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        return back()->with('success', 'User created successfully.');
    }

    public function loginWithValue($loginValue, $productId){
        Session::put('url.intended',URL::previous());
        if($loginValue=='checkout')
            return view('auth.login');
        else if($loginValue=='add-to-wishlist')
            return view('auth.login');
        else if($loginValue=='default')
            return view('auth.login');
        else if($loginValue=='wishlist')
            return view('auth.login');
    }

    public function successLogin(Request $request){
        $this->validate($request, [
            'email'         =>  'required|email',
            'password'      =>  'required|alphaNum|min:6'
        ]);

        $user_data = array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password')
        );

        if(Auth::attempt($user_data)){            
            return Redirect::to(Session::get('url.intended'));
        }else{
            return back()->with('error', 'Wrong Login Details');
        }
        return back();
    }


   public function logout() {
        Auth::logout();
        return redirect(\URL::previous());
   }

}