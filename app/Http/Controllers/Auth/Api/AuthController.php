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
            'email'             =>  'required | unique:users',
            'username'          =>  'required',
            'password'          =>  'required',
            'password_confirm'  =>  'required | same:password'
        ]);

        $valid_data['password'] =   Hash::make($req->password);

        $user = User::create($valid_data);

       
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
            'email'     =>  'required',
            'password'  =>  'required'
        ]);

        if(!auth()->attempt($login_data)){
            return response()->json('invalid data');
        }

        $access_token  = auth()->user()->createToken('authToken')->accessToken;

        return response()->json([
            'user'  =>  auth()->user(),
            'token' =>  $access_token
        ]);
    }



}
