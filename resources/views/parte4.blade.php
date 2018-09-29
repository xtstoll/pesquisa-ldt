	@extends('layouts.app')

    @section('pageTitle', 'Parte 4')
        
@section('content')

    <h1>Parte 4: Teclados</h1>

    <form name="parte4" class="usa-form-large" action="{{ url('/parte4') }}" method="post" >
      <fieldset>

        <label for="braillevirtual" id="brailleVirtual">4.1 Você utiliza algum teclado virtual braille no seu celular / tablet? <em>Por exemplo, Entrada via Braille do iOS ou o aplicativo Soft Braille Keyboard do Android.</em></label>    
        <select name="braille_virtual" id="braillevirtual" required>
            <option value="">Selecione</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value="naosei">Não sei do que se trata</option>
        </select>

        <label for="braillelinha" id="brailleLinha">4.2 Você utiliza alguma linha braille com seu leitor de tela?</label>    
        <select name="linha_braille" id="braillelinha" required>
            <option value="">Selecione</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value="naosei">Não sei do que se trata</option>
        </select>

        <label for="tecladoexterno" id="tecladoExterno">4.3 Você utiliza algum teclado externo para navegar e digitar no seu celular / tablet?</label>    
        <select name="teclado_externo" id="tecladoexterno" required>
            <option value="">Selecione</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value="naosei">Não sei do que se trata</option>
        </select>

        <label for="digitacaovoz" id="digitacaoVoz">4.4 Com qual frequência você utiliza o recurso de digitação por voz no seu celular / tablet?</label>    
        <select name="digitacao_voz" id="digitacaovoz" required>
            <option value="">Selecione</option>
            <option value="sempre">Sempre</option>
            <option value="frequentemente">Frequentemente</option>
            <option value="asvezes">Às vezes</option>
            <option value="raramente">Raramente</option>
            <option value="nunca">Nunca</option>
            <option value="naosei">Não sei do que se trata</option>
        </select>

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button" type="button" onclick="validarP4();">Continuar</button>
       
       </fieldset>      
    </form>
</main>
@endsection
