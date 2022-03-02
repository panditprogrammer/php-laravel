<?php

namespace App\Http\Controllers;

use App\Models\Customer;
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
        // $res->validate(
        //     [
        //         'username'=>'required',
        //         'email'=>'required|email',
        //         'password'=>'required|confirmed',
        //         'password_confirmation'=>'required',

        //     ]
        //     );

        echo "<pre>";
        print_r($res->all());

        // insert the data in to database 
        $customer = new Customer;
        $customer->name = $res["name"];
        $customer->email = $res["email"];
        $customer->gender = $res["gender"];
        $customer->address = $res["address"];
        $customer->state = $res["state"];
        $customer->country = $res["country"];
        $customer->dob = $res["dob"];
        $customer->password = md5($res["password"]);
        $customer->save();


    }
    
}
