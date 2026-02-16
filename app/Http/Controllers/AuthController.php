<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLogin(){
        return view("login");
    }
    public function processLogin(Request $request){

    }
    public function showRegister(){
        return view("register");
    }
    public function processRegister(Request $request){
        $validator = Validator::make($request->all(), [
            "email"=> "required",
            "password"=> "required",
        ]);
    }
}
