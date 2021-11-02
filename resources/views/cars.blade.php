@extends('app.master')
@section('title','Cars')

@section('content')

    <form action="/cars" method="post" >
        @csrf
        <input type="text" name="name" placeholder="Name..">
        <input type="text" name="color" placeholder="Color..">
        <input type="number" name="price" placeholder="Price..">
        <input type="submit" value="Save">
    </form>


@endsection
