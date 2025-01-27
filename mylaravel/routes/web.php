<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get("/login" ,
    [LoginController::class,'index']);
Route::get("/register" ,
    [RegisterController::class,'index']);
Route::get("/home" ,
    [App\Http\Controllers\HomeController::class,'index']);
Route::get("/" ,
    [App\Http\Controllers\HomeController::class,'index']);


Route::get('/hello/{id?}',
    function ($val="") {
    return "<h1>Hello World!$val</h1>";
});
Route::get("/mycontroller/{id?}" ,
    [MyController::class,'myfunction']);
Route::post("/mycontroller/{id?}" ,
    [MyController::class,'MYFUNCTION']);
