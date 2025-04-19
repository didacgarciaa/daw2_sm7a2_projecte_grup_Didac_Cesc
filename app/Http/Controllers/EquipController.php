<?php

namespace App\Http\Controllers;

use App\Models\Equip;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class EquipController extends Controller
{
    public function index()
    {
        $equips = Equip::all();
        return view('equips.index', compact('equips'));
    }

    public function show(Equip $equip)
    {
        return view('equips.show', compact('equip'));
    }

    public function create()
    {
        return view('equips.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'localitzacio' => 'required|string|max:255',
            'entrenador' => 'required|string|max:255',
        ]);

        Equip::create($request->all());
        return redirect()->route('equips.index')->with('success', 'Equip creat correctament.');
    }

    public function edit(Equip $equip)
    {
        return view('equips.edit', compact('equip'));
    }

    public function update(Request $request, Equip $equip)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'localitzacio' => 'required|string|max:255',
            'entrenador' => 'required|string|max:255',
        ]);

        $equip->update($request->all());
        return redirect()->route('equips.index')->with('success', 'Equip actualitzat correctament.');
    }

    public function pdf($id)
    {
        $equip = Equip::with('jugadors')->findOrFail($id);
    
        $pdf = Pdf::loadView('equips.pdf', compact('equip'));
        return $pdf->download('equip_' . $equip->identificador . '.pdf');
    }
    
    public function destroy(Equip $equip)
    {
        $equip->delete();
        return redirect()->route('equips.index')->with('success', 'Equip eliminat correctament.');
    }
}