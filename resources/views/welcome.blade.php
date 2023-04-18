@extends('layouts.app')

@section('content')

<!-- //link per accedere -->
<div class="container d-flex justify-content-center">
    <div class="row py-5">
        <div class="col">
            <button>
                <a class="btn btn-primary btn-lg" href="{{ route('comics.index') }}">
                    LOAD MORE
                </a>
            </button>        
        </div>
    </div>
</div>

@endsection