<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('css/estilos.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    html, body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Nunito', sans-serif;
      font-weight: 200;
      height: 100vh;
      margin: 0;
    }

    .full-height {
      height: 100vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .links > a {
      color: #FFF;
      padding: 0 25px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
<div class="flex-center position-ref full-height banner">
  @if (Route::has('login'))
    <div class="top-right links">
      @auth
        <a href="{{ url('/post') }}">Inicio</a>
      @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
          <a href="{{ route('register') }}">Registrarse</a>
        @endif
      @endauth
    </div>
  @endif

  <div class="banner-content">
    <div class="content">
          <div class="title ">
              {{ config('app.name', 'Laravel') }}
            </div>
        
            <div class="links">
              <a href="https://unmsm.edu.pe/">Unmsm</a>
              <a href="http://ogbu.unmsm.edu.pe/">OGBU</a>
              <a href="http://sisbib.unmsm.edu.pe/">Biblioteca Central</a>
              <a href="https://blog.laravel.com">Blog</a>
              <a href="http://posgrado.unmsm.edu.pe/">PostGrado</a>
              <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
    </div>
  </div>
</div>
</body>
</html>
