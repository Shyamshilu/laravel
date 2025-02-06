<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CMSController;

Route::get('/home',[CMSController::class,'index'])->name('homepage');
   
Route::get('/about',[CMSController::class,'about'])->name('aboutpage');

Route::get('/contact',[CMSController::class,'contact']);

Route::get('/service',[CMSController::class,'service']);


Route::get('/submitdata',[CMSController::class,'submitdata']);

Route::get('/pg',function()
{
    return "welcome to mca";
});


Route::get('/ug',function()
{
    return "welcome to bca";
});

Route::get('/user/{id}',function($id)
{
    return "enter your id".$id;
});


Route::get('/username/{name}',function($name)
{
    return "enter your name".$name;
});
