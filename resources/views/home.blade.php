@extends('layouts.cabecera')
 
@section('contenido')
{{-- CSS --}}
<link rel="stylesheet" href="{{ asset('css/cabecera.css') }}">

<h1>HOME</home>

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<main class="page">
    <h1>HOME</h1>
    <p>Bienvenido a Kashmir</p>

    <section class="plan-options">
        <div class="plan-card plan-basic">
            <a href="{{ route('opcion', ['opcion' => 'basic']) }}" class="plan-link">
                <h2>Basic</h2>
                <p>Explora las opciones de nuestro plan Basic.</p>
            </a>
        </div>

        <div class="plan-card plan-esencial">
            <a href="{{ route('opcion', ['opcion' => 'esencial']) }}" class="plan-link">
                <h2>Esencial</h2>
                <p>Descubre lo que incluye el plan Esencial.</p>
            </a>
        </div>

        <div class="plan-card plan-especial">
            <a href="{{ route('opcion', ['opcion' => 'especial']) }}" class="plan-link">
                <h2>Especial</h2>
                <p>Conoce todos los beneficios del plan Especial.</p>
            </a>
        </div>
    </section>
</main>

@endsection
 