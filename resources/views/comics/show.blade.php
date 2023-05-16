@extends('layouts/main')


@section('content')

<main class="text-center">
  <img src="{{$comic->thumb}}" alt="fnf">

  <hr>

  <h1>{{$comic->title}}</h1>

  <ul class="text-center">
    <li>
      {{$comic->type}}
    </li>
    <li>
      {{$comic->price}}
    </li>
    <li>
      {{$comic->series}}
    </li>
  </ul>

  <p>
    {{$comic->description}}
  </p>
</main>

@endsection