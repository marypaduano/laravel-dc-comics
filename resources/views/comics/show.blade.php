@extends('layouts.app')

@section('content')

<div class="container">
  <h1>{{ $comic->title }}</h1>
</div>

<div class="container">
  <img src="{{ $comic->thumb }}" alt="">
  <p>{!! $comic->description !!}</p>
</div>
    
@endsection
