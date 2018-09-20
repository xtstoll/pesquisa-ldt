<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Parte 4 - Pesquisa nacional de leitores de tela</title>
  <link rel="stylesheet" href="assets/uswds-1.6.8/css/uswds.min.css">
  <link rel="stylesheet" href="assets/stylesheets/pesquisa.css">
</head>
<body>

<main>
    <h1>Parte 4: Teclados</h1>

    <form class="usa-form-large">
      <fieldset>

        <label for="braille-virtual">4.1 Você utiliza algum teclado virtual em braille no seu celular / tablet? <em>Por exemplo, Entrada via Braille do iOS ou o aplicativo Soft Braille Keyboard do Android.</em></label>    
        <select name="braille-virtual" id="braille-virtual">
            <option value>Sem resposta</option>
            <option value="braille-virtual-sim">Sim</option>
            <option value="braille-virtual-sim">Não</option>
        </select>

        <label for="braille-linha">4.2 Você utiliza alguma linha braille com seu leitor de tela?</label>    
        <select name="braille-linha" id="braille-linha">
            <option value>Sem resposta</option>
            <option value="braille-linha-sim">Sim</option>
            <option value="braille-linha-sim">Não</option>
        </select>

        <label for="teclado-externo">4.3 Você utiliza algum teclado externo para navegar e digitar no seu celular / tablet?</label>    
        <select name="teclado-externo" id="teclado-externo">
            <option value>Sem resposta</option>
            <option value="teclado-externo-sim">Sim</option>
            <option value="teclado-externo-sim">Não</option>
        </select>

        <label for="digitacao-voz">4.4 Com qual frequência você utiliza o recurso de digitação por voz no seu celular / tablet?</label>    
        <select name="digitacao-voz" id="digitacao-voz">
            <option value>Sem resposta</option>
            <option value="digitacao-voz-sempre">Sempre</option>
            <option value="digitacao-voz-frequentemente">Frequentemente</option>
            <option value="digitacao-voz-asvezes">Às vezes</option>
            <option value="digitacao-voz-raramente">Raramente</option>
            <option value="digitacao-voz-nunca">Nunca</option>
            <option value="digitacao-voz-naosei">Não sei o que isso trata</option>
        </select>

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button">Continuar</button>
       
       </fieldset>      
    </form>
</main>

<script src="assets/uswds-1.0.0/js/uswds.min.js"></script>
</body>
</html>
