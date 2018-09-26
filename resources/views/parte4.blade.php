@extends('layouts.app')

@section('content')
<main>
    <h1>Parte 4: Teclados</h1>

    <form class="usa-form-large">
      <fieldset>

        <label for="braille-virtual">4.1 Você utiliza algum teclado virtual braille no seu celular / tablet? <em>Por exemplo, Entrada via Braille do iOS ou o aplicativo Soft Braille Keyboard do Android.</em></label>    
        <select name="braille-virtual" id="braille-virtual" required>
            <option value>Selecione</option>
            <option value="braille-virtual-sim">Sim</option>
            <option value="braille-virtual-nao">Não</option>
            <option value="braille-virtual-naosei">Não sei do que se trata</option>
        </select>

        <label for="braille-linha">4.2 Você utiliza alguma linha braille com seu leitor de tela?</label>    
        <select name="braille-linha" id="braille-linha" required>
            <option value>Selecione</option>
            <option value="braille-linha-sim">Sim</option>
            <option value="braille-linha-sim">Não</option>
            <option value="braille-linha-naosei">Não sei do que se trata</option>
        </select>

        <label for="teclado-externo">4.3 Você utiliza algum teclado externo para navegar e digitar no seu celular / tablet?</label>    
        <select name="teclado-externo" id="teclado-externo" required>
            <option value>Selecione</option>
            <option value="teclado-externo-sim">Sim</option>
            <option value="teclado-externo-nao">Não</option>
            <option value="teclado-externo-naosei">Não sei do que se trata</option>
        </select>

        <label for="digitacao-voz">4.4 Com qual frequência você utiliza o recurso de digitação por voz no seu celular / tablet?</label>    
        <select name="digitacao-voz" id="digitacao-voz" required>
            <option value>Selecione</option>
            <option value="digitacao-voz-sempre">Sempre</option>
            <option value="digitacao-voz-frequentemente">Frequentemente</option>
            <option value="digitacao-voz-asvezes">Às vezes</option>
            <option value="digitacao-voz-raramente">Raramente</option>
            <option value="digitacao-voz-nunca">Nunca</option>
            <option value="digitacao-voz-naosei">Não sei do que se trata</option>
        </select>

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button">Continuar</button>
       
       </fieldset>      
    </form>
</main>
@endsection
