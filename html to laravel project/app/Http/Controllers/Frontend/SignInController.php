<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function index()
    {
        return view("frontend/signin");
    }

    public function upload(Request $request)
    {
        $filename = time()."-myImage.".$request->file("image")->getClientOriginalExtension();
        $request->file("image")->storeAs("uploads",$filename);
        return view("frontend/signin");
    }
}
