<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('pageTitle')Pesquisa brasileira sobre o uso de leitores de tela</title>
	<script src="{{ secure_asset('/js/validarP1.js') }}"></script>
	<script src="{{ secure_asset('/js/validarP2.js') }}"></script>
	<script src="{{ secure_asset('/js/validarP3.js') }}"></script>
	<script src="{{ secure_asset('js/validarP4.js') }}"></script>
	<script src="{{ secure_asset('js/validarP5.js') }}"></script>
	<script src="{{ secure_asset('js/validarP6.js') }}"></script>
	<script src="{{ secure_asset('js/CHK.js') }}"></script>
	<link rel="stylesheet" href="{{ secure_asset('uswds-1.6.8/css/uswds.min.css') }}">
	<link rel="stylesheet" href="{{ secure_asset('css/pesquisa.css') }}">
	<link rel="image_src" href="{{ secure_asset('images/logo_pesquisa-ldt.png') }}" alt="Logo da pesquisa brasileira sobre o uso de leitores de tela"/>	
	
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
<script src="{{ secure_asset('uswds-1.6.8/js/uswds.min.js') }}"></script>
</body>
</html>