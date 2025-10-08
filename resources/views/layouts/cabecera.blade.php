<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KASHMIR</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  {{-- CSS global --}}
  <link rel="stylesheet" href="{{ asset('css/cabecera.css') }}">
  @stack('styles')
</head>
<body>

  {{-- TOPBAR con logo centrado --}}
  <header class="topbar">
    <nav class="left">
      <a href="{{ route('opcion', ['opcion' => 'home']) }}">SHOP ALL</a>
    </nav>

    <div class="center">
      <a href="{{ route('index') }}" class="logo">KASHMIR</a>
    </div>

    <div class="right">
      <a href="{{ route('opcion', ['opcion' => 'login']) }}">USER</a>
      <a href="{{ route('opcion', ['opcion' => 'carrito']) }}" class="cart-indicator">
        CARRITO
        <span class="cart-count">0</span>
      </a>
    </div>
  </header>

  {{-- Contenido de página --}}
  <main class="page">
    @yield('contenido')
  </main>

  <script>
    // Efecto de scroll en la cabecera
    window.addEventListener('scroll', function() {
      const topbar = document.querySelector('.topbar');
      if (window.scrollY > 50) {
        topbar.classList.add('scrolled');
      } else {
        topbar.classList.remove('scrolled');
      }
    });
  </script>

  @stack('scripts')
</body>
</html>