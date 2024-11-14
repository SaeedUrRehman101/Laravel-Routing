@extends('layouts.head')
@section('allContent')
    
<div class="conatiner">
<div class="mx-auto p-2">
<div class="row mx-auto p-2">
  @foreach ($categories as $values)
<div class="col-lg-3">
  <div class="card" style="width: 18rem;">
  <img src="{{asset('assets/img/'.$values['categoryName'])}}" class="card-img-top" alt="{{$values['categoryName']}}">
  <div class="card-body">
    <h5 class="card-title">{{$values['categoryName']}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{ url('Prodetails/'.$values['id']) }}" class="btn btn-primary">Go somewhere</a>
    <!-- <a href="{{ url('Prodetails?categoryId='.$values['id']) }}" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
</div>

  @endforeach
  </div>
</div>
</div>


@endsection