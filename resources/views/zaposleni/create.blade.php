@extends('layouts.app')

@section('content')

<div class="form-container">
    <h1>Dodaj zaposlenog</h1>

    @if($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('zaposleni.store') }}" method="POST">
        @csrf

        <div class="form-grid">

            <div class="form-group">
                <label>Ime</label>
                <input type="text" name="ime" value="{{ old('ime') }}">
            </div>

            <div class="form-group">
                <label>Prezime</label>
                <input type="text" name="prezime" value="{{ old('prezime') }}">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label>Pozicija</label>
                <input type="text" name="pozicija" value="{{ old('pozicija') }}">
            </div>

            <div class="form-group">
                <label>Stručna sprema</label>
                <input type="text" name="strucnasprema" value="{{ old('strucnasprema') }}">
            </div>

            <div class="form-group">
                <label>Odjeljenje</label>
                <input type="text" name="odjeljenje" value="{{ old('odjeljenje') }}">
            </div>

            <div class="form-group full-width">
                <label>Datum zaposlenja</label>
                <input type="date" name="datum_zaposlenja" value="{{ old('datum_zaposlenja') }}">
            </div>

        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Sačuvaj</button>
            <a href="{{ route('zaposleni.index') }}" class="btn btn-secondary">Nazad</a>
        </div>

    </form>
</div>

@endsection
