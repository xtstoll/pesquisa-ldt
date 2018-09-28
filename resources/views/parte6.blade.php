@extends('layouts.app')

@section('pageTitle', 'Parte 6')

@section('content')
<main>
  <h1>Parte 6: Conclusão</h1>

  <form class="usa-form-large" action="{{ url('/parte6') }}" method="post" >
    <fieldset>

@if(false)
@else

<label for="sorteio">Quer ter a oportunidade de receber um prêmio para sua participação nesta pesquisa?</label>       
       <select name="sorteio" id="sorteio" required>
          <option value="">Selecione</option>
          <option value="sim">Sim</option>
          <option value="não">Não</option>
        </select>

       <label for="publicarmos">Quer receber um e-mail quando publicarmos os resultados da pesquisa?</label>       
       <select name="publicada" id="publicarmos" required>
          <option value="">Selecione</option>
          <option value="sim">Sim</option>
          <option value="não">Não</option>
        </select>  
@endif

        <label for="email">Qual o seu e-mail?</label>
        <input id="email" name="email" type="email" maxlength="100" required>             

        <label for="nome">Qual o seu nome?</label>
        <input id="nome" name="nome" type="text" required>     

        <label for="pesquisa">O que você achou da pesquisa?</label>
        <input id="pesquisa" name="opniao" type="text" required>  
        
        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button" type="submit" >Enviar</button>

     </fieldset>      
  </form>
</main>

@endsection
