<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class contollerCategories extends Controller
{
    function addCate(Request $request){
        $category = new Categories();
        $category->categoryName = $request->cateName;
        $category->save();
        return back()->with("addCategory","sucessfully");
    }

    function addProduct(Request $proRequest){
        $product = new Products();
        $product->productName = $proRequest->proName;
        $productImg = time().'.'.$proRequest->proImg->extension();
        $proRequest->proImg->move(public_path('assets/img'),$productImg);
        $product->productImage = $productImg;
        $product->cateId = $proRequest->proCateId;
        $product->save();
        return back()->with('proAdded','sucessfully');
    }

    function viewCarts(){
        $categories = Categories::all();
        $products = Products::all();
        // $products = Products::where('cateId',request('category_id'))->get();
        return view('index',compact('products','categories'));

    }

    function viewProducts(){
        $categories = Categories::all();
        return view('product',compact('categories'));
    }

    function viewProdetails(Categories $category = null) {
        $categories = Categories::all();
        
        // Check if category is provided, otherwise show all products
        if ($category) {
            $products = Products::where('cateId', $category->id)->get(); // Filtered products based on category
            $allProducts = []; // Set empty if we only want specific category products
        } else {
            $products = []; // Set empty if no specific category is provided
            $allProducts = Products::latest()->get(); // All products for general view
        }
    
        return view('proDetail', compact('products', 'categories', 'allProducts'));
    }
    

    function productPg(Products $product){
        // $proDetail = Products::where('id',$product)->first();
        // $proDetail = Products::where('id',request('proId'))->first();
        return view('ProductDetail',compact('product'));
    }

}

// <-------------- request('category_id') ------------->
// Is line mein request('category_id') ek helper function hai jo Laravel mein available hai. Yeh directly category_id parameter ki value ko retrieve karta hai jo current HTTP request se aayi hai (jaise URL query parameter ya form input ke through).

 // first Method
    // function viewProdetails($category){
    //     $categories = Categories::all();
    //     $allProducts = Products::latest()->get();
    //     $products = Products::where('cateId',$category)->get();
    //     return view('proDetail',compact('products','categories','allProducts'));

    // }


     // Second Method
    // function viewProdetails(){
    //     $categories = Categories::all();
    //     $allProducts = Products::latest()->get();
    //     $products = Products::where('cateId',request('categoryId'))->latest()->get(); //Retrieve a query string("?") item from the request.
    //     return view('proDetail',compact('products','categories','allProducts'));
    // }