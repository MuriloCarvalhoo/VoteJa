<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="canonical" href="https://voteja.online">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!--Icon-->
    <link rel="shortcut icon" href="{{ secure_asset('public/images/vote.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ secure_asset('public/css/glider.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('public/css/app.css') }}">



</head>
<body>
  <div class="container main text-white">

    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="{{ route('index') }}">VoteJa</a>
        <a class="navbar-brand mb-0 h1" href="{{ route('embates.index') }}" style="color:white">Criar Votação</a>
      </div>
    </nav>

  </div>
      

<div class="container text-white">
    @yield('content')
</div>

</body>


<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="{{ secure_asset('public/js/glider.js') }}" ></script>
<script src="{{ secure_asset('public/js/app.js') }}" async></script>
</html>
