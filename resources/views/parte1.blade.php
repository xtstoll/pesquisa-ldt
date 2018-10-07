@extends('layouts.app')

@section('pageTitle', 'Parte 1 - ')

@section('content')
<main id="main-content">	
		<div class="usa-width-one-whole">

			<h1>Parte 1: Sobre você</h1>

			    <form name="parte1" class="usa-form-large" action="{{ url('/parte1') }}" method="post">     
@csrf			        
			        <label for="anonascimento" id="anoNascimento">1.1 Qual ano você nasceu?</label>
			        <input id="anonascimento" name="ano_nascimento" type="number" placeholder="Ano de nascimento" required>
			
			        <label for="genero" id="Genero">1.2 Qual é o seu gênero?</label>
			        <select name="genero" id="genero" required>
			        	<option value="">Selecione</option>
			        	<option value="homem">Homem</option>
			        	<option value="mulher">Mulher</option>
			        	<option value="outro">Outro</option>
			        	<option value="semresposta">Não quero responder</option>
			        </select>
			
			        <label for="estado" id="Estado">1.3 Em qual estado você mora?</label>
			        <select name="estado" id="estado" required>
			        	<option value="">Selecione</option>
			        	<option value="AC">Acre</option>
			        	<option value="AL">Alagoas</option>
			        	<option value="AP">Amapá</option>
			        	<option value="AM">Amazonas</option>
			        	<option value="BA">Bahia</option>
			        	<option value="CE">Ceará</option>
			        	<option value="DF">Distrito Federal</option>
			        	<option value="ES">Espírito Santo</option>
			        	<option value="GO">Goiás</option>
			        	<option value="MA">Maranhão</option>
			        	<option value="MT">Mato Grosso</option>
			        	<option value="MS">Mato Grosso do Sul</option>    	
			        	<option value="MG">Minas Gerais</option>
			        	<option value="PA">Pará</option>
			        	<option value="PB">Paraíba</option>   
			        	<option value="PR">Paraná</option>
			        	<option value="PE">Pernambuco</option>
			        	<option value="PI">Piauí</option> 
			        	<option value="RJ">Rio de Janeiro</option>
			        	<option value="RN">Rio Grande do Norte</option>
			        	<option value="RS">Rio Grande do Sul</option> 
			        	<option value="RO">Rondônia</option>
			        	<option value="RR">Roraima</option>
			        	<option value="RS">Santa Catarina</option> 
			        	<option value="SP">São Paulo</option>
			        	<option value="SE">Sergipe</option>
			        	<option value="TO">Tocantins</option>
			        </select>    
			
			        <label for="escolaridade" id="Escolaridade">1.4 Qual o seu nível de escolaridade?</label>
			        <select name="escolaridade" id="escolaridade">
			        	<option value="">Selecione</option>
			        	<option value="ef-incompleto">Fundamental incompleto</option>
			        	<option value="ef-completo">Fundamental completo</option>
			        	<option value="em-incompleto">Ensino médio incompleto</option>
			        	<option value="em-completo">Ensino médio completo</option>
			        	<option value="es-incompleto">Superior incompleto</option>
			        	<option value="es-completo">Superior completo</option>
			        	<option value="pg-incompleta">Pós-graduação (lato senso) incompleta</option>	
			        	<option value="pg-completa">Pós-graduação (lato senso) completa</option>	
			        	<option value="pgm-incompleta">Pós-graduação (nível mestrado) incompleta</option>	
			        	<option value="pgm-completa">Pós-graduação (nível mestrado) completa</option>				        	
			        	<option value="pgd-incompleta">Pós-graduação (nível doutorado) incompleta</option>	
			        	<option value="pgd-completa">Pós-graduação (nível doutorado) completa</option>        				        	
			        	<option value="semresposta">Não quero responder</option>
			        </select>
			
			    	<label id="Deficiencias">1.5 Qual(is) deficiência(s) você possui?</label>
			    	 <ul class="usa-unstyled-list">
			    	    <li>
			    	      <input id="deficienciacegueira" role="checkbox" type="checkbox" name="deficiencia[]" value="cegueira" onclick="CHK();" onKeyPress="CHK();"  aria-label="não selecionado cegueira" aria-describedby="Deficiencias">
			    	      <label for="deficienciacegueira">Cegueira</label>
			    	    </li>
			    	    <li>
			    	      <input id="deficienciabaixavisao" type="checkbox" name="deficiencia[]" value="baixa-visao" role="checkbox" onclick="CHK();" onKeyPress="CHK();" aria-label="baixa visão não selecionado">
			    	      <label for="deficienciabaixavisao">Baixa visão</label>
			    	    </li>
			    	    <li>
			    	      <input id="deficienciacognitiva" type="checkbox" name="deficiencia[]" value="cognitiva" role="checkbox" onclick="CHK();" onKeyPress="CHK();" aria-label="deficiência cognitiva não selecionado">
			    	      <label for="deficienciacognitiva">Cognitiva</label>
			    	    </li> 
			    	    <li>
			    	      <input id="deficienciaauditiva" type="checkbox" name="deficiencia[]" value="auditiva" role="checkbox" onclick="CHK();" onKeyPress="CHK();" aria-label="deficiência alditiva não selecionado">
			    	      <label for="deficienciaauditiva">Auditiva</label>
			    	    </li>
			    	    <li>
			    	      <input id="deficienciamotora" type="checkbox" name="deficiencia[]" value="motora" role="checkbox" onclick="CHK();" onKeyPress="CHK();" aria-label="deficiência motora não selecionado">
			    	      <label for="deficienciamotora">Motora</label>
			    	    </li> 
			            <li>
			              <input id="deficienciaoutra" type="checkbox" name="deficiencia[]" value="outra" role="checkbox" onclick="CHK();" onKeyPress="CHK();" aria-label="outra deficiência não selecionado">
			              <label for="deficienciaoutra">Outra</label>
			            </li>  
			    	    <li>
			    	      <input id="deficiencianenhuma" type="checkbox" name="deficiencia[]" value="nenhuma" role="checkbox" onclick="CHK();" onKeyPress="CHK();" aria-label="nenhuma deficiência não selecionado">
			    	      <label for="deficiencianenhuma">Nenhuma</label>
			    	    </li>            
			    	  </ul>
			
			        <button class="usa-button" type="button" onclick="validarP1();">Continuar</button>
		           
				</form>

		    <p>Você tem alguma dúvida? <a href="mailto:cristina.henrietta.stoll@everis.com?subject=Pesquisa%20LDT%20-%20Parte%201">Entre em contato por e-mail</a>.</p>
			
			</div>
</main>

@endsection 
