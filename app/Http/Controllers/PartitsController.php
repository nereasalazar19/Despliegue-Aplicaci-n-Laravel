<?php

namespace App\Http\Controllers;

use App\Models\Partit;
use Illuminate\Http\Request;

class PartitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partits = Partit::paginate(10);
        return view('partits.index', compact('partits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'local' => 'required|string',
            'visitant' => 'required|string',
            'data' => 'required|date',
            'resultat' => 'nullable|string',
        ]);

        Partit::create($validated);

        return redirect()->route('partits.index')->with('success', 'Partit creat correctament!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partit $partit)
    {
        return view('partits.show', compact('partit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partit $partit)
    {
        return view('partits.edit', compact('partit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partit $partit)
    {
        $validated = $request->validate([
            'local' => 'required|string',
            'visitant' => 'required|string',
            'data' => 'required|date',
            'resultat' => 'nullable|string',
        ]);

        $partit->update($validated);

        return redirect()->route('partits.index')->with('success', 'Partit actualitzat correctament!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partit $partit)
    {
        $partit->delete();

        return redirect()->route('partits.index')->with('success', 'Partit esborrat correctament!');
    }
}
