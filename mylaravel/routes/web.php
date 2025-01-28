<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get("/login" ,
    [App\Http\Controllers\LoginController::class,'index']);
Route::get("/register" ,
    [App\Http\Controllers\RegisterController::class,'index']);
Route::post("/register" ,
    [App\Http\Controllers\RegisterController::class,'create']);
Route::get("/home" ,
    [App\Http\Controllers\HomeController::class,'index']);
Route::get("/" ,
    [App\Http\Controllers\HomeController::class,'index']);
Route::get("/users" ,
    [App\Http\Controllers\HomeController::class,'index']);
Route::get("/users/{id}" ,
    [App\Http\Controllers\HomeController::class,'edit']);
Route::put("/user" ,
    [App\Http\Controllers\HomeController::class,'edit_action']);
Route::delete("/user" ,
    [App\Http\Controllers\HomeController::class,'delete']);


Route::get('/hello/{id?}',
    function ($val="") {
    return "<h1>Hello World!$val</h1>";
});
Route::get("/mycontroller/{id?}" ,
    [MyController::class,'myfunction']);
Route::post("/mycontroller/{id?}" ,
    [MyController::class,'MYFUNCTION']);
