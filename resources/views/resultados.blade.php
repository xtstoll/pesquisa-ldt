@extends('layouts.app')

@section('content')

<main id="main-content">
	<div class="usa-grid">	
		<div class="usa-width-one-whole">
			
			<h1>Resultados da Pesquisa do Uso de Leitores de Tela</h1>
			
			<h2>Parte 1</h2>
			
				<h3>Qual ano você nasceu?</h3>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>25 a 29 anos</td><td>62</td><td>19,9%</td></tr>
				 <tr><td>30 a 34 anos</td><td>56</td><td>17,9%</td></tr>
				 <tr><td>35 a 39 anos</td><td>43</td><td>13,8%</td></tr>
				 <tr><td>20 a 24 anos</td><td>37</td><td>11,9%</td></tr>
				 <tr><td>40 a 44 anos</td><td>31</td><td>9,9%</td></tr>
				 <tr><td>45 a 49 anos</td><td>31</td><td>9,9%</td></tr>
				 <tr><td>15 a 19 anos</td><td>19</td><td>6,1%</td></tr>
				 <tr><td>50 a 54 anos</td><td>18</td><td>5,8%</td></tr>
				 <tr><td>55 a 59 anos</td><td>7</td><td>2,2%</td></tr>
				 <tr><td>60 a 64 anos</td><td>5</td><td>1,6%</td></tr>
				 <tr><td>10 a 14 anos</td><td>1</td><td>0,3%</td></tr>
				 <tr><td>65 a 69 anos</td><td>1</td><td>0,3%</td></tr>
				 <tr><td>70 a 74 anos</td><td>1</td><td>0,3%</td></tr>
				</tbody></table>

				<h3>Qual é o seu gênero?</h3>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Homem</td><td>197</td><td>63,1%</td></tr>
				 <tr><td>Mulher</td><td>112</td><td>35,9%</td></tr>
				 <tr><td>Não quero responder</td><td>2</td><td>0,6%</td></tr>
				 <tr><td>Outro</td><td>1</td><td>0,3%</td></tr>
				</tbody></table>
				
				<h3>Em qual região você mora?</h3>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Sudeste</td><td>186</td><td>59,6%</td></tr>
				 <tr><td>Nordeste</td><td>61</td><td>19,6%</td></tr>
				 <tr><td>Sul</td><td>40</td><td>12,8%</td></tr>
				 <tr><td>Centro-Oeste</td><td>15</td><td>4,8%</td></tr>
				 <tr><td>Norte</td><td>10</td><td>3,2%</td></tr>
				</tbody></table>
				
				<h3>Qual o seu nível de escolaridade?</h3>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Superior completo</td><td>87</td><td>27,9%</td></tr>
				 <tr><td>Ensino médio completo</td><td>63</td><td>20,2%</td></tr>
				 <tr><td>Superior incompleto</td><td>58</td><td>18,6%</td></tr>
				 <tr><td>Pós-graduação (lato senso) completa</td><td>44</td><td>14,1%</td></tr>
				 <tr><td>Ensino médio incompleto</td><td>16</td><td>5,1%</td></tr>
				 <tr><td>Fundamental incompleto</td><td>11</td><td>3,5%</td></tr>
				 <tr><td>Pós-graduação (lato senso) incompleta</td><td>10</td><td>3,2%</td></tr>
				 <tr><td>Pós-graduação (nível mestrado) completa</td><td>9</td><td>2,9%</td></tr>
				 <tr><td>Fundamental completo</td><td>5</td><td>1,6%</td></tr>
				 <tr><td>Pós-graduação (nível doutorado) completa</td><td>2</td><td>0,6%</td></tr>
				 <tr><td>Pós-graduação (nível doutorado) incompleta</td><td>2</td><td>0,6%</td></tr>
				 <tr><td>Pós-graduação (nível mestrado) incompleta</td><td>2</td><td>0,6%</td></tr>
				 <tr><td>Não quero responder</td><td>3</td><td>1,0%</td></tr>
				</tbody></table>
				
				<h3>Você possui uma deficiência?</h3>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Possui uma deficiência</td><td>288</td><td>92,3%</td></tr>
				 <tr><td>Não possui nenhuma deficiência</td><td>14</td><td>4,5%</td></tr>
				 <tr><td>Possui mais que uma deficiência</td><td>10</td><td>3,2%</td></tr>
				</tbody></table>
				
				<h3>Qual(is) deficiência(s) você possui?</h3>
				<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#disabilitytypes">webaim.org/projects/screenreadersurvey7/#disabilitytypes</a></p>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Cegueira</td><td>235</td><td>72,5%</td></tr>
				 <tr><td>Baixa visão</td><td>60</td><td>18,5%</td></tr>
				 <tr><td>Motora</td><td>7</td><td>2,2%</td></tr>
				 <tr><td>Auditiva</td><td>5</td><td>1,5%</td></tr>
				 <tr><td>Cognitiva</td><td>1</td><td>0,3%</td></tr>
				 <tr><td>Outra</td><td>2</td><td>0,6%</td></tr>
				 <tr><td>Nenhuma</td><td>14</td><td>4,3%</td></tr>
				</tbody></table>
			
			
				
			<h2>Parte 2</h2>
			
				<h3>Qual leitor de tela você mais utiliza para computador / notebook?</h3>
				<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#primary">webaim.org/projects/screenreadersurvey7/#primary</a></p>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>NVDA</td><td>216</td><td>69,2%</td></tr>
				 <tr><td>JAWS</td><td>49</td><td>15,7%</td></tr>
				 <tr><td>VoiceOver</td><td>22</td><td>7,1%</td></tr>
				 <tr><td>Virtual Vision</td><td>6</td><td>1,9%</td></tr>
				 <tr><td>ChromeVox</td><td>3</td><td>1,0%</td></tr>
				 <tr><td>Dosvox</td><td>2</td><td>0,6%</td></tr>
				 <tr><td>ZoomText</td><td>2</td><td>0,6%</td></tr>
				 <tr><td>Outro</td><td>7</td><td>2,2%</td></tr>
				 <tr><td>Não utilizo</td><td>5</td><td>1,6%</td></tr>
				</tbody></table>
				
				<h3>Quando foi a última vez que você atualizou seu leitor de tela para computador / notebook?</h3>
				<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#updates">webaim.org/projects/screenreadersurvey7/#updates</a></p>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Há alguns dias</td><td>176</td><td>56,4%</td></tr>
				 <tr><td>Há alguns meses</td><td>69</td><td>22,1%</td></tr>
				 <tr><td>Há mais de um ano</td><td>25</td><td>8,0%</td></tr>
				 <tr><td>Não tenho costume de atualizar</td><td>22</td><td>7,1%</td></tr>
				 <tr><td>Não tenho certeza</td><td>20</td><td>6,4%</td></tr>
				</tbody></table>
				
				<h3>Qual leitor de tela você mais utiliza para celular / tablet?</h3>
				<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#mobilescreenreaders">webaim.org/projects/screenreadersurvey7/#mobilescreenreaders</a></p>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>TalkBack</td><td>155</td><td>49,7%</td></tr>
				 <tr><td>VoiceOver</td><td>122</td><td>39,1%</td></tr>
				 <tr><td>Mobile Accessibility</td><td>7</td><td>2,2%</td></tr>
				 <tr><td>Shine Plus</td><td>7</td><td>2,2%</td></tr>
				 <tr><td>Voice Assistant</td><td>4</td><td>1,3%</td></tr>
				 <tr><td>Nuance Talks</td><td>2</td><td>0,6%</td></tr>
				 <tr><td>Mobile Speaks</td><td>1</td><td>0,3%</td></tr>
				 <tr><td>Não utilizo nenhum</td><td>14</td><td>4,5%</td></tr>
				</tbody></table>
				
				<h3>Qual opção descreve como você utiliza o seu leitor de tela?</h3>
				<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#usage">webaim.org/projects/screenreadersurvey7/#usage</a></p>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Utilizo somente a fala do leitor de tela</td><td>243</td><td>77,9%</td></tr>
				 <tr><td>Utilizo principalmente a fala do leitor de tela, mas também preciso dos recursos visuais</td><td>41</td><td>13,1%</td></tr>
				 <tr><td>Utilizo principalmente os recursos visuais, mas também preciso da fala do leitor de tela</td><td>12</td><td>3,8%</td></tr>
				 <tr><td>Utilizo somente os recursos visuais</td><td>11</td><td>3,5%</td></tr>
				 <tr><td>Não utilizo nenhum</td><td>5</td><td>1,6%</td></tr>
				</tbody></table>
				
				<h3>Você utiliza mais o leitor de tela do computador / notebook ou do celular / tablet?</h3>
				<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#mobiledesktopusage">webaim.org/projects/screenreadersurvey7/#mobiledesktopusage</a></p>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Utilizo mais o leitor de tela do celular / tablet</td><td>62</td><td>19,9%</td></tr>
				 <tr><td>Utilizo tanto o leitor de tela do computador / notebook quanto o do celular / tablet</td><td>200</td><td>64,1%</td></tr>
				 <tr><td>Utilizo mais o leitor de tela do computador / notebook</td><td>45</td><td>14,4%</td></tr>
				 <tr><td>Não utilizo nenhum</td><td>5</td><td>1,6%</td></tr>
				</tbody></table>
				
				<h3>Como você aprendeu a utilizar seu leitor de tela?</h3>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Sozinho</td><td>125</td><td>40,1%</td></tr>
				 <tr><td>Com amigos</td><td>100</td><td>32,1%</td></tr>
				 <tr><td>Em uma instituição para pessoas com deficiência visual</td><td>70</td><td>22,4%</td></tr>
				 <tr><td>Na escola</td><td>11</td><td>3,5%</td></tr>
				 <tr><td>No trabalho</td><td>6</td><td>1,9%</td></tr>
				</tbody></table>
				
				<h3>Você acha que vale a pena pagar por um leitor de tela?</h3>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Não</td><td>167</td><td>53,5%</td></tr>
				 <tr><td>Sim</td><td>145</td><td>46,5%</td></tr>
				</tbody></table>
				
				
				
			<h2>Parte 3</h2>
			
				<h3>Qual navegador você mais utiliza no seu computador / notebook?</h3>
				<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#browsers">webaim.org/projects/screenreadersurvey7/#browsers</a></p>	
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Chrome</td><td>144</td><td>46,2%</td></tr>
				 <tr><td>Firefox</td><td>100</td><td>32,1%</td></tr>
				 <tr><td>Internet Explorer</td><td>43</td><td>13,8%</td></tr>
				 <tr><td>Safari</td><td>14</td><td>4,5%</td></tr>
				 <tr><td>Edge</td><td>4</td><td>1,3%</td></tr>
				 <tr><td>Outro</td><td>3</td><td>1,0%</td></tr>
				 <tr><td>Não utilizo nenhum</td><td>2</td><td>0,6%</td></tr>
				 <tr><td>Opera</td><td>2</td><td>0,6%</td></tr>
				</tbody></table>
				
				<h3>Qual navegador você mais utiliza no seu celular / tablet?</h3>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Chrome</td><td>166</td><td>53,2%</td></tr>
				 <tr><td>Safari</td><td>116</td><td>37,2%</td></tr>
				 <tr><td>Firefox</td><td>12</td><td>3,8%</td></tr>
				 <tr><td>Outro</td><td>12</td><td>3,8%</td></tr>
				 <tr><td>Não utilizo nenhum</td><td>6</td><td>1,9%</td></tr>
				</tbody></table>
				
				<h3>Ao tentar encontrar informações em uma página da Internet, qual das seguintes opções você costuma utilizar?</h3>
				<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#finding">webaim.org/projects/screenreadersurvey7/#finding</a></p>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Navegar pelos cabeçalhos (tecla H ou números de 1 a 6)</td><td>108</td><td>34,6%</td></tr>
				 <tr><td>Navegar item por item (seta para baixo)</td><td>86</td><td>27,6%</td></tr>
				 <tr><td>Navegar pelos links (Tab ou tecla K)</td><td>83</td><td>26,6%</td></tr>
				 <tr><td>Utilizar a pesquisa da página (Ctrl + F)</td><td>34</td><td>10,9%</td></tr>
				 <tr><td>Navegar pelas marcas/regiões (tecla D ou R)</td><td>1</td><td>0,3%</td></tr>
				</tbody></table>
				
				<h3>Com qual frequência você utiliza os links “ir para conteúdo” ou “ir para o menu” quando estão disponíveis em uma página?</h3>
				<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#skip">webaim.org/projects/screenreadersurvey7/#skip</a></p>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Sempre</td><td>74</td><td>23,7%</td></tr>
				 <tr><td>Frequentemente</td><td>76</td><td>24,4%</td></tr>
				 <tr><td>Às vezes</td><td>77</td><td>24,7%</td></tr>
				 <tr><td>Raramente</td><td>50</td><td>16,0%</td></tr>
				 <tr><td>Nunca</td><td>25</td><td>8,0%</td></tr>
				 <tr><td>Não sei do que se trata</td><td>10</td><td>3,2%</td></tr>
				</tbody></table>
				
				<h3>Com qual frequência você utiliza a navegação pelas marcas / regiões (tecla D ou R) em uma página?</h3>
				<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#landmarks">webaim.org/projects/screenreadersurvey7/#landmarks</a></p>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Sempre</td><td>19</td><td>6,1%</td></tr>
				 <tr><td>Frequentemente</td><td>53</td><td>17,0%</td></tr>
				 <tr><td>Às vezes</td><td>71</td><td>22,8%</td></tr>
				 <tr><td>Raramente</td><td>64</td><td>20,5%</td></tr>
				 <tr><td>Nunca</td><td>74</td><td>23,7%</td></tr>
				 <tr><td>Não sei do que se trata</td><td>31</td><td>9,9%</td></tr>
				</tbody></table>
				
				<h3>Com qual frequência você utiliza as opções de aumentar/diminuir fonte ou alternar contraste, quando estão disponíveis em uma página?</h3>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Sempre</td><td>26</td><td>8,3%</td></tr>
				 <tr><td>Frequentemente</td><td>20</td><td>6,4%</td></tr>
				 <tr><td>Às vezes</td><td>12</td><td>3,8%</td></tr>
				 <tr><td>Raramente</td><td>21</td><td>6,7%</td></tr>
				 <tr><td>Nunca</td><td>225</td><td>72,1%</td></tr>
				 <tr><td>Não sei do que se trata</td><td>8</td><td>2,6%</td></tr>
				</tbody></table>
				
				<h3>Com qual frequência você utiliza as teclas de atalho de um site, quando estão disponíveis? Por exemplo, a tecla P para publicar um novo status no Facebook.</h3>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Sempre</td><td>68</td><td>21,8%</td></tr>
				 <tr><td>Frequentemente</td><td>47</td><td>15,1%</td></tr>
				 <tr><td>Às vezes</td><td>67</td><td>21,5%</td></tr>
				 <tr><td>Raramente</td><td>54</td><td>17,3%</td></tr>
				 <tr><td>Nunca</td><td>56</td><td>17,9%</td></tr>
				 <tr><td>Não sei do que se trata</td><td>20</td><td>6,4%</td></tr>
				</tbody></table>
				
				<h3>Em qual elemento você tem mais dificuldade de navegar?</h3>
				<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#problematic">webaim.org/projects/screenreadersurvey7/#problematic</a></p>
				<ol>
					<li>Imagens CAPTCHA apresentando texto usado para verificar que você não é um robô</li>
					<li>Navegação que não é acessível por teclado</li>
					<li>Campo de busca inacessível ou inexistente</li>
					<li>Imagens sem descrição ou com descrições inadequadas</li>
					<li>Telas ou partes de telas que mudam inesperadamente</li>
					<li>Presença de conteúdo Flash inacessível</li>
					<li>Excesso de links ou itens de navegação</li>
					<li>Cabeçalhos ausentes ou fora da ordem lógica</li>
					<li>Formulários complexos</li>
					<li>Links ou botões que não fazem sentido</li>
					<li>Tabelas complexas</li>
					<li>Falta de links “ir para conteúdo” ou “ir para o menu”</li>
				</ol>
				
				<h3>Quando existem dois ou mais links seguidos, o seu leitor de tela lê todos na mesma linha ou cada link em uma linha separada?</h3>
				<table class="resultados">
				<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>Cada link em uma linha separada</td><td>182</td><td>58,3%</td></tr>
				 <tr><td>Todos os links na mesma linha</td><td>86</td><td>27,6%</td></tr>
				 <tr><td>Não sei do que se trata</td><td>44</td><td>14,1%</td></tr>
				</tbody></table>
				
				
				
			<h2>Parte 4</h2>
			
			<h3>Você utiliza algum teclado virtual braille no seu celular / tablet?</h3>
			<table class="resultados">
			<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
			 <tr><td>Não</td><td>259</td><td>83,5%</td></tr>
			 <tr><td>Sim</td><td>46</td><td>14,8%</td></tr>
			 <tr><td>Não sei do que se trata</td><td>5</td><td>1,6%</td></tr>
			</tbody></table>
			
			<h3>Você utiliza alguma linha braille com seu leitor de tela?</h3>
			<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#braille">webaim.org/projects/screenreadersurvey7/#braille</a></p>
			<table class="resultados">
			<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
			 <tr><td>Não</td><td>288</td><td>92,9%</td></tr>
			 <tr><td>Sim</td><td>18</td><td>5,8%</td></tr>
			 <tr><td>Não sei do que se trata</td><td>4</td><td>1,3%</td></tr>
			</tbody></table>
			
			<h3>Você utiliza algum teclado externo para navegar e digitar no seu celular / tablet?</h3>
			<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#mobilekeyboard">webaim.org/projects/screenreadersurvey7/#mobilekeyboard</a></p>
			<table class="resultados">
			<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
			 <tr><td>Não</td><td>273</td><td>88,1%</td></tr>
			 <tr><td>Sim</td><td>31</td><td>10,0%</td></tr>
			 <tr><td>Não sei do que se trata</td><td>6</td><td>1,9%</td></tr>
			</tbody></table>
			
			<h3>Com qual frequência você utiliza o recurso de digitação por voz no seu celular / tablet?</h3>
			<table class="resultados">
			<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
			 <tr><td>Sempre</td><td>82</td><td>26,5%</td></tr>
			 <tr><td>Frequentemente</td><td>90</td><td>29,0%</td></tr>
			 <tr><td>Às vezes</td><td>78</td><td>25,2%</td></tr>
			 <tr><td>Raramente</td><td>32</td><td>10,3%</td></tr>
			 <tr><td>Nunca</td><td>27</td><td>8,7%</td></tr>
			 <tr><td>Não sei do que se trata</td><td>1</td><td>0,3%</td></tr>
			</tbody></table>
			
				
				
			<h2>Parte 5</h2>
			
			<h3>Você prefere navegar em uma página da Internet pelo computador / notebook ou pelo celular / tablet?</h3>
			<table class="resultados">
			<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
			 <tr><td>Computador / notebook</td><td>160</td><td>54,1%</td></tr>
			 <tr><td>Celular / tablet</td><td>75</td><td>25,3%</td></tr>
			 <tr><td>Não tenho preferência</td><td>61</td><td>20,6%</td></tr>
			</tbody></table>
			
			<h3>Na sua opinião, você acha que a Internet ficou mais acessível desde 2015?</h3>
			<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#progress">webaim.org/projects/screenreadersurvey7/#progress</a></p>
			<table class="resultados">
			<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
			 <tr><td>Sim, ficou mais acessível</td><td>194</td><td>65,5%</td></tr>
			 <tr><td>Continua igual para mim</td><td>86</td><td>29,1%</td></tr>
			 <tr><td>Não, ficou menos acessível</td><td>16</td><td>5,4%</td></tr>
			</tbody></table>
			
			<h3>Você já ouviu falar da LBI (Lei Brasileira de Inclusão, nº 13.146/2015)?</h3>
			<table class="resultados">
			<thead><tr><th>Respostas</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
			 <tr><td>Sim</td><td>248</td><td>83,8%</td></tr>
			 <tr><td>Não</td><td>48</td><td>16,2%</td></tr>
			</tbody></table>
			
			<h3>Qual é o site mais acessível que você utiliza?</h3>
			<ol>
				<li>google.com</li>
				<li>cegosbrasil.net</li>
				<li>facebook.com</li>
				<li>visionvox.com.br</li>
				<li>youtube.com</li>
			</ol>
			
			<h3>Qual é o site menos acessível que você utiliza?</h3>
			<ol>
				<li>facebook.com</li>
				<li>decolar.com.br</li>
				<li>g1.globo.com</li>
				<li>instagram.com</li>
				<li>uol.com.br</li>
			</ol>
			
				
				
			<h2>Correlações</h2>
			
				<h3>Leitor de Tela x Navegador Web</h3>
				<p class="webaim">Compare com a pesquisa da WebAIM: <a href="https://webaim.org/projects/screenreadersurvey7/#browsercombos">webaim.org/projects/screenreadersurvey7/#browsercombos</a></p>
				<table class="resultados">
				<thead><tr><th>Leitor de Tela e Navegador Web</th><th>Participantes</th><th>Porcentagem</th></tr></thead><tbody>
				 <tr><td>NVDA com Chrome</td><td>105</td><td>34,3%</td></tr>
				 <tr><td>NVDA com Firefox</td><td>85</td><td>27,8%</td></tr>
				 <tr><td>JAWS com IE</td><td>19</td><td>6,2%</td></tr>
				 <tr><td>NVDA com IE</td><td>18</td><td>5,9%</td></tr>
				 <tr><td>JAWS com Chrome</td><td>16</td><td>5,2%</td></tr>
				 <tr><td>JAWS com Firefox</td><td>13</td><td>4,2%</td></tr>
				 <tr><td>VoiceOver com Safari</td><td>11</td><td>3,6%</td></tr>
				 <tr><td>VoiceOver com Chrome</td><td>10</td><td>3,3%</td></tr>
				 <tr><td>Outras combinações</td><td>29</td><td>9,5%</td></tr>
				</tbody></table>
				
				<h3>Leitor de Tela x Região</h3>
				<table class="resultados">
				<thead><tr><th>Região</th><th>NVDA</th><th>JAWS</th><th>VoiceOver</th><th>Outros</th></tr></thead><tbody>
				 <tr><td>Centro-Oeste</td><td>80,0%</td><td>13,3%</td><td>0,0%</td><td>6,7%</td></tr>
				 <tr><td>Nordeste</td><td>80,3%</td><td>14,8%</td><td>1,6%</td><td>3,2%</td></tr>
				 <tr><td>Norte</td><td>80,0%</td><td>20,0%</td><td>0,0%</td><td>0%</td></tr>
				 <tr><td>Sul</td><td>75,0%</td><td>17,5%</td><td>5,0%</td><td>2,5%</td></tr>
				 <tr><td>Sudeste</td><td>62,9%</td><td>15,6%</td><td>10,2%</td><td>11,4%</td></tr>
				</tbody></table>
				
				<h3>Leitor de Tela x Idade</h3>
				<table class="resultados">
				<thead><tr><th>Idade</th><th>NVDA</th><th>JAWS</th><th>VoiceOver</th><th>Outros</th></tr></thead><tbody>
				 <tr><td>10 a 14 anos</td><td>100%</td><td>0,0%</td><td>0,0%</td><td>0%</td></tr>
				 <tr><td>65 a 69 anos</td><td>100%</td><td>0,0%</td><td>0,0%</td><td>0%</td></tr>
				 <tr><td>70 a 74 anos</td><td>100%</td><td>0,0%</td><td>0,0%</td><td>0%</td></tr>
				 <tr><td>20 a 24 anos</td><td>94,6%</td><td>5,4%</td><td>0,0%</td><td>0%</td></tr>
				 <tr><td>15 a 19 anos</td><td>84,2%</td><td>5,3%</td><td>5,3%</td><td>5,3%</td></tr>
				 <tr><td>25 a 29 anos</td><td>77,4%</td><td>9,7%</td><td>9,7%</td><td>3,2%</td></tr>
				 <tr><td>30 a 34 anos</td><td>76,8%</td><td>5,4%</td><td>8,9%</td><td>9%</td></tr>
				 <tr><td>45 a 49 anos</td><td>61,3%</td><td>32,3%</td><td>3,2%</td><td>3,2%</td></tr>
				 <tr><td>35 a 39 anos</td><td>58,1%</td><td>23,3%</td><td>7,0%</td><td>11,6%</td></tr>
				 <tr><td>40 a 44 anos</td><td>54,8%</td><td>25,8%</td><td>9,7%</td><td>9,7%</td></tr>
				 <tr><td>50 a 54 anos</td><td>44,4%</td><td>27,8%</td><td>5,6%</td><td>22,3%</td></tr>
				 <tr><td>60 a 64 anos</td><td>20,0%</td><td>40,0%</td><td>40,0%</td><td>0%</td></tr>
				 <tr><td>55 a 59 anos</td><td>14,3%</td><td>28,6%</td><td>0,0%</td><td>57,2%</td></tr>
				</tbody></table>
				
				<h3>Leitor de Tela x Resposta de “Você acha que vale a pena pagar por um leitor de tela?”</h3>
				<table class="resultados">
				<thead><tr><th>Resposta</th><th>Todos</th><th>NVDA</th><th>JAWS</th><th>VoiceOver</th></tr></thead><tbody>
				 <tr><td>Não, não vale a pena pagar</td><td>53,5%</td><td>55,1%</td><td>42,9%</td><td>59,1%</td></tr>
				 <tr><td>Sim, vale a pena pagar</td><td>46,5%</td><td>44,9%</td><td>57,1%</td><td>40,9%</td></tr>
				</tbody></table>
				
				<h3>Resposta de “Como você aprendeu a utilizar seu leitor de tela?” x Região</h3>
				<table class="resultados">
				<thead><tr><th>Resposta</th><th>Brasil</th><th>Sudeste</th><th>Sul</th><th>Nordeste</th><th>Centro-Oeste</th><th>Norte</th></tr></thead><tbody>
				 <tr><td>Sozinho</td><td>40,1%</td><td>41,9%</td><td>42,5%</td><td>27,9%</td><td>53,3%</td><td>50,0%</td></tr>
				 <tr><td>Com amigos</td><td>32,1%</td><td>31,2%</td><td>40,0%</td><td>37,7%</td><td>6,7%</td><td>20,0%</td></tr>
				 <tr><td>Em uma instituição para pessoas com deficiência visual</td><td>22,4%</td><td>21,0%</td><td>12,5%</td><td>32,8%</td><td>26,7%</td><td>20,0%</td></tr>
				 <tr><td>Na escola</td><td>3,5%</td><td>3,8%</td><td>5,0%</td><td>0,0%</td><td>6,7%</td><td>10,0%</td></tr>
				 <tr><td>No trabalho</td><td>1,9%</td><td>2,2%</td><td>0,0%</td><td>1,6%</td><td>6,7%</td><td>0,0%</td></tr>
				</tbody></table>
				
				<h3>Resposta de “Como você aprendeu a utilizar seu leitor de tela?” x Resposta de “Ao tentar encontrar informações em uma página da Internet, qual das seguintes opções você costuma utilizar?”</h3>
				<table class="resultados">
				<thead><tr><th>Resposta</th><th>Cabeçalhos</th><th>Item por item</th><th>Links</th><th>Pesquisa</th><th>Marcas</th></tr></thead><tbody>
				 <tr><td>Sozinho</td><td>45,6%</td><td>22,4%</td><td>20,8%</td><td>11,2%</td><td>0,0%</td></tr>
				 <tr><td>Com amigos</td><td>23,0%</td><td>35,0%</td><td>32,0%</td><td>9,0%</td><td>1,0%</td></tr>
				 <tr><td>Em uma instituição para pessoas com deficiência visual</td><td>34,3%</td><td>25,7%</td><td>30,0%</td><td>10,0%</td><td>0,0%</td></tr>
				 <tr><td>Na escola</td><td>27,3%</td><td>36,4%</td><td>36,4%</td><td>0,0%</td><td>0,0%</td></tr>
				 <tr><td>No trabalho</td><td>16,7%</td><td>16,7%</td><td>0,0%</td><td>66,7%</td><td>0,0%</td></tr>
				</tbody></table>
				
				<h3>Idade x Resposta de “Você utiliza mais o leitor de tela do computador / notebook ou do celular / tablet?”</h3>
				<table class="resultados">
				<thead><tr><th>Idade</th><th>Mais mobile</th><th>Mais desktop</th><th>Ambos</th><th>Não utilizo</th></tr></thead><tbody>
				 <tr><td>55 a 59 anos</td><td>42,9%</td><td>28,6%</td><td>28,6%</td><td>0,0%</td></tr>
				 <tr><td>25 a 29 anos</td><td>22,6%</td><td>8,1%</td><td>69,4%</td><td>0,0%</td></tr>
				 <tr><td>20 a 24 anos</td><td>21,6%</td><td>18,9%</td><td>59,5%</td><td>0,0%</td></tr>
				 <tr><td>30 a 34 anos</td><td>21,4%</td><td>12,5%</td><td>64,3%</td><td>1,8%</td></tr>
				 <tr><td>15 a 19 anos</td><td>21,1%</td><td>15,8%</td><td>63,2%</td><td>0,0%</td></tr>
				 <tr><td>60 a 64 anos</td><td>20,0%</td><td>20,0%</td><td>60,0%</td><td>0,0%</td></tr>
				 <tr><td>35 a 39 anos</td><td>18,6%</td><td>14,0%</td><td>65,1%</td><td>2,3%</td></tr>
				 <tr><td>40 a 44 anos</td><td>16,1%</td><td>19,4%</td><td>61,3%</td><td>3,2%</td></tr>
				 <tr><td>45 a 49 anos</td><td>16,1%</td><td>12,9%</td><td>71,0%</td><td>0,0%</td></tr>
				 <tr><td>50 a 54 anos</td><td>11,1%</td><td>16,7%</td><td>61,1%</td><td>11,1%</td></tr>
				 <tr><td>10 a 14 anos</td><td>0,0%</td><td>100,0%</td><td>0,0%</td><td>0,0%</td></tr>
				 <tr><td>65 a 69 anos</td><td>0,0%</td><td>0,0%</td><td>100,0%</td><td>0,0%</td></tr>
				 <tr><td>70 a 74 anos</td><td>0,0%</td><td>0,0%</td><td>100,0%</td><td>0,0%</td></tr>
				</tbody></table>  
		   		
		</div>
	</div>
</main>

@endsection
