@extends('layouts.app')

@section('pageTitle', 'Parte 6 - ')

@section('content')

<main id="main-content">
	<section class="usa-grid usa-section">
		<div class="usa-width-one-whole">	
		
		  <h1>Parte 6: Conclusão</h1>
			
			  <form name="parte6" class="usa-form-large" action="{{ url('/parte6') }}" method="post" >
@csrf			
				<input name="id" type="hidden" value="{{ $id }}" />
			        <label for="email" id="Email">Qual o seu e-mail?</label>
			        <input id="email" name="email" onblur="validarMail(parte6.email);"  type="email" maxlength="100" required>             
			
			        <label for="nome" id="Nome">Qual o seu nome?</label>
			        <input id="nome" name="nome" type="text" required>     
			
			        <label for="pesquisa" id="Pesquisa">O que você achou da pesquisa?</label>
			        <input id="pesquisa" name="opniao" type="text" required>  
			        
			        <!-- BRUNO PARA CORRIGIR <button class="usa-button-secondary">Voltar</button> -->
			        <button class="usa-button" type="button" onclick="validarP6();">Enviar</button>
			
			  </form>		    		

		    <p>Você tem alguma dúvida? <a href="mailto:cristina.henrietta.stoll@everis.com?subject=Pesquisa%20LDT%20-%20Parte%206">Entre em contato por e-mail</a>.</p>
			
		</div>    	
    </section>
</main>

@endsection
