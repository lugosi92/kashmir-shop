@extends('layouts.cabecera')

@section('contenido')
{{-- CSS --}}
<link rel="stylesheet" href="{{ asset('css/cabecera.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">



<main class="page">
    <h1>registro</h1>
    <p>Bienvenido a Kashmir</p>
</main>

<div class="register-link">
    <h4>No tienes cuenta, <a href="{{ route('login') }}">regístrate</a></h4>
</div>


@endsection
