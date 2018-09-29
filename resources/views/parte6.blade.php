@extends('layouts.app')

@section('pageTitle', 'Parte 6')

@section('content')

<main id="main-content">
	<section class="usa-grid usa-section">
		<div class="usa-width-one-whole">	
		
		  <h1>Parte 6: Conclusão</h1>
			
			  <form name="parte6" class="usa-form-large" action="{{ url('/parte6') }}" method="post" >
			    <fieldset>
			
	@if(false)
	@else		
			<label for="sorteio" id="Sorteio">Quer ter a oportunidade de receber um prêmio para sua participação nesta pesquisa?</label>       
			       <select name="sorteio" id="sorteio" required>
			          <option value="">Selecione</option>
			          <option value="sim">Sim</option>
			          <option value="não">Não</option>
			        </select>
			
			       <label for="publicarmos" id="Publicarmos">Quer receber um e-mail quando publicarmos os resultados da pesquisa?</label>       
			       <select name="publicada" id="publicarmos" required>
			          <option value="">Selecione</option>
			          <option value="sim">Sim</option>
			          <option value="não">Não</option>
			        </select>  
	@endif
			
			        <label for="email" id="Email">Qual o seu e-mail?</label>
			        <input id="email" name="email" onblur="validarMail(parte6.email);"  type="email" maxlength="100" required>             
			
			        <label for="nome" id="Nome">Qual o seu nome?</label>
			        <input id="nome" name="nome" type="text" required>     
			
			        <label for="pesquisa" id="Pesquisa">O que você achou da pesquisa?</label>
			        <input id="pesquisa" name="opniao" type="text" required>  
			        
			        <button class="usa-button-secondary">Voltar</button>
			        <button class="usa-button" type="button" onclick="validarP6();">Enviar</button>
			
			     </fieldset>      
			  </form>		    		

		    <p>Há uma dúvida? <a href="mailto:cristina.henrietta.stoll@everis.com?subject=Pesquisa%20LDT">Entre em contato por e-mail</a>.</p>
		    <p>Copyright 2018 &copy; everis</p>

		</div>    	
    </section>
</main>

@endsection
