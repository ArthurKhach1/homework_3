@extends('app.master')
@section('title','All Products')

@section("content")

    @include('includes.massages')
        <h1>All products list</h1>
        @if($status)
        <a href="/saveprod"><button class="danger">Creat Products</button></a>
        @endif


        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Time</th>

            </tr>
            </thead>
            @foreach($prods as $prod)


                <tbody>
                    <tr>
                        <td >{{$prod->id}}</td>
                        <td>{{$prod->name}}</td>
                        <td>{{$prod->price}}</td>
                        <td>{{$prod->created_at}}</td>
                    </tr>
                    </tbody>


            @endforeach
        </table>
@endsection
