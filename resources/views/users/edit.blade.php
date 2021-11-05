@extends('app.master')

@section('title','edit')

@section('content')

    <form action="/users" method="post">
        @method('put')
        @csrf
        <div>
            Name<input type="name" name="name" value="{{$user->name}}">
        </div>
        <div>
            Email<input type="email" name="email" value="{{$user->email}}">
        </div>
        <div>
            Password<input type="password"  name="password">
        </div>
        <div>
            <input type="submit" value="Update" >
        </div>
    </form>

@endsection()
