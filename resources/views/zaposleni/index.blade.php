@extends('layouts.app')

@section('content')
    @php
        $selectedId = request('selected');
        $selectedEmployee = $zaposleni->firstWhere('id', (int) $selectedId);
    @endphp

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <div class="header-box">
        <div class="header-top">
            <div class="title-with-logo">
    <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo">
    <h1>HR evidencija</h1>
</div>

            <div class="header-actions">
                <a href="{{ route('zaposleni.create') }}" class="btn btn-primary">Dodaj zaposlenog</a>

                @if($selectedEmployee)
                    <a href="{{ route('zaposleni.show', $selectedEmployee->id) }}" class="btn btn-secondary">Prikaži</a>
                    <a href="{{ route('zaposleni.edit', $selectedEmployee->id) }}" class="btn btn-warning">Uredi</a>

                    <form action="{{ route('zaposleni.destroy', $selectedEmployee->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Da li sigurno želiš obrisati zapis?')">
                            Obriši
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Email</th>
                <th>Pozicija</th>
                <th>Stručna sprema</th>
                <th>Odjeljenje</th>
                <th>Datum zaposlenja</th>
            </tr>
        </thead>

        <tbody>
            @forelse($zaposleni as $z)
                <tr 
                    onclick="window.location='{{ route('zaposleni.index', ['selected' => $z->id]) }}'"
                    style="cursor:pointer;"
                    class="{{ $selectedId == $z->id ? 'selected' : '' }}"
                >
                    <td>{{ $z->id }}</td>
                    <td>{{ $z->ime }}</td>
                    <td>{{ $z->prezime }}</td>
                    <td>{{ $z->email }}</td>
                    <td>{{ $z->pozicija }}</td>
                    <td>{{ $z->strucnasprema }}</td>
                    <td>{{ $z->odjeljenje }}</td>
                    <td>{{ $z->datum_zaposlenja }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="text-align:center;">
                        Nema unesenih zaposlenih.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection