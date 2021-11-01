@extends('app.master')
@section('title','login')

@section("content")

    @include('includes.massages')

    <h1>All users list</h1>

@foreach($users as $user)
    <div>
        <ul>
            <li>{{$user->upperName()}}</li>
            <li>{{$user->email}}</li>
            <li>{{$user->created_at}}</li>

        </ul>
    </div>
    <hr>
<div>{{$user->img_path}}

</div>
@endforeach

@endsection
