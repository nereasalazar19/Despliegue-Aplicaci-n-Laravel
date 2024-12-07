@extends('layouts.app')

@section('title', 'Crear Partido')

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Crear Partido</h1>

<form action="{{ route('partits.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
    @csrf  <!-- Directiva para proteger el formulario -->
    
    <div class="mb-4">
        <label for="local" class="block text-sm font-medium text-gray-700 mb-1">Equipo Local:</label>
        <input type="text" name="local" id="local" value="{{ old('local') }}" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="visitant" class="block text-sm font-medium text-gray-700 mb-1">Equipo Visitante:</label>
        <input type="text" name="visitant" id="visitant" value="{{ old('visitant') }}" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="data" class="block text-sm font-medium text-gray-700 mb-1">Fecha:</label>
        <input type="date" name="data" id="data" value="{{ old('data') }}" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="resultat" class="block text-sm font-medium text-gray-700 mb-1">Resultado:</label>
        <input type="text" name="resultat" id="resultat" value="{{ old('resultat') }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <button type="submit" class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-lg shadow hover:bg-blue-600 focus:ring focus:ring-blue-300">
        Crear Partido
    </button>
</form>
@endsection
