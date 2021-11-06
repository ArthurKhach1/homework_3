@extends('app.master')

@section('title','Photo')

@section('content')

    <form action="list" method="post" enctype="multipart/form-data">
        @csrf

        <input type="file" name="image">
{{--        <input type="texxt" value="Save">--}}
        <input type="submit" value="Save">
    </form>
@endsection
