@extends('layouts.app')

@section('pageTitle', 'Parte 1 - ')

@section('content')
<main id="main-content">	
		<div class="usa-width-one-whole">

			<h1>Parte 1: Sobre você</h1>

			    <form name="parte1" class="usa-form-large" action="{{ url('/parte1') }}" method="post">     
					
					@csrf	
							        
			        <div class="pergunta">
				        <label for="anonascimento" id="anoNascimento">1.1 Qual ano você nasceu?</label>
				        <select name="ano_nascimento" id="anonascimento" required>
				        	<option value="">Selecione</option>
					        <option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
							<option value="2000">2000</option>
							<option value="1999">1999</option>
							<option value="1998">1998</option>
							<option value="1997">1997</option>
							<option value="1996">1996</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>
							<option value="1990">1990</option>
							<option value="1989">1989</option>
							<option value="1988">1988</option>
							<option value="1987">1987</option>
							<option value="1986">1986</option>
							<option value="1985">1985</option>
							<option value="1984">1984</option>
							<option value="1983">1983</option>
							<option value="1982">1982</option>
							<option value="1981">1981</option>
							<option value="1980">1980</option>
							<option value="1979">1979</option>
							<option value="1978">1978</option>
							<option value="1977">1977</option>
							<option value="1976">1976</option>
							<option value="1975">1975</option>
							<option value="1974">1974</option>
							<option value="1973">1973</option>
							<option value="1972">1972</option>
							<option value="1971">1971</option>
							<option value="1970">1970</option>
							<option value="1969">1969</option>
							<option value="1968">1968</option>
							<option value="1967">1967</option>
							<option value="1966">1966</option>
							<option value="1965">1965</option>
							<option value="1964">1964</option>
							<option value="1963">1963</option>
							<option value="1962">1962</option>
							<option value="1961">1961</option>
							<option value="1960">1960</option>
							<option value="1959">1959</option>
							<option value="1958">1958</option>
							<option value="1957">1957</option>
							<option value="1956">1956</option>
							<option value="1955">1955</option>
							<option value="1954">1954</option>
							<option value="1953">1953</option>
							<option value="1952">1952</option>
							<option value="1951">1951</option>
							<option value="1950">1950</option>
							<option value="1949">1949</option>
							<option value="1948">1948</option>
							<option value="1947">1947</option>
							<option value="1946">1946</option>
							<option value="1945">1945</option>
							<option value="1944">1944</option>
							<option value="1943">1943</option>
							<option value="1942">1942</option>
							<option value="1941">1941</option>
							<option value="1940">1940</option>
							<option value="1939">1939</option>
							<option value="1938">1938</option>
							<option value="1937">1937</option>
							<option value="1936">1936</option>
							<option value="1935">1935</option>
							<option value="1934">1934</option>
							<option value="1933">1933</option>
							<option value="1932">1932</option>
							<option value="1931">1931</option>
							<option value="1930">1930</option>
							<option value="1929">1929</option>
							<option value="1928">1928</option>
							<option value="1927">1927</option>
							<option value="1926">1926</option>
							<option value="1925">1925</option>
							<option value="1924">1924</option>
							<option value="1923">1923</option>
							<option value="1922">1922</option>
							<option value="1921">1921</option>
							<option value="1920">1920</option>
							<option value="1919">1919</option>
							<option value="1918">1918</option>
				        </select>
			        </div>
			
			        <div class="pergunta">
				        <label for="genero" id="Genero">1.2 Qual é o seu gênero?</label>
				        <select name="genero" id="genero" required>
				        	<option value="">Selecione</option>
				        	<option value="homem">Homem</option>
				        	<option value="mulher">Mulher</option>
				        	<option value="outro">Outro</option>
				        	<option value="semresposta">Não quero responder</option>
				        </select>
			        </div>
			
			        <div class="pergunta">
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
			        </div>
			
			        <div class="pergunta">
				        <label for="escolaridade" id="Escolaridade">1.4 Qual o seu nível de escolaridade?</label>
				        <select name="escolaridade" id="escolaridade">
				        	<option value="">Selecione</option>
				        	<option value="ef-incompleto">Fundamental incompleto</option>
				        	<option value="ef-completo">Fundamental completo</option>
				        	<option value="em-incompleto">Ensino médio incompleto</option>
				        	<option value="em-completo">Ensino médio completo</option>
				        	<option value="es-incompleto">Superior incompleto</option>
				        	<option value="es-completo">Superior completo</option>
				        	<option value="pgl-incompleta">Pós-graduação (lato senso) incompleta</option>	
				        	<option value="pgl-completa">Pós-graduação (lato senso) completa</option>	
				        	<option value="pgm-incompleta">Pós-graduação (nível mestrado) incompleta</option>	
				        	<option value="pgm-completa">Pós-graduação (nível mestrado) completa</option>				        	
				        	<option value="pgd-incompleta">Pós-graduação (nível doutorado) incompleta</option>	
				        	<option value="pgd-completa">Pós-graduação (nível doutorado) completa</option>        				        	
				        	<option value="semresposta">Não quero responder</option>
				        </select>
			        </div>
			
			        <div class="pergunta">
				    	<label id="Deficiencias" tabindex="0">1.5 Qual(is) deficiência(s) você possui?</label>
				    	 <ul class="usa-unstyled-list">
				    	    <li>
				    	      <input id="deficienciacegueira" type="radio" name="deficiencia[]" value="cegueira" onclick="CHK();" onKeyPress="CHK();"  aria-label="não selecionado cegueira">
				    	      <label for="deficienciacegueira">Cegueira</label>
				    	    </li>
				    	    <li>
				    	      <input id="deficienciabaixavisao" type="radio" name="deficiencia[]" value="baixa-visao" onclick="CHK();" onKeyPress="CHK();" aria-label="baixa visão não selecionado">
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
			        </div>
			
			        <button class="usa-button" type="button" onclick="validarP1();">Continuar</button>
		           
				</form>

		    <p>Você tem alguma dúvida? <a href="mailto:cristina.henrietta.stoll@everis.com?subject=Pesquisa%20LDT%20-%20Parte%201">Entre em contato por e-mail</a>.</p>
			
		</div>
</main>

@endsection 
