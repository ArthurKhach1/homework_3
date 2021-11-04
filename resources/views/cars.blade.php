@extends('app.master')
@section('title','Cars')

@section('content')

    <form action="/cars" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name..">
        <input type="text" name="color" placeholder="Color..">
        <input type="number" name="price" placeholder="Price..">
        <input type="file" name="img">
        <select name="categories_id" id="">
            @foreach($carsCateg as $cars)
            <option value="{{$cars->id}}">{{$cars->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Save">
    </form>


@endsection
