@extends('layouts.app')

@section('content')

<!-- //link per accedere -->
<div class="container">
    <div class="row py-5">
        <div class="col d-flex justify-content-center">
            <h1>DC COMICS</h1>            
        </div>
        <div class="col">
            <button>
                <a href="{{ route('comics.index') }}">Scopri le nostre comics</a>
            </button>        
        </div>

    </div>
</div>

@endsection