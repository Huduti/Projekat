<?php

namespace App\Http\Controllers;

use App\Models\Zaposleni;
use Illuminate\Http\Request;

class ZaposleniController extends Controller
{
    public function index()
    {
        $zaposleni = Zaposleni::latest()->get();
        return view('zaposleni.index', compact('zaposleni'));
    }

    public function create()
    {
        return view('zaposleni.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'email' => 'required|email|unique:zaposlenis,email',
            'pozicija' => 'required|string|max:255',
            'strucnasprema' => 'required|string|max:255',
            'odjeljenje' => 'required|string|max:255',
            'datum_zaposlenja' => 'required|date',
        ]);

        Zaposleni::create($validated);

        return redirect()
            ->route('zaposleni.index')
            ->with('success', 'Uposlenik je uspješno dodan.');
    }

    public function show(Zaposleni $zaposleni)
    {
        return view('zaposleni.show', compact('zaposleni'));
    }

    public function edit(Zaposleni $zaposleni)
    {
        return view('zaposleni.edit', compact('zaposleni'));
    }

    public function update(Request $request, Zaposleni $zaposleni)
    {
        $validated = $request->validate([
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'email' => 'required|email|unique:zaposlenis,email,' . $zaposleni->id,
            'pozicija' => 'required|string|max:255',
            'strucnasprema' => 'required|string|max:255',
            'odjeljenje' => 'required|string|max:255',
            'datum_zaposlenja' => 'required|date',
        ]);

        $zaposleni->update($validated);

        return redirect()
            ->route('zaposleni.index')
            ->with('success', 'Uposlenik je uspješno ažuriran.');
    }

    public function destroy(Zaposleni $zaposleni)
    {
        $zaposleni->delete();

        return redirect()
            ->route('zaposleni.index')
            ->with('success', 'Uposlenik je uspješno obrisan.');
    }
}
