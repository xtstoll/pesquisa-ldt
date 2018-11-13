@extends('layouts.app')

@section('content')

<main id="main-content">
	<div class="usa-grid">	
		<div class="usa-width-one-whole">
			
		    <h1>Pesquisa sobre o uso de leitores de tela</h1>		    
		    	
		    	<p>Bem-vindo(a) à primeira pesquisa brasileira sobre o uso de leitores de tela!</p>
				<p>A pesquisa permanecerá disponível até o dia 20 de novembro de 2018 (prazo estendido) e os resultados serão publicados até o final do ano. Nenhuma informação pessoal será vinculada à publicação. Apenas a versão do navegador e o sistema operacional serão coletados para fins de estatística. A sua participação é voluntária e você levará aproximadamente de 15 a 20 minutos para responder as perguntas.</p>
				<p>O benefício em colaborar com a nossa pesquisa é que suas experiências e opiniões poderão ajudar empresas e entidades públicas a melhorar a acessibilidade digital de sítios e aplicativos móveis em todo país.</p>
				<p>Este estudo está sendo desenvolvido pela equipe de acessibilidade da everis Brasil. Se você tiver alguma dúvida, <a href="mailto:cristina.henrietta.stoll@everis.com?subject=Pesquisa%20LDT%20-%20Tela%20Inicial">entre em contato por e-mail conosco</a>. Nós teremos o maior prazer em esclarecer suas dúvidas!</p>
				<p>Ao pressionar o botão “Iniciar a pesquisa” abaixo você concorda em participar da nossa pesquisa, conforme estes termos e condições.</p>
				<p>Muito obrigado!</br>
				Equipe de acessibilidade everis Brasil</p>  
		   
		    <a href="{{ url('/parte1') }}" role="button" class="usa-button">Iniciar a pesquisa</a>
		
		</div>
	</div>
</main>

@endsection
