<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nikkei - Clientes VIP</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    .container {
      display: flex;
      max-width: 500px;
      flex-direction: column;
      flex-wrap: nowrap;
      align-items: center;
      justify-content: center;
      font-family: 'Montserrat', sans-serif;
      margin: 0 auto;
    }
    .logo-nikkei {
      width: 20%;
      max-width: 250px;
      margin: 0 auto;
      margin-bottom: 0.5rem;
    }
  </style>
</head>
<body>
  <div style="margin: 0; padding: 0;">
    <table style="width: 100%; border: none; border-spacing: 0; font-family: 'Montserrat', sans-serif;">
      <tbody>
        <tr>
          <td align="center" style="padding: 0;">
            <table style="width: 100%; max-width: 600px; border: none; border-spacing: 0; color: #000;">
              <tbody>
                <tr height="80">
                  <td align="center"><img src="https://nikkeisv.com/clientes-exclusivos/public/img/favicon.png"  alt="Logo nikkei"></td>
                </tr>
                <tr>
                  <td align="center"><h3 style="font-size: 26px;">VIP</h3></td>
                </tr>
                <tr>
                  <td align="center">
                    <p style="margin-top: 0px; text-align: center; font-size: 15px; line-height: 1.5em;">
                      @if ($info['tipo'] != 7 )
                        Bienvenido al grupo selecto de Nikkei, has recibido {{ $info['descuento'] }}% de descuento en tus compras, recuerda presentar este QR al momento de tu compra
                      @else
                        ¡Felicidades has recibido una {{ $info['descuento'] }} en tu proxima compra!
                      @endif
                    </p>
                  </td>
                </tr>
                <tr>
                  <td align="center"><img src="{{asset('/qrcode/' . $info['id'] . "_" . $info['slug'] . '.png')}}" style="width: 80%; max-width: 300px;" alt=""></td>
                </tr>
                <tr>
                  <td align="center"><h1 style="text-align: center;">{{ $info['nombre'] }}</h1></td>
                </tr>
                <tr>
                  <td align="center">
                    <div style="background-color: #b8242e; border-radius: 10px 10px 0px 0px; padding: 10px 40px;">
                      <div style="margin: 0 auto; text-align: center;">
                        <img src="{{ asset('img/facebook-white-24.png') }}"  alt="facebook">
                        <img src="{{ asset('img/instagram-white-24.png') }}"  alt="instragram">
                        <img src="{{ asset('img/whatsapp-white-24.png') }}"  alt="whatsapp">
                        <img src="{{ asset('img/location-pin-white-24.png') }}" style="width: 24px;" alt="location">
                      </div>
                      <a href="https://nikkeisv.com" style="color: white; text-decoration: none;">nikkeisv.com</a>
                    </div>
                  </td>
                </tr>
              </tbody>

            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  {{-- <div class="container">
    <img src="https://nikkeisv.com/clientes-exclusivos/public/img/favicon.png" class="logo-nikkei w-1/5 md:w-1/6 mb-2" alt="Logo nikkei">
    <h3>VIP</h3>
    <h6 style="margin-top: 0px; text-align: center;">Bienvenido al grupo selecto de Nikkei, has recibido <strong style="font-weight: 700;">{{ $info['descuento'] }}%</strong> de descuento en tus compras, recuerda presentar este QR al momento de tu compra</h6>

    <img src="{{asset('/qrcode/' . $info['id'] . "_" . $info['slug'] . '.png')}}" style="width: 80%; max-width: 300px;" alt="">

    <h1 style="text-align: center;">{{ $info['nombre'] }}</h1>
    <div style="background-color: #b8242e; border-radius: 10px 10px 0px 0px; padding: 10px 40px;">
      <div style="margin: 0 auto; text-align: center;">
        <svg xmlns="http://www.w3.org/2000/svg" style="fill: white; width: 15px; padding-right: 10px" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" style="fill: white; width: 15px; padding-right: 10px" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" style="fill: white; width: 15px; padding-right: 10px" data-name="Layer 1" viewBox="0 0 24 24"> <path id="path4" inkscape:connector-curvature="0" d="M16.6,14c-0.2-0.1-1.5-0.7-1.7-0.8c-0.2-0.1-0.4-0.1-0.6,0.1 c-0.2,0.2-0.6,0.8-0.8,1c-0.1,0.2-0.3,0.2-0.5,0.1c-0.7-0.3-1.4-0.7-2-1.2c-0.5-0.5-1-1.1-1.4-1.7c-0.1-0.2,0-0.4,0.1-0.5 c0.1-0.1,0.2-0.3,0.4-0.4c0.1-0.1,0.2-0.3,0.2-0.4c0.1-0.1,0.1-0.3,0-0.4c-0.1-0.1-0.6-1.3-0.8-1.8C9.4,7.3,9.2,7.3,9,7.3 c-0.1,0-0.3,0-0.5,0C8.3,7.3,8,7.5,7.9,7.6C7.3,8.2,7,8.9,7,9.7c0.1,0.9,0.4,1.8,1,2.6c1.1,1.6,2.5,2.9,4.2,3.7 c0.5,0.2,0.9,0.4,1.4,0.5c0.5,0.2,1,0.2,1.6,0.1c0.7-0.1,1.3-0.6,1.7-1.2c0.2-0.4,0.2-0.8,0.1-1.2C17,14.2,16.8,14.1,16.6,14 M19.1,4.9C15.2,1,8.9,1,5,4.9c-3.2,3.2-3.8,8.1-1.6,12L2,22l5.3-1.4c1.5,0.8,3.1,1.2,4.7,1.2h0c5.5,0,9.9-4.4,9.9-9.9 C22,9.3,20.9,6.8,19.1,4.9 M16.4,18.9c-1.3,0.8-2.8,1.3-4.4,1.3h0c-1.5,0-2.9-0.4-4.2-1.1l-0.3-0.2l-3.1,0.8l0.8-3l-0.2-0.3 C2.6,12.4,3.8,7.4,7.7,4.9S16.6,3.7,19,7.5C21.4,11.4,20.3,16.5,16.4,18.9"/> </svg>
        <svg xmlns="http://www.w3.org/2000/svg" style="fill: white; width: 15px; " viewBox="0 0 16 16"><path d="M 7.9921875 2 C 5.5128289 2 3.4921848 4.0207 3.4921875 6.5 A 0.50004997 0.50004997 0 0 0 3.515625 6.65625 C 3.5571612 8.2360842 4.2413306 9.6168556 5.046875 10.898438 C 5.8778872 12.220538 6.8410096 13.461262 7.4589844 14.726562 A 0.50005 0.50005 0 0 0 8.3535156 14.736328 C 9.0023651 13.472028 10.01492 12.230403 10.888672 10.908203 C 11.762423 9.5861031 12.507812 8.1582125 12.507812 6.5078125 A 0.50005 0.50005 0 0 0 12.474609 6.3222656 C 12.378905 3.9265755 10.410779 2 7.9921875 2 z M 7.9921875 3 C 9.9311056 3 11.49219 4.5611 11.492188 6.5 A 0.50004997 0.50004997 0 0 0 11.501953 6.6074219 C 11.472054 7.9152192 10.866431 9.1260756 10.052734 10.357422 C 9.3649317 11.398122 8.5891576 12.473144 7.9179688 13.589844 C 7.2808465 12.477844 6.5468307 11.404988 5.8945312 10.367188 C 5.1006637 9.1041875 4.5078125 7.8616125 4.5078125 6.5078125 A 0.50005 0.50005 0 0 0 4.5 6.4140625 C 4.5464063 4.516161 6.0827033 3 7.9921875 3 z M 7.9921875 5.0039062 C 7.1696827 5.0039062 6.4921875 5.6814063 6.4921875 6.5039062 C 6.4921875 7.3264062 7.1696827 8.0039062 7.9921875 8.0039062 C 8.8146923 8.0039062 9.4921875 7.3264062 9.4921875 6.5039062 C 9.4921875 5.6814063 8.8146923 5.0039062 7.9921875 5.0039062 z M 7.9921875 6.0039062 C 8.2742522 6.0039062 8.4921875 6.2219063 8.4921875 6.5039062 C 8.4921875 6.7860062 8.2742522 7.0039062 7.9921875 7.0039062 C 7.7101228 7.0039062 7.4921875 6.7860062 7.4921875 6.5039062 C 7.4921875 6.2219063 7.7101228 6.0039062 7.9921875 6.0039062 z "></path></svg>
      </div>
      <a href="https://nikkeisv.com" style="color: white; text-decoration: none;">nikkeisv.com</a>
    </div>
  </div> --}}
</body>
</html>