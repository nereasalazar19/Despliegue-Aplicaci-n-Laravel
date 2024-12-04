@extends('layouts.app')
@section('title', "Llistat d'Estadis")
@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Guia d'Estadis</h1>
<h2><a href="{{ route('estadis.create') }}" class="text-red-600 hover:underline">Crear un nou estadi</a></h2>

<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
        <tr>
            <th class="border border-gray-300 p-2">Nom</th>
            <th class="border border-gray-300 p-2">Ciutat</th>
            <th class="border border-gray-300 p-2">Capacitat</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($estadis as $key => $estadi)
        <tr class="hover:bg-gray-100">
            <td class="border border-gray-300 p-2">
                <a href="{{ route('estadis.show', $key) }}" class="text-blue-700 hover:underline">{{ $estadi['nom'] }}</a>
            </td>
            <td class="border border-gray-300 p-2">{{ $estadi['ciutat'] }}</td>
            <td class="border border-gray-300 p-2">{{ $estadi['capacitat'] }}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
{{ $estadis->links() }}
@endsection
