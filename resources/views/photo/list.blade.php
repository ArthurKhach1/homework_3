@extends('app.master')

@section('title','Photo List')

@section('content')

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo Name</th>
            <th scope="col">Time</th>

        </tr>
        </thead>
        @foreach($data as $img)


            <tbody>
            <tr>
                <td >{{$img->id}}</td>
                <td >{{$img->name}}</td>
                <td>{{$img->created_at}}</td>
            </tr>
            </tbody>


        @endforeach
    </table>


@endsection
