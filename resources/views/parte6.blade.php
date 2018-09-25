@extends('layouts.app')

@section('content')
<main>
  <h1>Parte 6: Conclusão</h1>

  <form class="usa-form-large">
    <fieldset>

@if(false)
@else

<label for="sorteio">Quer ter a oportunidade de receber um prêmio para sua participação nesta pesquisa?</label>       
       <select name="sorteio" id="sorteio">
          <option value>Sem resposta</option>
          <option value="premio-sim">Sim</option>
          <option value="premio-não">Não</option>
        </select>

       <label for="publicarmos">Quer receber um e-mail quando publicarmos os resultados da pesquisa?</label>       
       <select name="publicarmos" id="publicarmos">
          <option value>Sem resposta</option>
          <option value="publicamos-sim">Sim</option>
          <option value="publicamos-não">Não</option>
        </select>  
@endif

        <label for="email">Qual o seu e-mail?</label>
        <input id="email" name="email" type="email">             

        <label for="nome">Qual o seu nome?</label>
        <input id="nome" name="nome" type="text">     

        <label for="pesquisa">O que você achou da pesquisa?</label>
        <input id="pesquisa" name="pesquisa" type="text">  
        
        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button">Enviar</button>

     </fieldset>      
  </form>
</main>

@endsection
