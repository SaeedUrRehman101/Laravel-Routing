@extends('layouts.head')
@section('allContent')
<div class="conatiner mt-4">
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="mx-auto p-2 col-lg-6">
            <div class="mb-3">
                <label for="" class="form-label">Product Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="proName"
                    id=""
                    aria-describedby="emailHelpId"
                    placeholder="Shoes" />
                <small id="emailHelpId" class="form-text text-muted">Help text</small>

                <div class="mb-3 mt-4">
                    <label for="" class="form-label">Product Image</label>
                    <input
                        type="file"
                        class="form-control"
                        name="proImg"
                        id=""
                        placeholder=""
                        aria-describedby="fileHelpId"
                    />
                    <div id="fileHelpId" class="form-text">Help text</div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">City</label>
                    <select
                        class="form-select form-select-lg"
                        name="proCateId"
                        id=""
                    >
                    <option selected>Select one</option>
                    @foreach ($categories as $cateName)
                    <option value="{{$cateName['id']}}">{{$cateName['categoryName']}}</option>
                    @endforeach
                        <!-- <option value="">New Delhi</option>
                        <option value="">Istanbul</option>
                        <option value="">Jakarta</option> -->
                    </select>
                </div>
                
                <!-- Hover added -->
                <div class="list-group mt-4">
                    <button
                        type="submit"
                        class="list-group-item list-group-item-action active"
                        aria-current="true">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@if(session('proAdded'))
<script>alert('Product Added Sucessfully!')</script>
@endif