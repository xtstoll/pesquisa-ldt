@extends('layouts.app')

@section('content')

<main>
    <h1>Parte 3: Navegação na Internet</h1>

    <form class="usa-form-large">
      <fieldset>

        <label for="navegador-desktop">3.1 Qual navegador você mais utiliza no seu computador / notebook?</label>    
        <select name="navegador-desktop" id="navegador-desktop">
            <option value>Sem resposta</option>
            <option value="navegador-desktop-chrome">Chrome</option>
            <option value="navegador-desktop-edge">Edge</option>
            <option value="navegador-desktop-firefox">Firefox</option>
            <option value="navegador-desktop-ie">Internet Explorer</option>
            <option value="navegador-desktop-opera">Opera</option>
            <option value="navegador-desktop-safari">Safari</option>
            <option value="navegador-desktop-outro">Outro</option>
        </select>

        <label for="navegador-mobile">3.2 Qual navegador você mais utiliza no seu celular / tablet?</label>    
        <select name="navegador-mobile" id="navegador-mobile">
            <option value>Sem resposta</option>        
            <option value="navegador-mobile-chrome">Chrome</option>
            <option value="navegador-mobile-firefox">Firefox</option>
            <option value="navegador-mobile-safari">Safari</option>
            <option value="navegador-mobile-outro">Outro</option>
        </select>

        <label for="nav-encontrar">3.3 Ao tentar encontrar informações em uma página da Internet, qual das seguintes opções você costuma utilizar?</label>
        <select name="nav-encontrar" id="nav-encontrar">
            <option value>Sem resposta</option>
            <option value="nav-encontrar-cabecalhos">Navegar pelos cabeçalhos (tecla H ou números de 1 a 6)</option>
            <option value="nav-encontrar-pesquisa">Utilizar a pesquisa da página (Ctrl + F)</option>
            <option value="nav-encontrar-links">Navegar pelos links (Tab ou tecla K)</option>
            <option value="nav-encontrar-marcas">Navegar pelos marcas/regiões (tecla D ou R)</option>
            <option value="nav-encontrar-item">Navegar item por item (seta para baixo)</option>
        </select>

        <label for="nav-irpara">3.4 Com qual frequência você utiliza os links “ir para conteúdo” ou “ir para o menu” quando estão disponíveis em uma página?</label>
        <select name="nav-irpara" id="nav-irpara">
            <option value>Sem resposta</option>
            <option value="nav-irpara-sempre">Sempre</option>
            <option value="nav-irpara-frequentemente">Frequentemente</option>
            <option value="nav-irpara-asvezes">Às vezes</option>
            <option value="nav-irpara-raramente">Raramente</option>
            <option value="nav-irpara-nunca">Nunca</option>
            <option value="nav-irpara-naosei">Não sei do que se trata</option>
        </select>

        <label for="nav-marcas">3.5 Com qual frequência você utiliza a navegação pelas marcas / regiões (tecla D ou R) em uma página?</label>
        <select name="nav-marcas" id="nav-marcas">
            <option value>Sem resposta</option>
            <option value="nav-marcas-sempre">Sempre</option>
            <option value="nav-marcas-frequentemente">Frequentemente</option>
            <option value="nav-marcas-asvezes">Às vezes</option>
            <option value="nav-marcas-raramente">Raramente</option>
            <option value="nav-marcas-nunca">Nunca</option>
            <option value="nav-marcas-naosei">Não sei do que se trata</option>
        </select>
        
        <label for="nav-barra">3.6 Com qual frequência você utiliza as opções de aumentar/diminuir fonte ou alternar contraste, quando estão disponíveis em uma página?</label>
        <select name="nav-barra" id="nav-barra">
            <option value>Sem resposta</option>
            <option value="nav-barra-sempre">Sempre</option>
            <option value="nav-barra-frequentemente">Frequentemente</option>
            <option value="nav-barra-asvezes">Às vezes</option>
            <option value="nav-barra-raramente">Raramente</option>
            <option value="nav-barra-nunca">Nunca</option>
            <option value="nav-barra-naosei">Não sei do que se trata</option>
        </select> 
        
        <label for="nav-teclas">3.7 Com qual frequência você utiliza as teclas de atalho de um site, quando estão disponíveis? Por exemplo, a tecla P para publicar um novo status no Facebook.</label>
        <select name="nav-teclas" id="nav-teclas">
            <option value>Sem resposta</option>
            <option value="nav-teclas-sempre">Sempre</option>
            <option value="nav-teclas-frequentemente">Frequentemente</option>
            <option value="nav-teclas-asvezes">Às vezes</option>
            <option value="nav-teclas-raramente">Raramente</option>
            <option value="nav-teclas-nunca">Nunca</option>
            <option value="nav-teclas-naosei">Não sei do que se trata</option>
        </select>
        
        <label for="nav-dificil">3.8 Em qual elemento você tem mais dificuldade de navegar?</label>
        <select name="nav-dificil" id="nav-dificil">
            <option value>Sem resposta</option>
            <option value="nav-dificil-busca">Campo de busca inacessível ou inexistente</option>
            <option value="nav-dificil-cabecalhos">Cabeçalhos ausentes ou fora da ordem lógica</option>
            <option value="nav-dificil-excesso">Excesso de links ou itens de navegação</option>
            <option value="nav-dificil-irlinks">Falta de links “ir para conteúdo” ou “ir para o menu”</option>
            <option value="nav-dificil-formularios">Formulários complexos</option>
            <option value="nav-dificil-captcha">Imagens CAPTCHA apresentando texto usado para verificar que você não é um robô</option>
            <option value="nav-dificil-imagens">Imagens sem descrição ou com descrições inadequadas</option>
            <option value="nav-dificil-linksbotoes">Links ou botões que não fazem sentido</option>
            <option value="nav-dificil-teclado">Navegação que não é acessível por teclado</option>
            <option value="nav-dificil-flash">Presença de conteúdo Flash inacessível</option>
            <option value="nav-dificil-tabelas">Tabelas complexas</option>
            <option value="nav-dificil-mudam">Telas ou partes de telas que mudam inesperadamente</option>
        </select>         

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button">Continuar</button>
       
       </fieldset>        
    </form>
</main>

@endsection
