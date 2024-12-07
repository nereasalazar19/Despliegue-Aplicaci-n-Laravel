@extends('layouts.app')

@section('title', 'Listado de Partidos')

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Listado de Partidos</h1>

@if(session('success'))
<div class="bg-green-500 text-white p-3 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<a href="{{ route('partits.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Crear Nuevo Partido</a>

<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr class="bg-gray-100">
            <th class="px-3 py-1">Local</th>
            <th class="px-3 py-1">Visitante</th>
            <th class="px-2 py-2">Fecha</th>
            <th class="px-4 py-2">Resultado</th>
            <th class="px-5 py-2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($partits as $partit)
        <tr class="border-b">
            <td class="px-3 py-1">{{ $partit->local }}</td>
            <td class="px-3 py-1">{{ $partit->visitant }}</td>
            <td class="px-2 py-2">{{ $partit->data }}</td>
            <td class="px-4 py-2">
                @if($partit->resultat)
                {{ $partit->resultat }}
                @else
                <span class="text-gray-500">Pendiente</span>
                @endif
            </td>
            <td class="px-5 py-2">
                <a href="{{ route('partits.show', $partit->id) }}" class="text-green-600 hover:underline">Mostrar</a>
                <a href="{{ route('partits.edit', $partit->id) }}" class="text-yellow-600 hover:underline">Editar</a>
                <form action="{{ route('partits.destroy', $partit->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">Esborrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $partits->links() }}
@endsection