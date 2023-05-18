@extends('layouts.main')

@section('content')

<main class="create-main container-fluid text-white py-4">
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="create-card">
        <div class="card-header">
          <h5 class="card-title pb-3 text-center">Modifica fumetto</h5>
        </div>
        <div class="card-body">
          <form class="text-white" action="{{route('comics.update', $comic->id)}}" method="POST" class="text-dark">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              {{-- value="{{$comic->title}}" --}}
              <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"" value="{{old('title') ?? $comic->title}}" required>

              @error('title')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Descrizione</label>
              <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"" required>
                {{-- {{$comic->description}} --}}
                {{old('description') ?? $comic->description}}
              </textarea>

              @error('description')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="type" class="form-label">Tipo</label>
              <input type="text" id="type" name="type" class="form-control @error('type') is-invalid @enderror"" value="{{old('type') ?? $comic->type}}" required>

              @error('type')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="thumb" class="form-label">Link immagine</label>
              <input type="text" id="thumb" name="thumb" class="form-control @error('thumb') is-invalid @enderror"" value="{{old('thumb') ?? $comic->thumb}}" required>
            
              @error('thumb')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="series" class="form-label">Serie</label>
              <input type="text" id="series" name="series" class="form-control @error('series') is-invalid @enderror"" value="{{old('series') ?? $comic->series}}" required>
            
              @error('series')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="price" class="form-label">Prezzo</label>
              <input type="text" id="price" name="price" class="form-control @error('price') is-invalid @enderror"" value="{{old('price') ?? $comic->price}}" required>
            
              @error('price')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="d-grid">
              <button class="btn btn-primary" type="submit">Modifica</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection