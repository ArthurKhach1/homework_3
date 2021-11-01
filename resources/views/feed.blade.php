@extends('app.master')

@section('title','feed')
@section('content')
<body>
<h1>Hello {{Auth::user()->name}}</h1>
<div>
    @foreach($products as $product)
        <ul>
            <li>{{$product->name}}</li>
            <li>{{$product->price}}</li>
        </ul>
    @endforeach
</div>

@endsection

