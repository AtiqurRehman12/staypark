<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registration extends Controller
{
    public function form(){
        return view('form');
    }
    public function register(Request $request){
        $request->validate([

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]
        );
        echo "<pre>";
        print_r($request->all());
    }
}
