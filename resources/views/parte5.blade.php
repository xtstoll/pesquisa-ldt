@extends('layouts.app')

@section('content')
<main>
  <h1>Parte 5: Acessibilidade</h1>

  <form class="usa-form-large" action="{{ url('/parte5') }}" method="post" >
    <fieldset>

      <label for="prefere-web">5.1 Você prefere navegar em uma página da Internet pelo computador / notebook ou pelo celular / tablet?</label>
      <select name="preferencia_navegacao" id="prefere-web" required>
          <option value="">Selecione</option>
          <option value="desktop">Computador / notebook</option>
          <option value="mobile">Celular / tablet</option>
          <option value="naoprefere">Não tenho preferência</option>
      </select>

      <label for="mais-acessivel">5.2 Na sua opinião, você acha que a Internet ficou mais acessível desde 2015?</label>
      <select name="mais_acessivel" id="mais-acessivel" required>
          <option value="">Selecione</option>
          <option value="sim">Sim, ficou mais acessível</option>
          <option value="igual">Continua igual para mim</option>
          <option value="nao">Não, ficou menos acessível</option>
        </select>
        
       <label for="lbi">5.3 Você já ouviu falar da LBI (Lei Brasileira de Inclusão, nº 13.146/2015)?</label>
       <select name="lbi" id="lbi" required>
          <option value="">Selecione</option>
          <option value="sim">Sim</option>
          <option value="nao">Não</option>
       </select>        

      <label for="site-acessivel">5.4 Qual é o site mais acessível que você utiliza?</label>
        <input id="site-acessivel" name="site_acessivel" type="text" placeholder="Qual é o site mais acessível que você utiliza?" maxlength="100" required>

      <label for="site-inacessivel">5.5 Qual é o site menos acessível que você utiliza?</label>
        <input id="site-inacessivel" name="site_inacessivel" type="text" placeholder="Qual é o site menos acessível que você utiliza?" maxlength="100" required>

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button">Continuar</button>

     </fieldset>      
  </form>
</main>

@endsection
