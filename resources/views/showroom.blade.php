@extends('layouts.cabecera')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/cabecera.css') }}">
<link rel="stylesheet" href="{{ asset('css/showroom.css') }}"> {{-- nuevo css --}}

<title>Showroom</title>
<div class="showroom-wrapper">
    <img src="{{ asset('img/showroom.png') }}" alt="Showroom Kashmir" class="showroom-img">
</div>
@endsection
