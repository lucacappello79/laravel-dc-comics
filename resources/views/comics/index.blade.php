@extends('layouts/main')

@section('content')

<main class="comic-list">
<div class="container">
  <table class="table table-dark table-striped">
      <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Type</th>
              <th scope="col">Series</th>
              <th scope="col">Sale Date</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($comics as $item)
              <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->title}}</td>
                  <td>{{$item->type}}</td>
                  <td>{{$item->series}}</td>
                  <td>{{$item->sale_date}}</td>
                  <td>{{$item->price}}</td>
                  <td>
                      <a href="{{route('comics.show', ['comic' => $item->id])}}" class="btn btn-primary">View</a>
                      <a href="{{route('comics.edit', ['comic' => $item->id])}}" class="btn btn-warning">Edit</a>

                      <form method="POST" action="{{route('comics.destroy', ['comic' => $item->id])}}"  class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Confermi di voler cancellare questo elemento dalla libreria? Questa azione non è reversibile')">Delete</button>
                      </form>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>

</div>
<section class="text-center">
    <a href="{{route('comics.create')}}" class="btn btn-success">Add New Comic</a>
</section>

</main>


@endsection