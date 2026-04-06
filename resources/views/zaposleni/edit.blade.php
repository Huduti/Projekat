@extends('layouts.app')

@section('content')

<div class="form-container">
    <h1>Uredi zaposlenog</h1>

    @if($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('zaposleni.update', $zaposleni->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-grid">

            <div class="form-group">
                <label>Ime</label>
                <input type="text" name="ime" value="{{ old('ime', $zaposleni->ime) }}">
            </div>

            <div class="form-group">
                <label>Prezime</label>
                <input type="text" name="prezime" value="{{ old('prezime', $zaposleni->prezime) }}">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email', $zaposleni->email) }}">
            </div>

            <div class="form-group">
                <label>Pozicija</label>
                <input type="text" name="pozicija" value="{{ old('pozicija', $zaposleni->pozicija) }}">
            </div>

            <div class="form-group">
                <label>Stručna sprema</label>
                <input type="text" name="strucnasprema" value="{{ old('strucnasprema', $zaposleni->strucnasprema) }}">
            </div>

            <div class="form-group">
                <label>Odjeljenje</label>
                <input type="text" name="odjeljenje" value="{{ old('odjeljenje', $zaposleni->odjeljenje) }}">
            </div>

            <div class="form-group full-width">
                <label>Datum zaposlenja</label>
                <input type="date" name="datum_zaposlenja" value="{{ old('datum_zaposlenja', $zaposleni->datum_zaposlenja) }}">
            </div>

        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Sačuvaj izmjene</button>
            <a href="{{ route('zaposleni.index') }}" class="btn btn-secondary">Nazad</a>
        </div>

    </form>
</div>

@endsection
