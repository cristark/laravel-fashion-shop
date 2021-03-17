{{-- Estensione layout app principale --}}
@extends('layouts.app')

{{-- Sezione per aggiornare title --}}
@section('titolo', 'Prodotti | Catalogo Abbigliamento')

{{-- MAIN --}}
@section('content')
    <div class="container">
        @foreach ($abiti as $abito)
            <div class="dress_box">
                <img src="{{$abito->poster}}" alt="{{$abito->titolo}}">
                <div class="spec_box">
                    <h5>{{$abito->categoria}}</h5>
                    <p>{{$abito->titolo}}</p>
                    <p class="price">€ {{$abito->prezzo}}</p>
                    <div class="option_specs">
                        <p>Colore: {{$abito->colore}}</p>
                        <p>Taglia: {{$abito->taglia}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection