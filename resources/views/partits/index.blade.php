@extends('layouts.app')
@section('title', "Llistat de Partits")
@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Llistat de Partits</h1>
<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
        <tr>
            <th class="border border-gray-300 p-2">Equip Local</th>
            <th class="border border-gray-300 p-2">Equip Visitant</th>
            <th class="border border-gray-300 p-2">Data</th>
            <th class="border border-gray-300 p-2">Resultat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($partits as $key => $partit)
        <tr class="hover:bg-gray-100">
            <td class="border border-gray-300 p-2">{{ $partit['local'] }}</td>
            <td class="border border-gray-300 p-2">{{ $partit['visitant'] }}</td>
            <td class="border border-gray-300 p-2">{{ $partit['data'] }}</td>
            <td class="border border-gray-300 p-2">
                @if($partit['resultat'])
                    {{ $partit['resultat'] }}
                @else
                    <span class="text-gray-500">Pendent</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
