@extends('layouts.app')

@section('content')
<main>
  <h1>Parte 5: Acessibilidade</h1>

  <form class="usa-form-large">
    <fieldset>

      <label for="prefere-web">5.1 Você prefere navegar em uma página da Internet pelo computador / notebook ou pelo celular / tablet?</label>
      <select name="prefere-web" id="prefere-web" required>
          <option value>Selecione</option>
          <option value="prefere-web-desktop">Computador / notebook</option>
          <option value="prefere-web-mobile">Celular / tablet</option>
          <option value="prefere-web-nao">Não tenho preferência</option>
      </select>

      <label for="mais-acessivel">5.2 Na sua opinião, você acha que a Internet ficou mais acessível desde 2015?</label>
      <select name="mais-acessivel" id="mais-acessivel" required>
          <option value>Selecione</option>
          <option value="mais-acessivel-sim">Sim, ficou mais acessível</option>
          <option value="mais-acessivel-igual">Continua igual para mim</option>
          <option value="mais-acessivel-nao">Não, ficou menos acessível</option>
        </select>
        
       <label for="lbi">5.3 Você já ouviu falar da LBI (Lei Brasileira de Inclusão, nº 13.146/2015)?</label>
       <select name="lbi" id="lbi" required>
          <option value>Selecione</option>
          <option value="lbi-sim">Sim</option>
          <option value="lbi-nao">Não</option>
       </select>        

      <label for="site-acessivel">5.4 Qual é o site mais acessível que você utiliza?</label>
        <input id="site-acessivel" name="site-acessivel" type="text" placeholder="Qual é o site mais acessível que você utiliza?" required>

      <label for="site-inacessivel">5.5 Qual é o site menos acessível que você utiliza?</label>
        <input id="site-inacessivel" name="site-inacessivel" type="text" placeholder="Qual é o site menos acessível que você utiliza?" required>

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button">Continuar</button>

     </fieldset>      
  </form>
</main>

@endsection
