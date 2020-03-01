<?php

namespace App\Http\Controllers\Auth\Custom;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    |   Login Page
    |--------------------------------------------------------------------------
    */
    public function login() {
        
        if(auth()->check()){
            return abort(404);
        }

        return view("Auth.login_page");
    }

    /*
    |--------------------------------------------------------------------------
    |   Check Login data 
    |--------------------------------------------------------------------------
    */
    public function login_check(Request $req) {

        if(auth()->check()){
            return abort(404);
        }

        $data = $req->validate([
            "phone_number"  =>  "required",
            "password"      =>  "required"
        ]);

        // user data is wrong
        if( !auth()->attempt($data) ){
            return redirect()->route("login")
            ->with("error","username or password is wrong");
        }

        // user suspended
        if(!auth()->user()->is_active){
            Auth::logout();
            return redirect()->route("login")
            ->with("error","Your Account is suspended"); 
        }
        
        return redirect("/");
        
    }
    /*
    |--------------------------------------------------------------------------
    |   LogOut User
    |--------------------------------------------------------------------------
    */
    public function logout() {

        Auth::logout();
        return redirect()->route("login");

    }

}
