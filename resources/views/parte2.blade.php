@extends('layouts.app')

@section('content')

<main>
    <h1>Parte 2: Leitores de tela</h1>

    <form class="usa-form-large" action="{{ url('/parte2') }}" method="post">
      <fieldset>
        
        <label for="ldt-desktop1">2.1 Qual leitor de tela você mais utiliza para computador / notebook?</label>
        <select name="ldt_desktop1" id="ldt-desktop1" required>
            <option value="">Selecione</option>
            <option value="chromevox">ChromeVox</option>
            <option value="dosvox">Dosvox</option>
            <option value="jaws">JAWS</option>
            <option value="NVDA">NVDA</option>
            <option value="narrador">Narrador</option>
            <option value="orca">Orca</option>
            <option value="systemaccess">System Access</option>
            <option value="virtualvision">Virtual Vision</option>
            <option value="voiceover">VoiceOver</option>
            <option value="zoomtext">ZoomText</option>
            <option value="outro">Outro</option>
            <option value="naoutilizo">Não utilizo nenhum</option>
        </select>    

        <label for="ldt-desktop2">2.2 Há outro leitor de tela que você mais utiliza para computador / notebook?</label>
        <select name="ldt_desktop2" id="ldt-desktop2" required>
            <option value="">Selecione</option>
            <option value="chromevox">ChromeVox</option>
            <option value="dosvox">Dosvox</option>
            <option value="jaws">JAWS</option>
            <option value="NVDA">NVDA</option>
            <option value="narrador">Narrador</option>
            <option value="orca">Orca</option>
            <option value="systemaccess">System Access</option>
            <option value="virtualvision">Virtual Vision</option>
            <option value="voiceover">VoiceOver</option>
            <option value="zoomtext">ZoomText</option>
            <option value="outro">Outro</option>
            <option value="naoutilizo">Não, só utilizo um</option>
        </select> 

        <label for="ldt-atualizar">2.3 Quando foi a última vez que você atualizou seu leitor de tela para computador / notebook?</label>
        <select name="ldt_atualizado" id="ldt-atualizar" required>
            <option value="">Selecione</option>
            <option value="dias">Há alguns dias</option>
            <option value="meses">Há alguns meses</option>
            <option value="ano">Há mais de um ano</option>
            <option value="naoatualizo">Não tenho costume de atualizar</option>
            <option value="naosei">Não sei</option>            
        </select>

        <label for="ldt-mobile">2.4 Qual leitor de tela você mais utiliza para celular / tablet?</label>
        <select name="ldt_mobile" id="ldt-mobile" required>
            <option value="">Selecione</option>
            <option value="mobileacessibility">Mobile Accessibility</option>
            <option value="mobilespeaks">MobileSpeak</option>
            <option value="nunancetalks">Nuance Talks</option>
            <option value="spineplus">Shine Plus</option>
            <option value="talkback">TalkBack</option>
            <option value="voiceassistant">Voice Assistant</option>
            <option value="voiceover">VoiceOver</option>
            <option value="naoutilizo">Não utilizo nenhum</option>
        </select> 

        <label for="uso-recurso">2.5 Qual opção descreve como você utiliza o seu leitor de tela?</label>
        <select name="ldt_uso" id="uso-recurso" required>
            <option value="">Selecione</option>
            <option value="apenas-leitor">Utilizo somente a fala do leitor de tela.</option>
            <option value="mais-leitor">Utilizo principalmente a fala do leitor de tela, mas também preciso dos recursos visuais.</option>
            <option value="mais-visual">Utilizo principalmente os recursos visuais, mas também preciso da fala do leitor de tela.</option>
            <option value="apenas-visual">Utilizo somente os recursos visuais.</option>
        </select>

        <label for="uso-dispositivo">2.6 Você utiliza mais computador / notebook ou do celular / tablet?</label>
        <select name="dispositivo_usado" id="uso-dispositivo" required>
            <option value="">Selecione</option>
            <option value="mais-desktop">Utilizo mais o leitor de tela do computador / notebook.</option>
            <option value="ambos">Utilizo tanto o leitor de tela do computador / notebook quanto o do celular / tablet.</option>
            <option value="mais-mobile">Utilizo mais o leitor de tela do celular / tablet.</option>
        </select>

        <label for="aprendeu">2.7 Como você aprendeu a utilizar seu leitor de tela?</label>
        <select name="aprendeu" id="aprendeu" required>
            <option value="">Selecione</option>
            <option value="amigos">Com amigos</option>
            <option value="instituicao">Em uma instituição para pessoas com deficiência visual</option>
            <option value="escola">Na escola</option>
            <option value="trabalho">No trabalho</option>
            <option value="sozinho">Sozinho</option>
        </select>

        <label for="pagar">2.8 Você acha que vale a pena pagar por um leitor de tela?</label>
        <select name="ldt_pagar" id="pagar" required>
            <option value="">Selecione</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>    
        
        <label for="pagar-porque">2.9 Explique o motivo da resposta acima.</label>
        <input id="pagar-porque" name="ldt_pagar_motivo" type="text" maxlength="250" placeholder="Motivo da resposta acima" required>        

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button" type="submit" >Continuar</button>
       
       </fieldset>   
    </form>
</main>

@endsection
