@extends('app.master')
@section('title', 'Cars List')

@section('content')
    <h1>All cars list</h1>

        <a href="/cars"><button class="danger">Add Car</button></a>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Cars Name</th>
            <th scope="col">User Name</th>
            <th scope="col">Color</th>
            <th scope="col">Price</th>
            <th scope="col">Time</th>

        </tr>
        </thead>
        @foreach($car as $cars)


            <tbody>
            <tr>
                <td >{{$cars->id}}</td>
                <td >{{$cars->name}}</td>
                <td >{{$cars->user->name}}</td>
                <td>{{$cars->color}}</td>
                <td>{{$cars->price}}</td>
                <td>{{$cars->created_at}}</td>
            </tr>
            </tbody>

        @endforeach
    </table>
@endsection
