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

    public function showCustomer()
    {
        $customer = Customer::all();
        $data = compact('customer'); // send the $customer variable 
        return view("show-customer")->with($data);
    }

    // get form data with validation 
    public function register(Request $res)
    {
        $res->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'gender'=>'required',
                'address'=>'required',
                'state'=>'required',
                'country'=>'required',
                'dob'=>'required',
                'password'=>'required|confirmed',
                'password_confirmation'=>'required',

            ]
            );


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
