@extends('layouts.cabecera')

@section('contenido')
{{-- CSS --}}
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/cabecera.css') }}">

{{-- JS --}}
<script src="{{ asset('js/contador.js') }}"></script>


<section class="index">
    <div class="index-contenido">

        <div class="bloque">
      

            <h2 class="drop-title">DROP 01 – BASIC</h2>

            <div id="contador" class="contador">
                <div><span id="cd-days">30</span><small>DÍAS</small></div>
                <div><span id="cd-hours">9</span><small>HORAS</small></div>
                <div><span id="cd-mins">45</span><small>MIN</small></div>
                <div><span id="cd-secs">3</span><small>SEG</small></div>
            </div>
        </div>
        
        <a href="{{ route('opcion', ['opcion' => 'showroom'])  }}" class="cta">SHOWROOM</a>
    </div>
</section>





@endsection
