<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Parte 5 - Pesquisa nacional de leitores de tela</title>
  <link rel="stylesheet" href="assets/uswds-1.6.8/css/uswds.min.css">
  <link rel="stylesheet" href="assets/stylesheets/pesquisa.css">
</head>
<body>

<main>
  <h1>Parte 5: Acessibilidade</h1>

  <form class="usa-form-large">
    <fieldset>

      <label for="prefere-web">5.1 Você prefere navegar em uma página da Internet pelo computador / notebook ou pelo celular / tablet?</label>
      <select name="prefere-web" id="prefere-web">
          <option value>Sem resposta</option>
          <option value="prefere-web-desktop">Computador / notebook</option>
          <option value="prefere-web-mobile">Celular / tablet</option>
          <option value="prefere-web-nao">Não tenho nenhuma preferência</option>
      </select>

      <label for="mais-acessivel">5.2 Na sua opinião, você acha que a Internet ficou mais acessível desde 2015?</label>
      <select name="mais-acessivel" id="mais-acessivel">
          <option value>Sem resposta</option>
          <option value="mais-acessivel-sim">Sim, ficou mais acessível</option>
          <option value="mais-acessivel-igual">Continua igual para mim</option>
          <option value="mais-acessivel-nao">Não, ficou menos acessível</option>
        </select>
        
       <label for="lbi">5.3 Você ouviu falar da LBI (Lei Brasileira de Inclusão, nº 13.146/2015)?</label>
       <select name="lbi" id="lbi">
          <option value>Sem resposta</option>
          <option value="lbi-sim">Sim</option>
          <option value="lbi-nao">Não</option>
       </select>        

      <label for="site-acessivel">5.4 Qual é o site mais acessível que você utiliza?</label>
        <input id="site-acessivel" name="site-acessivel" type="text">

      <label for="site-inacessivel">5.5 Qual é o site menos acessível que você utiliza?</label>
        <input id="site-inacessivel" name="site-inacessivel" type="text">

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button">Continuar</button>

     </fieldset>      
  </form>
</main>

<script src="assets/uswds-1.0.0/js/uswds.min.js"></script>
</body>
</html>
