@extends('layouts.app')

@section('content')
<main>
  <h1>Parte 6: Conclusão</h1>

  <form class="usa-form-large">
    <fieldset>

       <label for="premio">6.1 Quer ter a oportunidade de receber um prêmio para sua participação nesta pesquisa?</label>       
       <select name="premio" id="premio">
          <option value>Sem resposta</option>
          <option value="premio-sim">Sim</option>
          <option value="premio-não">Não</option>
        </select>

       <label for="publicamos">6.2 Quer receber um e-mail quando publicarmos os resultados da pesquisa?</label>       
       <select name="publicamos" id="publicamos">
          <option value>Sem resposta</option>
          <option value="publicamos-sim">Sim</option>
          <option value="publicamos-não">Não</option>
        </select>  

        <label for="email">6.3 Qual o seu e-mail?</label>
        <input id="email" name="email" type="email">             

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button">Enviar</button>

     </fieldset>      
  </form>
</main>

@endsection
