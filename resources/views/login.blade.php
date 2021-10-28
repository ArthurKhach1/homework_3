@extends('app.master')
@section('title','login')

@section("content")

@include('includes.massages')
    <h1>Login</h1>

        <form action="/login" method="post" >
            @csrf
            <div>
                    <input type="email" name="email" placeholder="Email.." >
            </div>
            <div>
                    <input type="password" name="password" placeholder="Password">
            </div>
            <div>
                <input type="submit" value="Log in">
            </div>
        </form>

@endsection
