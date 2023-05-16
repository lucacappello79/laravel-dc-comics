
@extends('layouts/main')

@section('content')
<main class="comics">

  <div class="container">
    <div class="row">

      @foreach ($comics as $item)

        <div class="col-2 card-wrapper text-center">
            <div class="card">
                <img src="{{$item['thumb']}}" alt="fnf">
                <div class="title">
                    {{$item['title']}}
                </div>
            </div>
        </div>

      @endforeach

    </div>
  </div>
</main>
@endsection