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
  <link rel="stylesheet" href="{{ asset('stylesheets/pesquisa.css') }}">
</head>
<body>
@yield('content')
<footer>
    <p>Há uma dúvida? <a href="mailto:cristina.henrietta.stoll@everis.com?subject=Pesquisa LDT">Entre em contato por e-mail</a>.</p>
    <p>Copyright 2018 &copy; everis</p>
</footer>
<script src="assets/uswds-1.0.0/js/uswds.min.js"></script>
</body>
</html>
