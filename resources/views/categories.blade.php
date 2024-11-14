@extends('layouts.head')
@section('allContent')
    <div class="conatiner mt-4">
        <form method="post">
            @csrf
            <div class="mx-auto p-2 col-lg-6">
                <div class="mb-3">
                    <label for="" class="form-label">Category Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="cateName"
                        id=""
                        aria-describedby="emailHelpId"
                        placeholder="Shoes"
                    />
                    <small id="emailHelpId" class="form-text text-muted"
                        >Help text</small
                    >
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

@if(session('addCategory'))
<script>alert('Category Added Sucessfully!')</script>
@endif