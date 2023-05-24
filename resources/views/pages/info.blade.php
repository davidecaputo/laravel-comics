@extends('layouts.app')

@section('content')
<div class="container py-5 d-flex justify-content-center">
    <div class="card w-50">
        <img src="{{ $comic['image'] }}" alt="">
        <div class="card-body bg-black text-white">
            <p>{{ $comic['title'] }}</p>
            <p>{{$comic['description']}}</p>
            <a href="{{$comic['thumb']}}">{{$comic['thumb']}}</a>
            <p>{{$comic['price']}}</p>
            <p>{{$comic['type']}}</p>
        </div>
    </div>
    <img src="images/jumbotron.jpg" alt="">
</div>
@endsection
