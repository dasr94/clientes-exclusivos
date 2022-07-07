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
    {{-- <div id="qrcode"></div> --}}
    <img src="{{asset('/qrcode/' . $cliente->id . "_" . $cliente->slug . '.png')}}" style="width: 100px;" alt="">
    <h1 class="text-black text-xl md:text-xl font-bold mb-3 font-popi">¡Bienvenido {{ $cliente->nombre }}!</h1>
    <p class="text-black font-popi">En Nikkei siempre pensamos en ti por lo que te invitamos a disfrutar en nuestros restaurantes un descuento de:</p>
    <p class="text-black font-popi text-6xl text-center p-4 font-bold">{{ round($cliente->descuento) }}%</p>
    <p class="text-black font-popi">En el consumo del menú a precio regular.</p> 
    <img src="{{ asset('img/logo-sm-black.png') }}" class="w-2/5 md:w-1/5 mx-auto mt-4 mb-2" alt="Logo nikkei">
    <div class="flex flex-row flex-nowrap justify-end content-end">
      <div>
        <a href="https://www.facebook.com/Nikkeielsavador"> <svg class="fill-black w-8 px-2" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z"/></svg> </a>
      </div>
      <div>
        <a href="https://www.instagram.com/nikkei_sv/">  <svg class="fill-black w-8 px-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2476 2476"><path d="M825.4 1238c0-227.9 184.7-412.7 412.6-412.7 227.9 0 412.7 184.8 412.7 412.7 0 227.9-184.8 412.7-412.7 412.7-227.9 0-412.6-184.8-412.6-412.7m-223.1 0c0 351.1 284.6 635.7 635.7 635.7s635.7-284.6 635.7-635.7-284.6-635.7-635.7-635.7S602.3 886.9 602.3 1238m1148-660.9c0 82 66.5 148.6 148.6 148.6 82 0 148.6-66.6 148.6-148.6s-66.5-148.5-148.6-148.5-148.6 66.5-148.6 148.5M737.8 2245.7c-120.7-5.5-186.3-25.6-229.9-42.6-57.8-22.5-99-49.3-142.4-92.6-43.3-43.3-70.2-84.5-92.6-142.3-17-43.6-37.1-109.2-42.6-229.9-6-130.5-7.2-169.7-7.2-500.3s1.3-369.7 7.2-500.3c5.5-120.7 25.7-186.2 42.6-229.9 22.5-57.8 49.3-99 92.6-142.4 43.3-43.3 84.5-70.2 142.4-92.6 43.6-17 109.2-37.1 229.9-42.6 130.5-6 169.7-7.2 500.2-7.2 330.6 0 369.7 1.3 500.3 7.2 120.7 5.5 186.2 25.7 229.9 42.6 57.8 22.4 99 49.3 142.4 92.6 43.3 43.3 70.1 84.6 92.6 142.4 17 43.6 37.1 109.2 42.6 229.9 6 130.6 7.2 169.7 7.2 500.3 0 330.5-1.2 369.7-7.2 500.3-5.5 120.7-25.7 186.3-42.6 229.9-22.5 57.8-49.3 99-92.6 142.3-43.3 43.3-84.6 70.1-142.4 92.6-43.6 17-109.2 37.1-229.9 42.6-130.5 6-169.7 7.2-500.3 7.2-330.5 0-369.7-1.2-500.2-7.2M727.6 7.5c-131.8 6-221.8 26.9-300.5 57.5-81.4 31.6-150.4 74-219.3 142.8C139 276.6 96.6 345.6 65 427.1 34.4 505.8 13.5 595.8 7.5 727.6 1.4 859.6 0 901.8 0 1238s1.4 378.4 7.5 510.4c6 131.8 26.9 221.8 57.5 300.5 31.6 81.4 73.9 150.5 142.8 219.3 68.8 68.8 137.8 111.1 219.3 142.8 78.8 30.6 168.7 51.5 300.5 57.5 132.1 6 174.2 7.5 510.4 7.5 336.3 0 378.4-1.4 510.4-7.5 131.8-6 221.8-26.9 300.5-57.5 81.4-31.7 150.4-74 219.3-142.8 68.8-68.8 111.1-137.9 142.8-219.3 30.6-78.7 51.6-168.7 57.5-300.5 6-132.1 7.4-174.2 7.4-510.4s-1.4-378.4-7.4-510.4c-6-131.8-26.9-221.8-57.5-300.5-31.7-81.4-74-150.4-142.8-219.3C2199.4 139 2130.3 96.6 2049 65c-78.8-30.6-168.8-51.6-300.5-57.5-132-6-174.2-7.5-510.4-7.5-336.3 0-378.4 1.4-510.5 7.5"/></svg>  </a>
      </div>
      <div>
        <a href="https://api.whatsapp.com/send?phone=50376795058">  <svg class="fill-black w-8 px-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.6,14c-0.2-0.1-1.5-0.7-1.7-0.8c-0.2-0.1-0.4-0.1-0.6,0.1 c-0.2,0.2-0.6,0.8-0.8,1c-0.1,0.2-0.3,0.2-0.5,0.1c-0.7-0.3-1.4-0.7-2-1.2c-0.5-0.5-1-1.1-1.4-1.7c-0.1-0.2,0-0.4,0.1-0.5 c0.1-0.1,0.2-0.3,0.4-0.4c0.1-0.1,0.2-0.3,0.2-0.4c0.1-0.1,0.1-0.3,0-0.4c-0.1-0.1-0.6-1.3-0.8-1.8C9.4,7.3,9.2,7.3,9,7.3 c-0.1,0-0.3,0-0.5,0C8.3,7.3,8,7.5,7.9,7.6C7.3,8.2,7,8.9,7,9.7c0.1,0.9,0.4,1.8,1,2.6c1.1,1.6,2.5,2.9,4.2,3.7 c0.5,0.2,0.9,0.4,1.4,0.5c0.5,0.2,1,0.2,1.6,0.1c0.7-0.1,1.3-0.6,1.7-1.2c0.2-0.4,0.2-0.8,0.1-1.2C17,14.2,16.8,14.1,16.6,14 M19.1,4.9C15.2,1,8.9,1,5,4.9c-3.2,3.2-3.8,8.1-1.6,12L2,22l5.3-1.4c1.5,0.8,3.1,1.2,4.7,1.2h0c5.5,0,9.9-4.4,9.9-9.9 C22,9.3,20.9,6.8,19.1,4.9 M16.4,18.9c-1.3,0.8-2.8,1.3-4.4,1.3h0c-1.5,0-2.9-0.4-4.2-1.1l-0.3-0.2l-3.1,0.8l0.8-3l-0.2-0.3 C2.6,12.4,3.8,7.4,7.7,4.9S16.6,3.7,19,7.5C21.4,11.4,20.3,16.5,16.4,18.9"/></svg>  </a>
      </div>
      <div>
        <a href="https://goo.gl/maps/xNjMU4d3yNp3AYy27">  <svg class="fill-black w-9 px-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M 7.9921875 2 C 5.5128289 2 3.4921848 4.0207 3.4921875 6.5 A 0.50004997 0.50004997 0 0 0 3.515625 6.65625 C 3.5571612 8.2360842 4.2413306 9.6168556 5.046875 10.898438 C 5.8778872 12.220538 6.8410096 13.461262 7.4589844 14.726562 A 0.50005 0.50005 0 0 0 8.3535156 14.736328 C 9.0023651 13.472028 10.01492 12.230403 10.888672 10.908203 C 11.762423 9.5861031 12.507812 8.1582125 12.507812 6.5078125 A 0.50005 0.50005 0 0 0 12.474609 6.3222656 C 12.378905 3.9265755 10.410779 2 7.9921875 2 z M 7.9921875 3 C 9.9311056 3 11.49219 4.5611 11.492188 6.5 A 0.50004997 0.50004997 0 0 0 11.501953 6.6074219 C 11.472054 7.9152192 10.866431 9.1260756 10.052734 10.357422 C 9.3649317 11.398122 8.5891576 12.473144 7.9179688 13.589844 C 7.2808465 12.477844 6.5468307 11.404988 5.8945312 10.367188 C 5.1006637 9.1041875 4.5078125 7.8616125 4.5078125 6.5078125 A 0.50005 0.50005 0 0 0 4.5 6.4140625 C 4.5464063 4.516161 6.0827033 3 7.9921875 3 z M 7.9921875 5.0039062 C 7.1696827 5.0039062 6.4921875 5.6814063 6.4921875 6.5039062 C 6.4921875 7.3264062 7.1696827 8.0039062 7.9921875 8.0039062 C 8.8146923 8.0039062 9.4921875 7.3264062 9.4921875 6.5039062 C 9.4921875 5.6814063 8.8146923 5.0039062 7.9921875 5.0039062 z M 7.9921875 6.0039062 C 8.2742522 6.0039062 8.4921875 6.2219063 8.4921875 6.5039062 C 8.4921875 6.7860062 8.2742522 7.0039062 7.9921875 7.0039062 C 7.7101228 7.0039062 7.4921875 6.7860062 7.4921875 6.5039062 C 7.4921875 6.2219063 7.7101228 6.0039062 7.9921875 6.0039062 z " /></svg>  </a>
      </div>
    </div>



  </div> 


  @if (Auth::guest())

  @else
    <div class="container mx-auto w-3/4">
      <form action="{{ route('guardar.log', $cliente->id) }}" method="POST">
        @csrf
        <div>
          <label for="total">total</label>
          <input type="text" name="total" id="total" class="block mt-1 w-full">
        </div>
        <div>
          <label for="descuento">descuento</label>
          <input type="text" name="descuento" id="descuento" value="{{ $cliente->descuento }}" class="block mt-1 w-full" disabled>
        </div>
        <button class="text-white bg-red-500 rounded-md text-center w-2/5 mx-auto p-4 m-4"> Registrar </button>
      </form>
    </div>
  @endif
  

  <script src="{{ asset('js/qrcode.js') }}" ></script>
  <script>
    var qrcode = new QRCode(document.getElementById("qrcode"), {
      width : 100,
      height : 100
    });
    qrcode.makeCode('{{url()->current()}}');
  </script>
  
</body>
</html>