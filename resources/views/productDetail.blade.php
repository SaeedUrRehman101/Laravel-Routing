@extends('layouts.head')
@section('allContent')
    <div class="conatiner">
        <div class="col-lg-8 mx-auto p-2 d-flex justify-content-center align-items-center flex-column">
            <img src="{{asset('assets/img/'.$product->productImage)}}" width="300px" alt="">
            <h3 class="text-center mt-4">{{$product->productname}}</h3>
        </div>
    </div>
@endsection