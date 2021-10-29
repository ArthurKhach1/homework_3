@extends('app.master')
@section('title','Save Product')

@section("content")

    @include('includes.massages')
<h1>Save Products</h1>



<form action="/saveprod" method="post">
    @csrf
    <div>
        <input type="name" name="name" placeholder="Name..">
    </div>
    <div>
        <input type="text" name="price" placeholder="Price..">
    </div>
    <div>

{{--        <input type="hidden" name="user_name" value="{{Auth::user()->name}}">--}}

    </div>

    <div>
        <input type="submit" value="Save">
    </div>
</form>
@endsection

