@extends('layouts.app')

@section('pageTitle', 'Parte 5 - ')

@section('content')

<main id="main-content">
		<div class="usa-width-one-whole">	
			
		  	<h1>Parte 5: Acessibilidade</h1>
		
				<form name="parte5" class="usa-form-large" action="{{ url('/parte5') }}" method="post" >
				
				@csrf					
				<input name="id" type="hidden" value="{{ $id }}" />

			        <div class="pergunta">				
						<label for="prefereweb" id="prefereWebe">5.1 Você prefere navegar em uma página da Internet pelo computador / notebook ou pelo celular / tablet?</label>
						<select name="preferencia_navegacao" id="prefereweb" required>
						  <option value="">Selecione</option>
						  <option value="desktop">Computador / notebook</option>
						  <option value="mobile">Celular / tablet</option>
						  <option value="naoprefere">Não tenho preferência</option>
						</select>
			        </div>
					
			        <div class="pergunta">
						<label for="maisacessivel" id="maisAcessivel">5.2 Na sua opinião, você acha que a Internet ficou mais acessível desde 2015?</label>
						<select name="mais_acessivel" id="maisacessivel" required>
						  <option value="">Selecione</option>
						  <option value="sim">Sim, ficou mais acessível</option>
						  <option value="igual">Continua igual para mim</option>
						  <option value="nao">Não, ficou menos acessível</option>
						</select>
			        </div>

			        <div class="pergunta">					    
						<label for="lbi" id="LBI">5.3 Você já ouviu falar da LBI (Lei Brasileira de Inclusão, nº 13.146/2015)?</label>
						<select name="lbi" id="lbi" required>
						  <option value="">Selecione</option>
						  <option value="sim">Sim</option>
						  <option value="nao">Não</option>
						</select>      
			        </div>  
					
			        <div class="pergunta">					
						<label for="siteacessivel" id="siteAcessivel">5.4 Qual é o site mais acessível que você utiliza?</label>
					    <input id="siteacessivel" name="site_acessivel" type="text" placeholder="Qual é o site mais acessível que você utiliza?" maxlength="100" required>
			        </div>
			        
			        <div class="pergunta">					
						<label for="siteinacessivel" id="siteInacessivel">5.5 Qual é o site menos acessível que você utiliza?</label>
					    <input id="siteinacessivel" name="site_inacessivel" type="text" placeholder="Qual é o site menos acessível que você utiliza?" maxlength="100" required>
			        </div>
						
						<!-- BRUNO PARA CORRIGIR <button class="usa-button-secondary">Voltar</button> -->
					    <button class="usa-button" type="button" onclick="validarP5();">Continuar</button>
					
					</form>		    		

		    <p>Você tem alguma dúvida? <a href="mailto:cristina.henrietta.stoll@everis.com?subject=Pesquisa%20LDT%20-%20Parte%205">Entre em contato por e-mail</a>.</p>

		</div>    	
</main>

@endsection
