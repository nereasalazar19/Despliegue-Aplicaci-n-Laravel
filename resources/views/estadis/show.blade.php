@extends('layouts.app')
@section('title', "Guia d'Estadis" )
@section('content')
<x-estadi
   :nom="$estadi['nom']"
   :ciutat="$estadi['ciutat']"
   :capacitat="$estadi['capacitat']"
   :equip="$estadi['equip_principal']"
/>
@endsection 