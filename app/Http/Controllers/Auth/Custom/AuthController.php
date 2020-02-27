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
            return back();
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
            return back();
        }

        $data = $req->validate([
            "phone_number"  =>  "required",
            "password"      =>  "required"
        ]);

        if( !auth()->attempt($data) ){
            return response()->json('invalid data');
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
