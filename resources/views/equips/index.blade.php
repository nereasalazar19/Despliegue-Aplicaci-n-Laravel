@extends('layouts.app')

@section('title', "Guia d'Equips")

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Guia d'Equips</h1>
<h2><a href="{{ route('equips.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Crear un nou equip</a></h2>
<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
    <tr>
        <th class="border border-gray-300 p-2">Nom</th>
        <th class="border border-gray-300 p-2">Estadi</th>
        <th class="border border-gray-300 p-2">Títols</th>
        <th class="border border-gray-300 p-2">Accions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($equips as $equip)
    <tr class="hover:bg-gray-100">
        <td class="border border-gray-300 p-2">
            <a href="{{ route('equips.show', $equip->id) }}" class="text-blue-700 hover:underline">{{ $equip->nom }}</a>
        </td>
        <td class="border border-gray-300 p-2">{{ $equip->estadi->nom }}</td>
        <td class="border border-gray-300 p-2">{{ $equip->titols }}</td>
        <td class="border border-gray-300 p-2 flex space-x-2">
            <a href="{{ route('equips.show', $equip->id) }}" class="text-green-600 hover:underline">Mostrar</a>
            <a href="{{ route('equips.edit', $equip->id) }}" class="text-yellow-600 hover:underline">Editar</a>
            <form action="{{ route('equips.destroy', $equip->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:underline">Esborrar</button>
                
            </form>
        </td>
    </tr>
@endforeach
    </tbody>
</table>
{{ $equips->links() }}
@endsection