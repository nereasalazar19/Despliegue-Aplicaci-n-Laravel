<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = Jugador::paginate(10);
        return view('jugadores.index', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jugadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
            'equip' => 'required|string',
            'posicio' => 'required|string',
        ]);

        Jugador::create($validated);

        return redirect()->route('jugadores.index')->with('success', 'Jugador creat correctament!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugador $jugador)
    {
        return view('jugadores.show', compact('jugador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugador $jugador)
    {
        return view('jugadores.edit', compact('jugador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugador $jugador)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
            'equip' => 'required|string',
            'posicio' => 'required|string',
        ]);

        $jugador->update($validated);

        return redirect()->route('jugadores.index')->with('success', 'Jugador actualitzat correctament!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugador $jugador)
    {
        $jugador->delete();

        return redirect()->route('jugadores.index')->with('success', 'Jugador esborrat correctament!');
    }
}
