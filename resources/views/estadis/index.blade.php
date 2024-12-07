@extends('layouts.app')

@section('title', "Guia d'Estadis")

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Guia d'Estadis</h1>
<h2><a href="{{ route('estadis.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Crear un nou estadi</a></h2>
<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
    <tr>
        <th class="border border-gray-300 p-2">Nom</th>
        <th class="border border-gray-300 p-2">Ciutat</th>
        <th class="border border-gray-300 p-2">Capacitat</th>
        <th class="border border-gray-300 p-2">Accions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($estadis as $estadi)
    <tr class="hover:bg-gray-100">
        <td class="border border-gray-300 p-2">{{ $estadi->nom }}</td>
        <td class="border border-gray-300 p-2">{{ $estadi->ciutat }}</td>
        <td class="border border-gray-300 p-2">{{ $estadi->capacitat }}</td>
        <td class="border border-gray-300 p-2 flex space-x-2">
            <a href="{{ route('estadis.show', $estadi->id) }}" class="text-green-600 hover:underline">Mostrar</a>
            <a href="{{ route('estadis.edit', $estadi->id) }}" class="text-yellow-600 hover:underline">Editar</a>
            <form action="{{ route('estadis.destroy', $estadi->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:underline">Esborrar</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
{{ $estadis->links() }}
@endsection
