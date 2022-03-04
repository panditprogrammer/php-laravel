<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use LDAP\Result;

class RegistrationController extends Controller
{
    public function index()
    {   
        $form_title = "Customer Registration ";
        $url = url('/').'/register';
        $data = compact('url','form_title');
        return view("comp-form")->with($data);
    }

    // show all customer 
    public function showCustomer()
    {
        $customer = Customer::all();
        $data = compact('customer'); // send the $customer variable 
        return view("show-customer")->with($data);
    }

    public function deleteCustomer($id)
    {
        // find the data in table using primary key 
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect("show-customer");
    }

    // fetch data from database and show the form to edit 
    public function editCustomer($id)
    {
        // find the data in table using primary key 
        $form_title = "Customer update details ";
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $url = url('/')."/update-customer"."/".$id;
            $data = compact('customer','url','form_title');
            return view("comp-form")->with($data);
        } else {
            return redirect("show-customer");
        }
    }

    // update the data in database 
    public function updateCustomer($id,Request $request)
    {
        // find the data in table using primary key 
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->name = $request["name"]; 
            $customer->email = $request["email"]; 
            $customer->gender = $request["gender"]; 
            $customer->address = $request["address"]; 
            $customer->state = $request["state"]; 
            $customer->country = $request["country"]; 
            $customer->dob = $request["dob"]; 
            $customer->save();
            return redirect("show-customer");
        }
        return redirect("show-customer");
    }

    // get form data with validation 
    public function register(Request $request)
    {
        $success = false;
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'gender' => 'required',
                'address' => 'required',
                'state' => 'required',
                'country' => 'required',
                'dob' => 'required',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',

            ]
        );


        // insert the data in to database 
        $customer = new Customer;
        $customer->name = $request["name"];
        $customer->email = $request["email"];
        $customer->gender = $request["gender"];
        $customer->address = $request["address"];
        $customer->state = $request["state"];
        $customer->country = $request["country"];
        $customer->dob = $request["dob"];
        $customer->password = md5($request["password"]);
        $success =  $customer->save();

        $success = compact('success');
        return view("comp-form")->with($success);
    }
}
