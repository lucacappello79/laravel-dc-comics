{{-- @extends('layouts.main')

@section('content')

<main>


  <form class="text-white" action="{{route('comics.store')}}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="title">Titolo</label>
      <input type="text" id="title" name="title">
    </div>

    <div class="mb-3">
      <label for="description">Descrizione</label>
      <textarea id="description" name="description"></textarea>
    </div>

    <div class="mb-3">
      <label for="type">Tipo</label>
      <input type="text" id="type" name="type">
    </div>

    <div class="mb-3">
      <label for="src">Link immagine</label>
      <input type="text" id="src" name="src">
    </div>

    <div class="mb-3">
      <label for="cooking_time">Serie</label>
      <input type="text" id="cooking_time" name="cooking_time">
    </div>

    <div class="mb-3">
      <label for="weight">Prezzo</label>
      <input type="text" id="weight" name="weight">
    </div>

    <button class="btn btn-primary" type="submit">Aggiungi</button>
  </form>

</main>

@endsection --}}

@extends('layouts.main')

@section('content')

<main class="create-main container-fluid text-white py-4">
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="create-card">
        <div class="card-header">
          <h5 class="card-title">Aggiungi Fumetto</h5>
        </div>
        <div class="card-body">
          <form class="text-white" action="{{ route('comics.store') }}" method="POST" class="text-dark">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Descrizione</label>
              <textarea id="description" name="description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
              <label for="type" class="form-label">Tipo</label>
              <input type="text" id="type" name="type" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="src" class="form-label">Link immagine</label>
              <input type="text" id="src" name="src" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="series" class="form-label">Serie</label>
              <input type="text" id="series" name="series" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="price" class="form-label">Prezzo</label>
              <input type="text" id="price" name="price" class="form-control" required>
            </div>

            <div class="d-grid">
              <button class="btn btn-primary" type="submit">Aggiungi</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection