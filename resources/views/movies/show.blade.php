@extends('layouts.app')

@section('content')
<section class="container d-flex flex-column align-items-center">
    <h1>{{ $movie->title }}</h1>
    <img src="{{ $movie->image }}" alt="{{ $movie->title }}" class="w-25">
    <p>{{ $movie->plot }}</p>

</section>
@endsection
