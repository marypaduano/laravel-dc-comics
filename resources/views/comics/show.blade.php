@extends('layouts.app')

@section('content')

<div class="container py-4 justify-content-center">
  <h1>{{ $comic->title }}</h1>
</div>

<div class="container flex-column">
  <img src="{{ $comic->thumb }}" alt="" class="py-4">
  <p class="p-3">{!! $comic->description !!}</p>
  <div>
  <button>
    <a class="btn btn-primary btn-lg" href="{{ route('comics.index') }}">Torna all'indice</a>
  </button>
</div>
</div>

    
@endsection
