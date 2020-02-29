<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Function for api
    |--------------------------------------------------------------------------
    */
    public function register(Request $req){
        
        $valid_data = $req->validate([
            'phone_number'      =>  'required | unique:users',
            'password'          =>  'required',
            'password_confirm'  =>  'required | same:password'
        ]);

        $valid_data['password'] =   Hash::make($req->password);

        $user = User::create($valid_data);

        // user account is suspended
        if(!$user->is_active){
            return response()->json(["this account is not activated"]);
        }
       
        $access_token  = $user->createToken('authToken')->accessToken;
       

        return response()->json([
            'user'  =>  $user,
            'token' =>  $access_token
        ]);
        
    }
    /*
    |--------------------------------------------------------------------------
    | Login Function for api
    |--------------------------------------------------------------------------
    */
    public function login(Request $req){
        
        $login_data = $req->validate([
            'phone_number' =>  'required',
            'password'     =>  'required'
        ]);

        // login data is valid
        if(!auth()->attempt($login_data)){
            return response()->json('invalid data');
        }

        // user account is suspended
        if(!auth()->user()->is_active){
            return response()->json(["this account is not activated"]);
        }


        $access_token  = auth()->user()->createToken('authToken')->accessToken;

        return response()->json([
            'user'  =>  auth()->user(),
            'token' =>  $access_token
        ]);
    }



}
