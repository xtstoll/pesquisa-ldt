<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('pageTitle') - Pesquisa nacional de leitores de tela</title>
  <script src="js/validarP1.js"></script>
  <script src="js/validarP2.js"></script>
  <script src="js/validarP3.js"></script>
  <script src="js/validarP4.js"></script>
  <script src="js/validarP5.js"></script>
  <script src="js/validarP6.js"></script>
  <link rel="stylesheet" href="{{ asset('uswds-1.6.8/css/uswds.min.css') }}">
  <link rel="stylesheet" href="css/pesquisa.css">
</head>
<body>
@yield('content')
<script src="{{ asset('uswds-1.6.8/js/uswds.min.js') }}"></script>
</body>
</html>