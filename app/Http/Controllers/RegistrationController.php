<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view("comp-form");
    }

    // get form data with validation 
    public function register(Request $res)
    {
        $res->validate(
            [
                'username'=>'required',
                'email'=>'required|email',
                'password'=>'required|confirmed',
                'password_confirmation'=>'required',

            ]
            );

        echo "<pre>";
        print_r($res->all());
    }
    
}
