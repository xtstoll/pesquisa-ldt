<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('pageTitle')Pesquisa brasileira sobre o uso de leitores de tela</title>
	<script src="js/validarP1.js"></script>
	<script src="js/validarP2.js"></script>
	<script src="js/validarP3.js"></script>
	<script src="js/validarP4.js"></script>
	<script src="js/validarP5.js"></script>
	<script src="js/validarP6.js"></script>
	<script src="js/CHK.js"></script>
	<link rel="stylesheet" href="{{ asset('uswds-1.6.8/css/uswds.min.css') }}">
	<link rel="stylesheet" href="css/pesquisa.css">
	<link rel="image_src" href="images/logo_pesquisa-ldt.jpg" alt="Logo da pesquisa brasileira sobre o uso de leitores de tela"/>
<!-- 	Facebook -->
	<meta property="og:url" content="http://estudoinclusivo.com.br" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Pesquisa brasileira sobre o uso de leitores de tela" />
	<meta property="og:description" content="Contribua para uma web mais inclusiva participando dessa pesquisa! Só leva de 15 a 20 min para preencher, e os dados coletados serão disponibilizados para todos." />
	<meta property="og:image" content="images/logo_pesquisa-ldt.jpg" alt="Logo da pesquisa brasileira sobre o uso de leitores de tela" />	
	<meta name="twitter:card" content="summary" />
<!-- Twitter -->
	<meta name="twitter:title" content="Pesquisa brasileira sobre o uso de leitores de tela" />
	<meta name="twitter:description" content="Contribua para uma web mais inclusiva participando dessa pesquisa! Só leva de 15 a 20 min para preencher, e os dados coletados serão disponibilizados para todos." />
	<meta name="twitter:image" content="images/logo_pesquisa-ldt_twitter.jpg" alt="Logo da pesquisa brasileira sobre o uso de leitores de tela" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127040926-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		
		gtag('config', 'UA-127040926-1');
	</script>

</head>
<body>
@yield('content')
<script src="{{ asset('uswds-1.6.8/js/uswds.min.js') }}"></script>
</body>
</html>