@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Nuova Comic</h1>
  </div>

  <div class="container">
    <form action="{{ route('comics.store') }}" method="POST">

      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description">
      </div>

      <div class="mb-3">
        <label for="src" class="form-label">Immagine (url)</label>
        <input type="text" class="form-control" id="src" name="thumb">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series">
      </div>

      <div class="mb-3">
        <label for="sale-date" class="form-label">Data di Uscita</label>
        <input type="text" class="form-control" id="sale-date" name="sale_date">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipo Comic</label>
        <input type="text" class="form-control" id="type" name="type">
      </div>

      <button type="submit" class="btn btn-primary">SALVA</button>


    </form>
  </div>
    
@endsection