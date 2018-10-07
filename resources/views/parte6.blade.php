@extends('layouts.app')

@section('pageTitle', 'Parte 6 - ')

@section('content')

<main id="main-content">
		<div class="usa-width-one-whole">	
		
		  <h1>Parte 6: Conclusão</h1>
			
			  <form name="parte6" class="usa-form-large" action="{{ url('/parte6') }}" method="post" >
			  
			  @csrf			
			  

			        <div class="pergunta">									
						<label for="sorteio" id="Sorteio">6.1 Quer ter a oportunidade de ganhar um powerbank (carregador de celular portátil) por sua participação nesta pesquisa?</label>       
						<select name="sorteio" id="sorteio" required>
						  <option value="">Selecione</option>
						  <option value="sim">Sim</option>
						  <option value="não">Não</option>
						</select>
			        </div>
			
			        <div class="pergunta">					
						<label for="publicarmos" id="Publicarmos">6.2 Quer receber um e-mail quando publicarmos os resultados da pesquisa?</label>       
						<select name="publicada" id="publicarmos" required>
						  <option value="">Selecione</option>
						  <option value="sim">Sim</option>
						  <option value="não">Não</option>
						</select> 
			        </div>				
				
			        <div class="pergunta">					
				        <label for="email" id="Email">6.3 Qual o seu e-mail?</label>
				        <input id="email" name="email" onblur="validarMail(parte6.email);"  type="email" maxlength="100" required>     
			        </div>        
			        
			        <!-- BRUNO PARA CORRIGIR <button class="usa-button-secondary">Voltar</button> -->
			        <button class="usa-button" type="button" onclick="validarP6();">Enviar</button>
			
			  </form>		    		

		    <p>Você tem alguma dúvida? <a href="mailto:cristina.henrietta.stoll@everis.com?subject=Pesquisa%20LDT%20-%20Parte%206">Entre em contato por e-mail</a>.</p>
			
		</div>    	
</main>

@endsection
