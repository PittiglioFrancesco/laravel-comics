@extends('layout.app')
@section('title', 'pagina comics')

@section('content')
    <h1>Questa è la pagina dei comics</h1>
    @dd($fumetti)

    <div class="container">
        <div class="card-container">
            @foreach($fumetti as $fumetto)
            <div class="card">
                <img src="{{ $formato['thumb'] }}" alt="{{ $formato['title'] }}">
                <div class="layover"><h2><a href=""> {{ $formato['title'] }} </a></h2></div>
            </div>
            @endforeach
        </div>
    </div>

@endsection