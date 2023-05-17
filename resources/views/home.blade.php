@extends('layouts/main')

@section('content')
  <main class="comics py-5 bg-dark text-white">
    <div class="container">
        <div class="row justify-content-center">

          @foreach ($comics as $item)

            <div class="col-2 mb-4">
                  <div class="card bg-secondary text-center h-100">

                    <a href="{{ route('comics.show', $item->id) }}" class="text-white">
                      <img src="{{$item->thumb}}" class="card-img-top" alt="comic image">
                      <div class="card-body">
                          <h5 class="card-title">{{$item->title}}</h5>
                      </div>
                    </a>

                  </div>
            </div>

          @endforeach

        </div>
    </div>
  </main>
@endsection