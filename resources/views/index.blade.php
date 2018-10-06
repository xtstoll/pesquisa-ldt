@extends('layouts.app')

@section('content')

<main id="main-content">
		<div class="usa-width-one-whole">
			
		    <h1>Pesquisa Nacional de Leitores de Tela</h1>		    
		    	
		    	<p>Bem-vindo à Pesquisa Nacional de Leitores de Tela. É a primeira pesquisa brasileira sobre usuários de leitores de tela.</p>
				<p>A pesquisa permanecerá aberta até o dia 12 de novembro de 2018. Nenhuma informação de identificação pessoal será publicada. Quando enviado, a versão do navegador e o sistema operacional serão coletados. Os resultados serão publicados no final de 2018.</p>
				<p>Sua participação é voluntária. Levará aproximadamente 20 a 25 minutos para realizar a pesquisa. O benefício em fazer essa pesquisa é que suas experiências e opiniões podem ajudar empresas, pessoas e entidades públicas a melhorar a acessibilidade digital.</p>
				<p>Esta pesquisa está sendo administrada por funcionários da equipe de acessibilidade da empresa Everis Brasil. Se você tiver alguma dúvida, <a href="mailto:cristina.henrietta.stoll@everis.com?subject=Pesquisa%20LDT%20-%20Tela%20Inicial">entre em contato por e-mail</a>.</p>
				<p>Ao pressionar no botão abaixo, você concorda com a participação nesta pesquisa. Obrigado!</p>	    
		   
		    <a href="{{ url('/parte1') }}" role="button" class="usa-button">Iniciar a pesquisa</a>
		
		</div>
</main>

@endsection