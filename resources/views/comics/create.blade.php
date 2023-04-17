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
        <input type="text" class="form-control" id="title" name="title" >
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="type" name="description" >
      </div>

      <div class="mb-3">
        <label for="src" class="form-label">Immagine (url)</label>
        <input type="text" class="form-control" id="src" name="thumb" >
      </div>

      <button type="submit" class="btn btn-primary">Salva</button>


    </form>
  </div>
    
@endsection