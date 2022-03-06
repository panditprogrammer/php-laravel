<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\SignInController;
use Illuminate\Support\Facades\Route;


Route::get("/",[HomeController::class,"index"]);
Route::get("/about",[AboutController::class,"index"]);
Route::get("/service",[ServiceController::class,"index"]);
Route::get("/contact",[ContactController::class,"index"]);
Route::get("/sign",[SignInController::class,"index"]);

Route::post("/upload",[SignInController::class,"upload"]);
Route::get("/upload",function(){
    return view("upload");
});