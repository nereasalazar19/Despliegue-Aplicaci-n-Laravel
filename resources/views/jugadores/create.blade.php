@extends('layouts.app')

@section('title', 'Crear Jugador')

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Crear Jugador</h1>

<form action="{{ route('jugadores.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
    @csrf
    <div class="mb-4">
        <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom:</label>
        <input type="text" name="nom" id="nom" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="equip" class="block text-sm font-medium text-gray-700 mb-1">Equip:</label>
        <input type="text" name="equip" id="equip" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="posicio" class="block text-sm font-medium text-gray-700 mb-1">Posició:</label>
        <input type="text" name="posicio" id="posicio" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <button type="submit" class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-lg shadow hover:bg-blue-600 focus:ring focus:ring-blue-300">
        Crear Jugador
    </button>
</form>
@endsection
