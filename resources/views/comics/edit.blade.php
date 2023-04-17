@extends('layouts.app')

@section('content')


  <div class="container">
    <h1>Modifica: {{ $comic->title }}</h1>
  </div>

  <div class="container">
    <form action="{{ route('comics.update',$comic) }}" method="POST">

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description}}" >
      </div>

      <div class="mb-3">
        <label for="src" class="form-label">Immagine (url)</label>
        <input type="text" class="form-control" id="src" name="thumb" value="{{ $comic->thumb }}">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price}}" >
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series}}" >
      </div>

      <div class="mb-3">
        <label for="sale-date" class="form-label">Data di Uscita</label>
        <input type="text" class="form-control" id="sale-date" name="sale_date" value="{{ $comic->sale_date}}" >
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipo Comic</label>
        <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type}}" >
      </div>

      

      <button type="submit" class="btn btn-primary">CREA E SALVA</button>


    </form>
  </div>
    
@endsection