@extends('layouts.app')

@section('content')
    <h1>Detalji zaposlenog</h1>

    <p><strong>ID:</strong> {{ $zaposleni->id }}</p>
    <p><strong>Ime:</strong> {{ $zaposleni->ime }}</p>
    <p><strong>Prezime:</strong> {{ $zaposleni->prezime }}</p>
    <p><strong>Email:</strong> {{ $zaposleni->email }}</p>
    <p><strong>Pozicija:</strong> {{ $zaposleni->pozicija }}</p>
    <p><strong>Stručna sprema:</strong> {{ $zaposleni->strucnasprema }}</p>
    <p><strong>Odjeljenje:</strong> {{ $zaposleni->odjeljenje }}</p>
    <p><strong>Datum zaposlenja:</strong> {{ $zaposleni->datum_zaposlenja }}</p>

    <a href="{{ route('zaposleni.index') }}" class="btn btn-secondary">Nazad</a>
@endsection
