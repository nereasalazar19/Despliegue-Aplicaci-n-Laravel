@extends('layouts.app')
@section('title', "Crear un nou estadi")
@section('content')
<form action="{{ route('estadis.store') }}" method="POST" class="max-w-md mx-auto p-4 bg-gray-100 rounded shadow">
    @csrf
    <h2 class="text-xl font-bold mb-4">Afegir un nou estadi</h2>

    <!-- Nom de l'estadi -->
    <div class="mb-4">
        <label for="nom" class="block text-gray-700 font-medium mb-2">Nom de l'Estadi</label>
        <input 
            type="text" 
            id="nom" 
            name="nom" 
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200" 
            placeholder="Escriu el nom de l'estadi" 
            required>
    </div>

    <!-- Ciutat -->
    <div class="mb-4">
        <label for="ciutat" class="block text-gray-700 font-medium mb-2">Ciutat</label>
        <input 
            type="text" 
            id="ciutat" 
            name="ciutat" 
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200" 
            placeholder="Escriu la ciutat" 
            required>
    </div>

    <!-- Capacitat -->
    <div class="mb-4">
        <label for="capacitat" class="block text-gray-700 font-medium mb-2">Capacitat</label>
        <input 
            type="number" 
            id="capacitat" 
            name="capacitat" 
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200" 
            placeholder="Escriu la capacitat" 
            required>
    </div>

    <!-- Botó d'enviament -->
    <div class="flex justify-end">
        <button 
            type="submit" 
            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
            Desa
        </button>
    </div>
</form>
@endsection