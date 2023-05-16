@extends('layouts/main')

@section('content')

<main class="comic-list">

  <div class="row">
  
    @foreach ($comics as $item)
      <div class="col-4 comic-card">
  
        <a href="{{route('comics.show', $item->id)}}" class="comic-card-inner">
          <img src="{{$item->thumb}}" alt="fnf">
          {{$item->title}}
        </a>

      </div>
    @endforeach
  
  </div>

</main>


<section>
  <a href="{{route('comics.create')}}">Add</a>
</section>


@endsection