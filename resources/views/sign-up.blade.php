@extends('app.master')
@section('title','Sign Up')

@section("content")

    @include('includes.massages')

<h1>Sign Up</h1>

<form action="/sign-up" method="post">
    @csrf
    <div>
        <input type="name" name="name" placeholder="Name..">
    </div><div>
        <input type="email" name="email" placeholder="Email..">
    </div>
    <div>
        <input type="password" name="password" placeholder="Password">
    </div>
    <div>
        <input type="submit" value="Sign up">
    </div>
</form>

@endsection
