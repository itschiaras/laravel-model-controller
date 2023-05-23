@extends('layouts.app')

@section('content')
<section class="container">
    <div class="d-flex flex-column align-items-center mb-5">
        <h1>{{ $movie->title }}</h1>
        <img src="{{ $movie->image }}" alt="{{ $movie->title }}" class="w-25">
    </div>
    <div class="pb-5">
        <h3>Trama:</h3>
        <p>{{ $movie->plot }}</p>
        <h3>Data di uscita:</h3>
        <p>{{$movie->date}}</p>
        <h3>Voto degli utenti:</h3>
        <p>{{$movie->vote}}</p>
    </div>


</section>
@endsection
