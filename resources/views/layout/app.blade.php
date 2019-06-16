<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Olá, mundo! - @yield('title')</title>
  </head>
  <body>
      <div class="container">
          @yield('content')
      </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="{{asset('js/app.js')}}"
  </body>
</html>