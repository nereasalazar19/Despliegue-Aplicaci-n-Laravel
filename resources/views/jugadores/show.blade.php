@extends('layouts.app')
@section('title', "Detall de la Jugadora")
@section('content')


<x-jugador
    :nom="$jugador['nom']"
    :equip="$jugador['equip']"
    :posicio="$jugador['posicio']"
/>
@endsection
