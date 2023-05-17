{{-- @extends('layouts/main')


@section('content')

<main class="text-center text-white">
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

@endsection --}}


@extends('layouts/main')

@section('content')

<main class="container-fluid mt-5 text-white">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="comic-card text-center">
                <img src="{{$comic->thumb}}" class="comic-card-img-top" alt="fnf">
                <div class="comic-card-body">
                    <h1 class="comic-card-title text-center my-4">{{$comic->title}}</h1>
                    <hr>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">{{$comic->type}}</li>
                        <li class="list-group-item">{{$comic->price}}</li>
                        <li class="list-group-item">{{$comic->series}}</li>
                    </ul>
                    <p class="comic-card-text mt-4">{{$comic->description}}</p>
                </div>
                <div class="comic-card-footer text-center">
                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection