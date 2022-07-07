<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nikkei - Descuentos</title>
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />


  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    @font-face {
      font-family: Mojita;
      src: url( {{ asset('fonts/Mojita.ttf') }} );
    }
    .imagen {
      background-image: url("{{ asset('img/fondo-card.jpg') }}")
    }
  </style>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body class="bg-nikkei min-h-screen flex flex-col flex-nowrap justify-center content-center  imagen bg-no-repeat bg-center bg-cover md:bg-center">

  <div class="glass container mx-auto w-4/5 md:w-3/5 overflow-hidden shadow-xl sm:rounded-lg p-4">
    {{-- <x-jet-welcome /> --}}
    <img src="{{ asset('img/favicon.png') }}" class="w-1/5 md:w-1/6 mb-2" alt="Logo nikkei">
    <form action="{{ route('cliente.guardar') }}" method="post">
      @csrf
      <div class="grid grid-cols-1 gap-4">
        <div>
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="block mt-1 w-full rounded-lg">
        </div>
        <div>
          <label for="dui">Dui</label>
          <input type="text" name="dui" id="dui" class="block mt-1 w-full rounded-lg">
        </div>
        <div>
          <label for="correo">Correo</label>
          <input type="text" name="correo" id="correo" class="block mt-1 w-full rounded-lg">
        </div>
        <div>
          <input type="hidden" name="descuento" id="descuento" value="10">
        </div>
        <div>
          <button class="mt-4 px-4 py-2 bg-red-500 text-white rounded-lg">Registrar</button> 
        </div> 
      </div>
    </form>
  </div>

  



  
</body>
</html>