@section('title', 'Comics')

@extends('layouts.main')

@section('main-content')
    <!-- LOgica Card -->
    <div>
        <a href="{{ route('comics.create') }}" class="btn btn-success">Crea Card</a>
    </div>
    <div class="cards-box">
        <!-- COMPONENTE CARD + LOGICA CREAZIONE CARD -->
        @foreach ($comics as $comic)
            <div class="cards">
                <a href="{{ route('comics.show', $comic) }}"> <img src="{{ $comic['thumb'] }}" alt=""></a>
                <h3>{{ $comic['title'] }}</h3>
                <h6>{{ $comic['series'] }}</h6>
                <p>{{ $comic['price'] }}</p>

            </div>
        @endforeach
    </div>
@endsection
