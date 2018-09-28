@extends('layouts.app')

@section('content')
<main>
    <h1>Parte 4: Teclados</h1>

    <form class="usa-form-large" action="{{ url('/parte4') }}" method="post" >
      <fieldset>

        <label for="braille-virtual">4.1 Você utiliza algum teclado virtual braille no seu celular / tablet? <em>Por exemplo, Entrada via Braille do iOS ou o aplicativo Soft Braille Keyboard do Android.</em></label>    
        <select name="braille_virtual" id="braille-virtual" required>
            <option value="">Selecione</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value="naosei">Não sei do que se trata</option>
        </select>

        <label for="braille-linha">4.2 Você utiliza alguma linha braille com seu leitor de tela?</label>    
        <select name="linha_braille" id="braille-linha" required>
            <option value="">Selecione</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value="naosei">Não sei do que se trata</option>
        </select>

        <label for="teclado-externo">4.3 Você utiliza algum teclado externo para navegar e digitar no seu celular / tablet?</label>    
        <select name="teclado_externo" id="teclado-externo" required>
            <option value="">Selecione</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value="naosei">Não sei do que se trata</option>
        </select>

        <label for="digitacao-voz">4.4 Com qual frequência você utiliza o recurso de digitação por voz no seu celular / tablet?</label>    
        <select name="digitacao_voz" id="digitacao-voz" required>
            <option value="">Selecione</option>
            <option value="sempre">Sempre</option>
            <option value="frequentemente">Frequentemente</option>
            <option value="asvezes">Às vezes</option>
            <option value="raramente">Raramente</option>
            <option value="nunca">Nunca</option>
            <option value="naosei">Não sei do que se trata</option>
        </select>

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button" type="submit" >Continuar</button>
       
       </fieldset>      
    </form>
</main>
@endsection
