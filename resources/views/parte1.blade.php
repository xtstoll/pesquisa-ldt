@extends('layouts.app')

@section('content')
<main>
    <h1>Parte 1: Sobre você</h1>

    <form class="usa-form-large">     
      <fieldset>
        
        <label for="idade">1.1 Qual é a sua idade?</label>
        <input id="idade" name="idade" type="number" min="1" max="100">

        <label for="genero">1.2 Qual é o seu gênero?</label>
        <select name="genero" id="genero">
        	<option value>Sem resposta</option>
        	<option value="genero-homem">Homem</option>
        	<option value="genero-mulher">Mulher</option>
        	<option value="genero-outro">Outro</option>
        </select>

        <label for="estado">1.3 Em qual estado você mora?</label>
        <select name="estado" id="estado">
        	<option value>Sem resposta</option>
        	<option value="estado-AC">Acre</option>
        	<option value="estado-AL">Alagoas</option>
        	<option value="estado-AP">Amapá</option>
        	<option value="estado-AM">Amazonas</option>
        	<option value="estado-BA">Bahia</option>
        	<option value="estado-CE">Ceará</option>
        	<option value="estado-DF">Distrito Federal</option>
        	<option value="estado-ES">Espírito Santo</option>
        	<option value="estado-GO">Goiás</option>
        	<option value="estado-MA">Maranhão</option>
        	<option value="estado-MT">Mato Grosso</option>
        	<option value="estado-MS">Mato Grosso do Sul</option>    	
        	<option value="estado-MG">Minas Gerais</option>
        	<option value="estado-PA">Pará</option>
        	<option value="estado-PB">Paraíba</option>   
        	<option value="estado-PR">Paraná</option>
        	<option value="estado-PE">Pernambuco</option>
        	<option value="estado-PI">Piauí</option> 
        	<option value="estado-RJ">Rio de Janeiro</option>
        	<option value="estado-RN">Rio Grande do Norte</option>
        	<option value="estado-RS">Rio Grande do Sul</option> 
        	<option value="estado-RO">Rondônia</option>
        	<option value="estado-RR">Roraima</option>
        	<option value="estado-RS">Santa Catarina</option> 
        	<option value="estado-SP">São Paulo</option>
        	<option value="estado-SE">Sergipe</option>
        	<option value="estado-TO">Tocantins</option>
        </select>    

        <label for="escolaridade">1.4 Qual o seu nível de escolaridade?</label>
        <select name="escolaridade" id="escolaridade">
        	<option value>Sem resposta</option>
        	<option value="escolaridade-ef-incompleto">Fundamental incompleto</option>
        	<option value="escolaridade-ef-completo">Fundamental completo</option>
        	<option value="escolaridade-em-incompleto">Ensino médio incompleto</option>
        	<option value="escolaridade-em-completo">Ensino médio completo</option>
        	<option value="escolaridade-es-incompleto">Superior incompleto</option>
        	<option value="escolaridade-es-completo">Superior completo</option>
        	<option value="escolaridade-pg-incompleto">Pós-graduação incompleto</option>
        	<option value="escolaridade-pg-completo">Pós-graduação completo</option>
        </select>

    	<label>1.5 Qual(is) deficiência(s) você possui?</label>
    	 <ul class="usa-unstyled-list">
    	    <li>
    	      <input id="deficiencia-cegueira" type="checkbox" name="deficiencia-cegueira" value="deficiencia-cegueira">
    	      <label for="deficiencia-cegueira">Cegueira</label>
    	    </li>
    	    <li>
    	      <input id="deficiencia-baixa-visao" type="checkbox" name="deficiencia-baixa-visao" value="deficiencia-baixa-visao">
    	      <label for="deficiencia-baixa-visao">Baixa visão</label>
    	    </li>
    	    <li>
    	      <input id="deficiencia-cognitiva" type="checkbox" name="deficiencia-cognitiva" value="deficiencia-cognitiva">
    	      <label for="deficiencia-cognitiva">Cognitiva</label>
    	    </li> 
    	    <li>
    	      <input id="deficiencia-auditiva" type="checkbox" name="deficiencia-auditiva" value="deficiencia-auditiva">
    	      <label for="deficiencia-auditiva">Auditiva</label>
    	    </li>
    	    <li>
    	      <input id="deficiencia-motora" type="checkbox" name="deficiencia-motora" value="deficiencia-motora">
    	      <label for="deficiencia-motora">Motora</label>
    	    </li> 
            <li>
              <input id="deficiencia-outra" type="checkbox" name="deficiencia-outra" value="deficiencia-outra">
              <label for="deficiencia-outra">Outra</label>
            </li>  
    	    <li>
    	      <input id="deficiencia-nenhuma" type="checkbox" name="deficiencia-nenhuma" value="deficiencia-nenhuma">
    	      <label for="deficiencia-enhuma">Nenhuma</label>
    	    </li>            
    	  </ul>

        <button class="usa-button">Continuar</button>
       
       </fieldset>      
    </form>
</main>

@endsection