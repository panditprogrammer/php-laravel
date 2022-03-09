<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Database\Seeders\CustomerSeeder;
use Illuminate\Http\Request;
use LDAP\Result;

use function PHPUnit\Framework\isNull;

class RegistrationController extends Controller
{
    public function index()
    {
        $form_title = "Customer Registration ";
        $url = url('/') . '/customer/register';
        $data = compact('url', 'form_title');
        return view("comp-form")->with($data);
    }

    // show all customer 
    public function showCustomer(Request $request)
    {
        $searchKey = $request["search"] ?? "";
        if($searchKey != ""){
            // $customers = Customer::where("name", "LIKE","%$searchKey%")->orWhere("email", "LIKE","%$searchKey%")->orWhere("country", "LIKE","%$searchKey%")->get();
            $customers = Customer::paginate(15);
        } else{
            // $customer = Customer::all();
            $customers = Customer::paginate(15);
        }
        $data = compact('customers',"searchKey"); // send the $customer variable 
        return view("show-customer")->with($data);
    }



    // soft delete customer ***********************
    public function showSoftDelete()
    {
        $customer = Customer::onlyTrashed()->get();
        $data = compact('customer'); // send the $customer variable 
        return view("customer-trash")->with($data);
    }

    // restore deleted customer from softDelete
   public function restoreCustomer($id)
   {
       $customer = Customer::withTrashed()->find($id);
       if(!is_null($customer))
       {
           $customer->restore();
       }
       return redirect()->back();
   }

   // delete permanently
   public function deleteCustomerForever($id)
   {
       $customer = Customer::withTrashed()->find($id);
       if(!is_null($customer)){
           $customer->forceDelete();
       }
       return redirect()->back();
   }



    public function deleteCustomer($id)
    {
        // find the data in table using primary key 
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect("/customer/show");
    }

    // fetch data from database and show the form to edit 
    public function editCustomer($id)
    {
        // find the data in table using primary key 
        $form_title = "Customer update details ";
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $url = url('/') . "/customer/update" . "/" . $id;
            $data = compact('customer', 'url', 'form_title');
            return view("comp-form")->with($data);
        } else {
            return redirect("/customer/show");
        }
    }

    // update the data in database 
    public function updateCustomer($id, Request $request)
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
            return redirect("/customer/show");
        }
        return redirect("/customer/show");
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
