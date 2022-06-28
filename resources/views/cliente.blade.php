<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    @font-face {
      font-family: Mojita;
      src: url( {{ asset('fonts/Mojita.ttf') }} );
    }
  </style>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body class="bg-nikkei">

  <div class="container mx-auto w-4/5">
    <img src="{{ asset('img/logo-nikkei-png.png') }}" class="w-4/5 mx-auto" alt="Logo nikkei">
    <h1 class="text-center text-white text-3xl md:text-6xl font-bold mb-3 font-popi">¡Bienenido Daniel Antonio Sánchez Romero!</h1>
    <p class="text-white font-popi">En Nikkei siempre pensamos en ti por lo que te invitamos a disfrutas en nuestros restaurantes un descuento de:</p>
    <p class="text-white font-popi text-6xl text-center p-8">20%</p>
    <p class="text-white font-popi">En el consumo del menú a precio regular.</p> 
  </div> 

  



  
</body>
</html>