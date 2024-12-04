<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estadi;

class EstadiController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $estadis = Estadi::paginate(10);
        return view('estadis.index', compact('estadis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $estadis = Estadi::all();
        return view('estadis.create', compact('estadis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'nom' => 'required|unique:equips',
            'ciutat' => 'required|exists:estadis,id',
            'capacitat' => 'required|integer|min:0',
            
        ]);
        Estadi::create($validated);
        return redirect()->route('estadis.index')->with('success', 'Estadi creat correctament!');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Estadi $estadi) {
        return view('estadis.show', compact('estadi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estadi $estadi) {
        $estadis = Estadi::all();
        return view('estadis.edit', compact('estadis', 'equip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $validated = $request->validate([
            'nom' => 'required|unique:equips,nom,'.$id,
            'ciutat' => 'required|exists:estadis,id',
            'capacitat' => 'required|integer|min:0',
            
        ]);
        $equip = Estadi::findOrFail($id);
        $equip->update($validated);
        return redirect()->route('estadis.index')->with('success', 'Estadi actualitzat correctament!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estadi $estadi) {
        $estadi->delete();
        return redirect()->route('estadi.index')->with('success', 'Estadi esborrat correctament!');
    }
}
