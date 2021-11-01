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
    <select name="category_id" id="">
        @foreach($categ as $categs)
            <option value="{{$categs->id}}">{{$categs->name}}</option>
        @endforeach
    </select>
    <div>
        <input type="submit" value="Save">
    </div>
</form>
@endsection

