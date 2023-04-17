@extends('layouts.app')

@section('content')

<div class="container py-4">
  <button>
    <a href="{{ route('home') }}">Home Page</a>
  </button>
</div>

<div>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">COPERTINA</th>
          <th scope="col">TITOLO</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)          
          <tr>
            <td>
              {{ $comic->id }}
            </td>
            <th scope="row">
              <img src="{{ $comic->thumb }}" alt="" height="180">
            </th>
            <td>
              <a href="{{ route('comics.show',$comic->id) }}">
                <strong>{{ $comic->title }}</strong>
              </a>
            </td>
            
            <td>
              <a class="btn btn-primary btn-sm" href="{{ route('comics.create') }}">CREA</a>
            </td>
            <td>
              <!-- <a class="btn btn-primary btn-sm" href="#">EDIT</a> -->
            </td>
          </tr>
              
        @endforeach 
      </tbody>
    </table>
  </div>
</div>