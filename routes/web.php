<?php

use App\Http\Controllers\contollerCategories;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::view('home','index')->name('index');
Route::get('home',[contollerCategories::class,'viewCarts']);
Route::view('Categories','categories')->name('categories');
Route::post('Categories',[contollerCategories::class,"addCate"]);
// Route::view("Products",'product')->name('products');
Route::post('Products',[contollerCategories::class,'addProduct']);
Route::get('Products',[contollerCategories::class,'viewProducts']);
Route::view('Prodetails','proDetail')->name('Prodetails');
Route::get('Prodetails/{category?}',[contollerCategories::class,'viewProdetails']);
Route::get('Prodetails',[contollerCategories::class,'viewProdetails']);
Route::view('ProductDetail','productDetail')->name('ProductDetail');
Route::get('ProductDetail/{product}',[contollerCategories::class,'productPg']);
