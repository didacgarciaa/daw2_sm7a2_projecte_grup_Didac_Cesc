<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use App\Models\Equip;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index()
    {
        $jugadors = Jugador::all();
        return view('jugadors.index', compact('jugadors'));
    }

    public function show(Jugador $jugador)
    {
        return view('jugadors.show', compact('jugador'));
    }

    public function create()
    {
        $equips = Equip::all();
        return view('jugadors.create', compact('equips'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'correu' => 'required|email|max:255',
            'adreca' => 'required|string|max:255',
            'ciutat' => 'required|string|max:255',
            'districte' => 'required|string|max:255',
            'telefon' => 'required|string|max:255',
            'equip' => 'required|exists:equips,identificador',
        ]);

        Jugador::create($request->all());
        return redirect()->route('jugadors.index')->with('success', 'Jugador creat correctament.');
    }

    public function edit(Jugador $jugador)
    {
        $equips = Equip::all();
        return view('jugadors.edit', compact('jugador', 'equips'));
    }

    public function update(Request $request, Jugador $jugador)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'correu' => 'required|email|max:255',
            'adreca' => 'required|string|max:255',
            'ciutat' => 'required|string|max:255',
            'districte' => 'required|string|max:255',
            'telefon' => 'required|string|max:255',
            'equip' => 'required|exists:equips,identificador',
        ]);

        $jugador->update($request->all());
        return redirect()->route('jugadors.index')->with('success', 'Jugador actualitzat correctament.');
    }

    public function destroy(Jugador $jugador)
    {
        $jugador->delete();
        return redirect()->route('jugadors.index')->with('success', 'Jugador eliminat correctament.');
    }
}