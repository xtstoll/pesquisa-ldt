@extends('layouts.app')

@section('pageTitle', 'Parte 1')

@section('content')
<main id="main-content">
	
	<section class="usa-grid usa-section">

		<div class="usa-width-one-whole">

			<h1>Parte 1: Sobre você</h1>

			    <form class="usa-form-large" action="{{ url('/parte1') }}" method="post">     
			      <fieldset>
			        
			        <label for="ano_nascimento">1.1 Qual ano você nasceu?</label>
			        <input id="ano_nascimento" name="ano_nascimento" type="number" min="1918" max="2018" placeholder="Ano de nascimento" required>
			
			        <label for="genero">1.2 Qual é o seu gênero?</label>
			        <select name="genero" id="genero" required>
			        	<option value="">Selecione</option>
			        	<option value="homem">Homem</option>
			        	<option value="mulher">Mulher</option>
			        	<option value="outro">Outro</option>
			        	<option value="semresposta">Não quero responder</option>
			        </select>
			
			        <label for="estado">1.3 Em qual estado você mora?</label>
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
			
			        <label for="escolaridade">1.4 Qual o seu nível de escolaridade?</label>
			        <select name="escolaridade" id="escolaridade">
			        	<option value="">Selecione</option>
			        	<option value="ef-incompleto">Fundamental incompleto</option>
			        	<option value="ef-completo">Fundamental completo</option>
			        	<option value="em-incompleto">Ensino médio incompleto</option>
			        	<option value="em-completo">Ensino médio completo</option>
			        	<option value="es-incompleto">Superior incompleto</option>
			        	<option value="es-completo">Superior completo</option>
			        	<option value="pg">Pós-graduação</option>	
						<option value="mestrado">Mestrado</option>
						<option value="doutorado">Doutorado</option>
			        	<option value="semresposta">Não quero responder</option>
			        </select>
			
			    	<label>1.5 Qual(is) deficiência(s) você possui?</label>
			    	 <ul class="usa-unstyled-list">
			    	    <li>
			    	      <input id="deficiencia-cegueira" type="checkbox" name="deficiencia[]" value="cegueira">
			    	      <label for="deficiencia-cegueira">Cegueira</label>
			    	    </li>
			    	    <li>
			    	      <input id="deficiencia-baixa-visao" type="checkbox" name="deficiencia[]" value="baixa-visao">
			    	      <label for="deficiencia-baixa-visao">Baixa visão</label>
			    	    </li>
			    	    <li>
			    	      <input id="deficiencia-cognitiva" type="checkbox" name="deficiencia[]" value="cognitiva">
			    	      <label for="deficiencia-cognitiva">Cognitiva</label>
			    	    </li> 
			    	    <li>
			    	      <input id="deficiencia-auditiva" type="checkbox" name="deficiencia[]" value="auditiva">
			    	      <label for="deficiencia-auditiva">Auditiva</label>
			    	    </li>
			    	    <li>
			    	      <input id="deficiencia-motora" type="checkbox" name="deficiencia[]" value="motora">
			    	      <label for="deficiencia-motora">Motora</label>
			    	    </li> 
			            <li>
			              <input id="deficiencia-outra" type="checkbox" name="deficiencia[]" value="outra">
			              <label for="deficiencia-outra">Outra</label>
			            </li>  
			    	    <li>
			    	      <input id="deficiencia-nenhuma" type="checkbox" name="deficiencia[]" value="nenhuma">
			    	      <label for="deficiencia-nenhuma">Nenhuma</label>
			    	    </li>            
			    	  </ul>
			
			        <button class="usa-button" type="submit">Continuar</button>
		       
		       </fieldset>      
		    </form>
			
			</div>
    	</section>
</main>

@endsection
