<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SingleActionController;
use App\Models\Customer;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// *************************** controller base routing ***************************
//                      call the controller if route is request 
// *************************** ok ************************************************
Route::get("/",[TestController::class,"index"]);
Route::get("/about",[TestController::class,"about"]);
Route::get("/service",[TestController::class,"service"]);


// use single action controller 
Route::get("/service",SingleActionController::class);


// show the form  to register 
Route::get("/register",[RegistrationController::class,"index"]);
// get the form data 
Route::post("/register",[RegistrationController::class,"register"]);
// show the data in table 
Route::get("/show-customer",[RegistrationController::class,"showCustomer"]);
// delete data 
Route::get("/delete-customer/{id}",[RegistrationController::class,"deleteCustomer"]);
// fetching the data for update
Route::get("/edit-customer/{id}",[RegistrationController::class,"editCustomer"]);
// updating the data 
Route::post("/update-customer/{id}",[RegistrationController::class,"updateCustomer"]);

// show softDeletes page 
Route::get("/customer-trash",[RegistrationController::class,"showSoftDelete"]);
// restore softDeletes 
Route::get("/restore-customer/{id}",[RegistrationController::class,"restoreCustomer"]);
// delete permanently of softDelete
Route::get("/delete-customer-trash/{id}",[RegistrationController::class,"deleteCustomerForever"]);




Route::get("/get-session",function(){
    printRaw(session()->all());
});

Route::get("/set-session",function(Request $request){
    $request->session()->put("username","Panditprogrammer");
    $request->session()->put("userId","1234");
    $request->session()->flash("sampleKey","sampleValue"); // only one time
    return redirect("get-session");
});

Route::get("/destroy",function(){
    session()->forget("username");
    return redirect("get-session");
});









// *************************** simple routing ***************************
// *************************** ok ************************************************

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/service', function () {
//     return view('service');
// });

// Route::get("/test/{name?}/{id?}", function($name=null,$id = null){
//     // echo $test;
//     $data = compact('name','id');
//     // send the to the view page 
//     return view('test')->with($data);
// });