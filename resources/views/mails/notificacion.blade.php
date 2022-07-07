<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>

  </style>
</head>
<body>
  <h1>Correo Electronico</h1>
  <h1>Hola {{ $info['nombre'] }}</h1>
  <h1>id: {{ $info['id'] }} </h1>
  <h1>slug: {{ $info['slug'] }} </h1>
  <h1>descuento: {{ $info['descuento'] }} </h1>

  <img src="{{asset('/qrcode/' . $info['id'] . "_" . $info['slug'] . '.png')}}" alt="">

  <div id="qrcode"></div>
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