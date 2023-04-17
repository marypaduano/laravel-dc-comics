@extends('layouts.app')

@section('content')

<div class="container py-4">
  <button>
    <a href="{{ route('home') }}">Home Page</a>
  </button>
</div>

<div class="container py-4">
  <h1>{{ $comic->title }}</h1>
</div>

<div class="container">
  <img src="{{ $comic->thumb }}" alt="" class="py-4">
  <p>{!! $comic->description !!}</p>
  <div>
  <button>
    <a href="{{ route('comics.index') }}">Torna all'indice</a>
  </button>
</div>
</div>

    
@endsection
