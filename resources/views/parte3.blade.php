@extends('layouts.app')

@section('pageTitle', 'Parte 3 - ')

@section('content')

<main id="main-content">
		<div class="usa-width-one-whole">	
			
		    <h1>Parte 3: Navegação na Internet</h1>
		    
			    <form name="parte3" class="usa-form-large" action="{{ url('/parte3') }}" method="post">
				
				@csrf			
				<input name="id" type="hidden" value="{{ $id }}" />
			    
			        <div class="pergunta">
				        <label for="navegadordesktop"  id="navDesk">3.1 Qual navegador você mais utiliza no seu computador / notebook?</label>    
				        <select name="navegador_desktop" id="navegadordesktop" required>
				            <option value="selecione">Selecione</option>
				            <option value="chrome">Chrome</option>
				            <option value="edge">Edge</option>
				            <option value="firefox">Firefox</option>
				            <option value="ie">Internet Explorer</option>
				            <option value="opera">Opera</option>
				            <option value="safari">Safari</option>
				            <option value="outro">Outro</option>
				            <option value="naoutilizo">Não utilizo nenhum</option>
				       </select>
			        </div>
			
			        <div class="pergunta">
				        <label for="navegadormobile" id="navMobile">3.2 Qual navegador você mais utiliza no seu celular / tablet?</label>    
				        <select name="navegador_mobile" id="navegadormobile" required>
				            <option value="">Selecione</option>
				            <option value="chrome">Chrome</option>
				            <option value="firefox">Firefox</option>
				            <option value="safari">Safari</option>
				            <option value="outro">Outro</option>
				            <option value="naoutilizo">Não utilizo nenhum</option>
				        </select>
			        </div>
			
			        <div class="pergunta">
				        <label for="navencontrar" id="navEncontrar">3.3 Ao tentar encontrar informações em uma página da Internet, qual das seguintes opções você costuma utilizar?</label>
				        <select name="nav_encontrar" id="navencontrar" required>
				            <option value="">Selecione</option>		
				            <option value="cabecalhos">Navegar pelos cabeçalhos (tecla H ou números de 1 a 6)</option>
				            <option value="pesquisa">Utilizar a pesquisa da página (Ctrl + F)</option>
				            <option value="links">Navegar pelos links (Tab ou tecla K)</option>
				            <option value="marcas">Navegar pelas marcas/regiões (tecla D ou R)</option>
				            <option value="item">Navegar item por item (seta para baixo)</option>
				        </select>
			        </div>
			
			        <div class="pergunta">
				        <label for="navirpara" id="navIrPara">3.4 Com qual frequência você utiliza os links “ir para conteúdo” ou “ir para o menu” quando estão disponíveis em uma página?</label>
				        <select name="nav_irpara" id="navirpara" required>
				            <option value="">Selecione</option>
				            <option value="sempre">Sempre</option>
				            <option value="frequentemente">Frequentemente</option>
				            <option value="asvezes">Às vezes</option>
				            <option value="raramente">Raramente</option>
				            <option value="nunca">Nunca</option>
				            <option value="naosei">Não sei do que se trata</option>
				        </select>
			        </div>
			
			        <div class="pergunta">
				        <label for="navmarcas" id="navMarcas">3.5 Com qual frequência você utiliza a navegação pelas marcas / regiões (tecla D ou R) em uma página?</label>
				        <select name="nav_marcas" id="navmarcas" required>
				            <option value="">Selecione</option>
				            <option value="sempre">Sempre</option>
				            <option value="frequentemente">Frequentemente</option>
				            <option value="asvezes">Às vezes</option>
				            <option value="raramente">Raramente</option>
				            <option value="nunca">Nunca</option>
				            <option value="naosei">Não sei do que se trata</option>
				        </select>
			        </div>
			        
			        <div class="pergunta">
				        <label for="navbarra" id="navBarra">3.6 Com qual frequência você utiliza as opções de aumentar/diminuir fonte ou alternar contraste, quando estão disponíveis em uma página?</label>
				        <select name="nav_barra" id="navbarra" required>
				            <option value="">Selecione</option>
				            <option value="sempre">Sempre</option>
				            <option value="frequentemente">Frequentemente</option>
				            <option value="asvezes">Às vezes</option>
				            <option value="raramente">Raramente</option>
				            <option value="nunca">Nunca</option>
				            <option value="naosei">Não sei do que se trata</option>
				        </select> 
			        </div>
			        
			        <div class="pergunta">
				        <label for="navteclas" id="navTeclas">3.7 Com qual frequência você utiliza as teclas de atalho de um site, quando estão disponíveis? Por exemplo, a tecla P para publicar um novo status no Facebook.</label>
				        <select name="nav_teclas" id="navteclas" required>
				            <option value="">Selecione</option>
				            <option value="sempre">Sempre</option>
				            <option value="frequentemente">Frequentemente</option>
				            <option value="asvezes">Às vezes</option>
				            <option value="raramente">Raramente</option>
				            <option value="nunca">Nunca</option>
				            <option value="naosei">Não sei do que se trata</option>
				        </select>
			        </div>
			        
			        <div class="pergunta">
				        <label for="navdificil" id="navDificil">3.8 Em qual elemento você tem mais dificuldade de navegar?</label>
				        <select name="nav_dificuldade" id="navdificil" required>
				            <option value="">Selecione</option>
				            <option value="busca">Campo de busca inacessível ou inexistente</option>
				            <option value="cabecalhos">Cabeçalhos ausentes ou fora da ordem lógica</option>
				            <option value="excesso">Excesso de links ou itens de navegação</option>
				            <option value="irlinks">Falta de links “ir para conteúdo” ou “ir para o menu”</option>
				            <option value="formularios">Formulários complexos</option>
				            <option value="captcha">Imagens CAPTCHA apresentando texto usado para verificar que você não é um robô</option>
				            <option value="imagens">Imagens sem descrição ou com descrições inadequadas</option>
				            <option value="linksbotoes">Links ou botões que não fazem sentido</option>
				            <option value="teclado">Navegação que não é acessível por teclado</option>
				            <option value="flash">Presença de conteúdo Flash inacessível</option>
				            <option value="tabelas">Tabelas complexas</option>
				            <option value="mudam">Telas ou partes de telas que mudam inesperadamente</option>
				        </select> 
			        </div>        
			        
			        <div class="pergunta">
				        <label for="navlinks" id="navLinks">3.9 Quando existem dois links seguidos, o seu leitor de tela os lê um em cada linha?</label>			        
				        <select name="nav_links" id="navlinks" required>
				            <option value="">Selecione</option>
				            <option value="sim">Sim</option>
				            <option value="nao">Não</option>
				            <option value="naosei">Não sei do que se trata</option>
				        </select>
			        </div>
			
					<!-- BRUNO PARA CORRIGIR <button class="usa-button-secondary">Voltar</button> -->
			        <button class="usa-button" type="button" onclick="validarP3();">Continuar</button>
			       
			    </form>		    		

		    <p>Você tem alguma dúvida? <a href="mailto:cristina.henrietta.stoll@everis.com?subject=Pesquisa%20LDT%20-%20Parte%203">Entre em contato por e-mail</a>.</p>

		</div>   	
</main>

@endsection