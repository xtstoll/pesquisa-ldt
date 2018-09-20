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
          <option value="prefere-web-nao">Não tenho uma preferência</option>
      </select>

      <label for="mais-acessivel">5.2 Na sua opinião, você acha que a Internet ficou mais acessível depois que entrou em vigor a LBI (Lei Brasileira de Inclusão, nº 13.146/2015)?</label>
      <select name="mais-acessivel" id="mais-acessivel">
          <option value>Sem resposta</option>
          <option value="mais-acessivel-sim">Sim, ficou mais acessível</option>
          <option value="mais-acessivel-igual">Continua igual para mim</option>
          <option value="mais-acessivel-nao">Não, ficou menos acessível</option>
        </select>

      <label for="setor-acessivel">5.3 Qual é o setor que possui sites mais acessíveis para você?</label>
      <select name="setor-acessivel" id="setor-acessivel">
          <option value>Sem resposta</option>
          <option value="setor-acessivel-educacao">Educação</option>
          <option value="setor-acessivel-entretenimento">Entretenimento</option>
          <option value="setor-acessivel-financa">Finança</option>
          <option value="setor-acessivel-restaurantes">Restaurantes</option>
          <option value="setor-acessivel-seguros">Seguros</option>
          <option value="setor-acessivel-turismo">Turismo</option>
          <option value="setor-acessivel-varejo">Varejo</option>
        </select>

      <label for="setor-inacessivel">5.4 Qual é o setor que possui sites menos acessíveis para você?</label>
      <select name="setor-inacessivel" id="setor-inacessivel">
          <option value>Sem resposta</option>
          <option value="setor-inacessivel-educacao">Educação</option>
          <option value="setor-inacessivel-entretenimento">Entretenimento</option>
          <option value="setor-inacessivel-financa">Finança</option>
          <option value="setor-inacessivel-restaurantes">Restaurantes</option>
          <option value="setor-inacessivel-seguros">Seguros</option>
          <option value="setor-inacessivel-turismo">Turismo</option>
          <option value="setor-inacessivel-varejo">Varejo</option>
        </select>          

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button">Continuar</button>

     </fieldset>      
  </form>
</main>

<script src="assets/uswds-1.0.0/js/uswds.min.js"></script>
</body>
</html>