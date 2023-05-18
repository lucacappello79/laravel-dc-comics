@extends('layouts/main')

@section('content')

<main class="container-fluid  text-white">
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
                      <button class="btn btn-danger" type="submit" onclick="return confirm('Confermi di voler cancellare questo elemento dalla libreria? Questa azione non è reversibile')">Delete</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</main>

@endsection