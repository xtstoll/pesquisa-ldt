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
	<link rel="stylesheet" href="{{ secure_asset('uswds-1.6.8/css/uswds.css') }}">
	<link rel="stylesheet" href="{{ secure_asset('css/pesquisa.css') }}">
	<link rel="image_src" href="{{ secure_asset('images/logo_pesquisa-ldt_twitter.jpg') }}" />	
	
<!-- Facebook -->
	<meta property="og:url" content="https://estudoinclusivo.com.br" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Pesquisa brasileira sobre o uso de leitores de tela" />
	<meta property="og:description" content="Contribua para uma web mais inclusiva participando dessa pesquisa! Só leva de 15 a 20 min para preencher, e os dados coletados serão disponibilizados para todos." />
	<meta property="og:image" content="{{ secure_asset('images/logo_pesquisa-ldt.jpg') }}" />	

<!-- Twitter -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Pesquisa brasileira sobre o uso de leitores de tela" />
	<meta name="twitter:description" content="Contribua para uma web mais inclusiva participando dessa pesquisa! Só leva de 15 a 20 min para preencher, e os dados coletados serão disponibilizados para todos." />
	<meta name="twitter:image" content="{{ secure_asset('images/logo_pesquisa-ldt_twitter.jpg') }}" />	

<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127040926-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-127040926-1');
	</script>

<!-- Google Charts -->
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	 <script type="text/javascript">

	      // Load the Visualization API and the corechart package.
	      google.charts.load('current', {'packages':['corechart']});

	      // Set a callback to run when the Google Visualization API is loaded.
	      // Parte 1
	      google.charts.setOnLoadCallback(grupoIdade);
	      google.charts.setOnLoadCallback(identificaGenero);
	      google.charts.setOnLoadCallback(moraRegiao);
	      google.charts.setOnLoadCallback(nivelEscolaridade);
	      google.charts.setOnLoadCallback(possuiDeficiencia);
	      google.charts.setOnLoadCallback(tipoDeficiencia);
	      // Parte 2	      
		  google.charts.setOnLoadCallback(ldtDesktop);
		  google.charts.setOnLoadCallback(ldtAtualizou);
		  google.charts.setOnLoadCallback(ldtMobile);
		  google.charts.setOnLoadCallback(ldtUso);
		  google.charts.setOnLoadCallback(ldtMais);
		  google.charts.setOnLoadCallback(ldtAprendeu);
		  google.charts.setOnLoadCallback(ldtPagar);
	      // Parte 3
		  google.charts.setOnLoadCallback(navDesktop);
		  google.charts.setOnLoadCallback(navMobile);
		  google.charts.setOnLoadCallback(navInformacoes);
		  google.charts.setOnLoadCallback(navIrLinks);
		  google.charts.setOnLoadCallback(navMarcas);
		  google.charts.setOnLoadCallback(navFontes);
		  google.charts.setOnLoadCallback(navAtalhos);
	      // Parte 4		  
	      google.charts.setOnLoadCallback(usoBraille);
		  google.charts.setOnLoadCallback(usoLinha);
		  google.charts.setOnLoadCallback(usoTeclado);
		  google.charts.setOnLoadCallback(usoVoz);
		  // Parte 5
		  google.charts.setOnLoadCallback(prefNav);
		  google.charts.setOnLoadCallback(opiniaoWeb);
		  google.charts.setOnLoadCallback(conheceLBI);

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function grupoIdade() {

	        // Create the data table.
		       var data = new google.visualization.DataTable();
				data.addColumn('string', 'Idade');
				data.addColumn('number', 'Participantes');
				data.addRows([
					['10 a 14 anos', 1],
					['15 a 19 anos', 19],
					['20 a 24 anos', 37],
					['25 a 29 anos', 62],
					['30 a 34 anos', 56],
					['35 a 39 anos', 43],
					['40 a 44 anos', 31],
					['45 a 49 anos', 31],
					['50 a 54 anos', 18],
					['55 a 59 anos', 7],
					['60 a 64 anos', 5],
					['65 a 69 anos', 1],
					['70 a 74 anos', 1],
			      ]);
	       
				var options = {
					vAxis: {format:'#\'%\''}
				};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.ColumnChart(document.getElementById('chart_grupoIdade'));
	        chart.draw(data, options);
	      }

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function identificaGenero() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Gênero');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Homem', 197, '63.1%'],
				['Mulher', 112, '35.9%'],
				['Não quero responder', 2, '0.6%'],
				['Outro', 1, '0.3%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_identificaGenero'));
	        chart.draw(data, options);
	      }

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function moraRegiao() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Região');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Sudeste', 186, '59.6%'],
				['Nordeste', 61, '19.6%'],
				['Sul', 40, '12.8%'],
				['Centro-Oeste', 15, '4.8%'],
				['Norte', 10, '3.2%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_moraRegiao'));
	        chart.draw(data, options);
	      }

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function nivelEscolaridade() {

	        // Create the data table.
	       var data = new google.visualization.DataTable();
			data.addColumn('string', 'Escolaridade');
			data.addColumn('number', 'Participantes');
			data.addRows([
				['Fundamental incompleto', 11],
				['Fundamental completo', 5],
				['Ensino médio incompleto', 16],
				['Ensino médio completo', 63],
				['Superior incompleto', 58],
				['Superior completo', 87],
				['Pós-graduação (lato sensu) incompleta', 10],
				['Pós-graduação (lato sensu) completa', 44],
				['Pós-graduação (nível mestrado) incompleta', 2],
				['Pós-graduação (nível mestrado) completa', 9],
				['Pós-graduação (nível doutorado) incompleta', 2],
				['Pós-graduação (nível doutorado) completa', 2],
				['Não quero responder', 3],
			]);

	        // Set chart options
				var options = {
					vAxis: {format:'#\'%\''}
				};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.ColumnChart(document.getElementById('chart_nivelEscolaridade'));
	        chart.draw(data, options);
	      }

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function possuiDeficiencia() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Se possui uma deficiência');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Possui uma deficiência', 288, '92.3%'],
				['Não possui nenhuma deficiência', 14, '4.5%'],
				['Possui mais que uma deficiência', 10, '3.2%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_possuiDeficiencia'));
	        chart.draw(data, options);
	      }

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function tipoDeficiencia() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Tipo de deficiência');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Cegueira', 235, '72.5%'],
				['Baixa visão', 60, '18.5%'],
				['Motora', 7, '2.2%'],
				['Auditiva', 5, '1.5%'],
				['Cognitiva', 1, '0.3%'],
				['Outra', 2, '0.6%'],
				['Nenhuma', 14, '4.3%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_tipoDeficiencia'));
	        chart.draw(data, options);
	      }

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function ldtDesktop() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Leitor de tela desktop');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['NVDA', 216, '69.2%'],
				['JAWS', 49, '15.7%'],
				['VoiceOver', 22, '7.1%'],
				['Virtual Vision', 6, '1.9%'],
				['ChromeVox', 3, '1.0%'],
				['Dosvox', 2, '0.6%'],
				['ZoomText', 2, '0.6%'],
				['Outro', 7, '2.2%'],
				['Não utilizo', 5, '1.6%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_ldtDesktop'));
	        chart.draw(data, options);
	      }

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function ldtAtualizou() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Atualizou seu leitor de tela');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Há alguns dias', 176, '56.4%'],
				['Há alguns meses', 69, '22.1%'],
				['Há mais de um ano', 25, '8.0%'],
				['Não tenho costume de atualizar', 22, '7.1%'],
				['Não tenho certeza', 20, '6.4%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_ldtAtualizou'));
	        chart.draw(data, options);
	      }

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function ldtMobile() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Leitor de tela mobile');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['TalkBack', 155, '49.7%'],
				['VoiceOver', 122, '39.1%'],
				['Mobile Accessibility', 7, '2.2%'],
				['Shine Plus', 7, '2.2%'],
				['Voice Assistant', 4, '1.3%'],
				['Nuance Talks', 2, '0.6%'],
				['Mobile Speaks', 1, '0.3%'],
				['Não utilizo nenhum', 14, '4.5%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_ldtMobile'));
	        chart.draw(data, options);
	      }

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function ldtUso() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Uso do leitor de tela');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Utilizo somente a fala do leitor de tela', 243, '77.9%'],
				['Utilizo principalmente a fala do leitor de tela, mas também preciso dos recursos visuais', 41, '13.1%'],
				['Utilizo principalmente os recursos visuais, mas também preciso da fala do leitor de tela', 12, '3.8%'],
				['Utilizo somente os recursos visuais', 11, '3.5%'],
				['Não utilizo nenhum', 5, '1.6%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_ldtUso'));
	        chart.draw(data, options);
	      }

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function ldtMais() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Uso de desktop x mobile');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Utilizo mais o leitor de tela do celular / tablet', 62, '19.9%'],
				['Utilizo tanto o leitor de tela do computador / notebook quanto o do celular / tablet', 200, '64.1%'],
				['Utilizo mais o leitor de tela do computador / notebook', 45, '14.4%'],
				['Não utilizo nenhum', 5, '1.6%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_ldtMais'));
	        chart.draw(data, options);
	      }	      

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function ldtAprendeu() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Aprendeu leitor de tela');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Sozinho', 125, '40.1%'],
				['Com amigos', 100, '32.1%'],
				['Em uma instituição para pessoas com deficiência visual', 70, '22.4%'],
				['Na escola', 11, '3.5%'],
				['No trabalho', 6, '1.9%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_ldtAprendeu'));
	        chart.draw(data, options);
	      }	

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function ldtPagar() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Vale a pena pagar');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Não', 167, '53.5%'],
				['Sim', 145, '46.5%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_ldtPagar'));
	        chart.draw(data, options);
	      }	

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function navDesktop() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Navegador desktop');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Chrome', 144, '46.2%'],
				['Firefox', 100, '32.1%'],
				['Internet Explorer', 43, '13.8%'],
				['Safari', 14, '4.5%'],
				['Edge', 4, '1.3%'],
				['Outro', 3, '1.0%'],
				['Não utilizo nenhum', 2, '0.6%'],
				['Opera', 2, '0.6%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_navDesktop'));
	        chart.draw(data, options);
	      }	

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function navMobile() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Navegador mobile');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Chrome', 166, '53.2%'],
				['Safari', 116, '37.2%'],
				['Firefox', 12, '3.8%'],
				['Outro', 12, '3.8%'],
				['Não utilizo nenhum', 6, '1.9%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_navMobile'));
	        chart.draw(data, options);
	      }		  

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function navInformacoes() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Método de encontrar informações');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Navegar pelos cabeçalhos', 108, '34.6%'],
				['Navegar item por item', 86, '27.6%'],
				['Navegar pelos links', 83, '26.6%'],
				['Utilizar a pesquisa da página', 34, '10.9%'],
				['Navegar pelas marcas/regiões', 1, '0.3%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_navInformacoes'));
	        chart.draw(data, options);
	      }			          

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function navIrLinks() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Uso de links "ir para"');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Sempre', 74, '23.7%'],
				['Frequentemente', 76, '24.4%'],
				['Às vezes', 77, '24.7%'],
				['Raramente', 50, '16.0%'],
				['Nunca', 25, '8.0%'],
				['Não sei do que se trata', 10, '3.2%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_navIrLinks'));
	        chart.draw(data, options);
	      }			          

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function navMarcas() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Uso de marcas/regiões');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Sempre', 19, '6.1%'],
				['Frequentemente', 53, '17.0%'],
				['Às vezes', 71, '22.8%'],
				['Raramente', 64, '20.5%'],
				['Nunca', 74, '23.7%'],
				['Não sei do que se trata', 31, '9.9%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_navMarcas'));
	        chart.draw(data, options);
	      }			          

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function navFontes() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Uso de acessibilidade visual');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Sempre', 26, '8.3%'],
				['Frequentemente', 20, '6.4%'],
				['Às vezes', 12, '3.8%'],
				['Raramente', 21, '6.7%'],
				['Nunca', 225, '72.1%'],
				['Não sei do que se trata', 8, '2.6%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_navFontes'));
	        chart.draw(data, options);
	      }			          

	      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function navAtalhos() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Uso de atalhos de sites');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Sempre', 68, '21.8%'],
				['Frequentemente', 47, '15.1%'],
				['Às vezes', 67, '21.5%'],
				['Raramente', 54, '17.3%'],
				['Nunca', 56, '17.9%'],
				['Não sei do que se trata', 20, '6.4%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_navAtalhos'));
	        chart.draw(data, options);
	      }

		  // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function usoBraille() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Uso de braille virtual');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Respostas', Participantes, 'Porcentagem'],
				['Sim', 46, '14.8%'],
				['Não', 259, '83.5%'],
				['Não sei do que se trata', 5, '1.6%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_usoBraille'));
	        chart.draw(data, options);
	      }   

		  // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function usoLinha() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Uso de linha braille');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Respostas', Participantes, 'Porcentagem'],
				['Sim', 18, '5.8%'],
				['Não', 288, '92.9%'],
				['Não sei do que se trata', 4, '1.3%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_usoLinha'));
	        chart.draw(data, options);
	      }   

		  // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function usoTeclado() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Uso de teclado externo');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Respostas', Participantes, 'Porcentagem'],
				['Sim', 31, '10.0%'],
				['Não', 273, '88.1%'],
				['Não sei do que se trata', 6, '1.9%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_usoTeclado'));
	        chart.draw(data, options);
	      } 

		  // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function usoVoz() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Uso de digitação por voz');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Sempre', 82, '26.5%'],
				['Frequentemente', 90, '29.0%'],
				['Às vezes', 78, '25.2%'],
				['Raramente', 32, '10.3%'],
				['Nunca', 27, '8.7%'],
				['Não sei do que se trata', 1, '0.3%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_usoVoz'));
	        chart.draw(data, options);
	      } 	      

		  // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function prefNav() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Preferência mobile x desktop');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Computador / notebook', 160, '54.1%'],
				['Celular / tablet', 75, '25.3%'],
				['Não tenho preferência', 61, '20.6%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_prefNav'));
	        chart.draw(data, options);
	      } 

		  // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function opiniaoWeb() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Opinião sobre acessibilidade web');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Sim. ficou mais acessível', 194, '65.5%'],
				['Continua igual para mim', 86, '29.1%'],
				['Não. ficou menos acessível', 16, '5.4%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_opiniaoWeb'));
	        chart.draw(data, options);
	      } 	      

		  // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.
	      function conheceLBI() {

	        // Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Ouviu falar da LBI');
			data.addColumn('number', 'Nº de participantes');
			data.addColumn('string', '% de participantes');
			data.addRows([
				['Sim', 248, '83.8%'],
				['Não', 48, '16.2%'],
			]);

	        // Set chart options
	        var options = {'width':800,
	                       'height':400};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('chart_conheceLBI'));
	        chart.draw(data, options);
	      } 

	    </script>		      


</head>
<body>
@yield('content')
<script src="{{ secure_asset('uswds-1.6.8/js/uswds.min.js') }}"></script>
</body>
</html>
