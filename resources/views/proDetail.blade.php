@extends('layouts.head')
@section('allContent')
    
<div class="conatiner">
<div class="mx-auto p-2">
<div class="row mx-auto p-2">
  @if($products)
  @foreach ($products as $values)
<div class="col-lg-3">
  <div class="card" style="width: 18rem;">
  <img src="{{asset('assets/img/'.$values['productImage'])}}" class="card-img-top" alt="{{$values['productname']}}">
  <div class="card-body">
    <h5 class="card-title">{{$values['productname']}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{ url('ProductDetail/'.$values->id) }}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
  @endforeach
  @endif
  @if($allProducts)
  @foreach ($allProducts as $Products)
<div class="col-lg-3">
  <div class="card" style="width: 18rem;">
  <img src="{{asset('assets/img/'.$Products->productImage)}}" class="card-img-top" alt="{{$Products['productname']}}">
  <div class="card-body">
    <h5 class="card-title">{{$Products->productname}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{ url('ProductDetail/'.$Products->id) }}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
  @endforeach
  @endif
  </div>
</div>
</div>


@endsection