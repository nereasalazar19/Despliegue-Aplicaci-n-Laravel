@extends('layouts.app')

@section('title', 'Llista de Jugadors')

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Llista de Jugadors</h1>
<h2><a href="{{ route('jugadores.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Crear un nou jugador</a></h2>
<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
        <tr>
            <th class="border border-gray-300 p-2">Nom</th>
            <th class="border border-gray-300 p-2">Equip</th>
            <th class="border border-gray-300 p-2">Posició</th>
            <th class="border border-gray-300 p-2">Accions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($jugadores as $jugador)
    <tr class="hover:bg-gray-100">
        <td class="border border-gray-300 p-2">{{ $jugador->nom }}</td>
        <td class="border border-gray-300 p-2">{{ $jugador->equip }}</td>
        <td class="border border-gray-300 p-2">{{ $jugador->posicio }}</td>
        <td class="border border-gray-300 p-2 flex space-x-2">
            <a href="{{ route('jugadores.show', $jugador->id) }}" class="text-green-600 hover:underline">Mostrar</a>
            <a href="{{ route('jugadores.edit', $jugador->id) }}" class="text-yellow-600 hover:underline">Editar</a>
            <form action="{{ route('jugadores.destroy', $jugador->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:underline">Esborrar</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

{{ $jugadores->links() }}
@endsection
