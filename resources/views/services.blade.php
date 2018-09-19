@extends('master')

@section('title')
    Services
@endsection

@section('content')
    <div class="container">

        <h2>Services</h2>
        <ul class="list-group">
            @foreach($items as $item)
              <li class="list-group-item">{{$item}}</li>
            @endforeach
        </ul>
    </div>
@endsection