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
    .bg-especial {
      background: #211915;
    }
  </style>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  


</head>
<body class="bg-nikkei min-h-screen flex flex-col flex-nowrap justify-center content-center  imagen bg-no-repeat bg-center bg-cover md:bg-center">

  <div class="container mx-auto w-4/5 md:w-3/5 p-4 glass shadow-lg">
    <img src="{{ asset('img/favicon.png') }}" class="w-1/5 md:w-1/6 mb-2" alt="Logo nikkei">
    <p>¡Bienvenido a Nikkei!, Gracias por tu fidelidad, te hemos obsequiado un desayuno para tu proxima visita en nikkei, solo tienes que llenar este formulario y lo tendrás disponible, recuerda presentar la tarjeta cuando te presentes.</p>
    {{-- <div id="qrcode"></div> --}}
    <form action="{{ route('cliente.guardar_10') }}" method="post">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
        <div>
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="rounded-md block mt-1 w-full">
        </div>
        <div>
          <label for="dui">Dui</label>
          <input type="text" name="dui" id="dui" class="rounded-md block mt-1 w-full">
        </div>
        <div>
          <label for="correo">Correo</label>
          <input type="text" name="correo" id="correo" class="rounded-md block mt-1 w-full">
        </div>
        <div>
          <input type="hidden" value="Desayuno Gratis" name="descuento" id="descuento" class="rounded-md block mt-1 w-full">
          <button class="mt-4 px-4 py-2 rounded-md bg-red-500 text-white">Guardar</button> 
        </div> 
      </div>
    </form>
  </div> 
</body>
</html>