{{-- Estensione layout app principale --}}
@extends('layouts.app')

{{-- Sezione per aggiornare title --}}
@section('titolo', 'Home | Catalogo Abbigliamento')

{{-- MAIN --}}
@section('content')
    <div class="container">
        <h1>{{$titolo}}</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia id ex, nesciunt temporibus suscipit eius libero voluptates laborum minima, architecto incidunt eligendi tempore assumenda! Non deleniti eaque voluptatem mollitia repellat!</p>
    </div>
@endsection