@extends('layouts.app')

@section('content')

<main>
    <h1>Parte 2: Leitores de tela</h1>

    <form class="usa-form-large">
      <fieldset>
        
        <label for="ldt-desktop1">2.1 Qual leitor de tela você mais utiliza para computador / notebook?</label>
        <select name="ldt-desktop1" id="ldt-desktop1">
            <option value>Sem resposta</option>
            <option value="ldt-desktop1-chromevox">ChromeVox</option>
            <option value="ldt-desktop1-dosvox">Dosvox</option>
            <option value="ldt-desktop1-jaws">JAWS</option>
            <option value="ldt-desktop1-nvda">NVDA</option>
            <option value="ldt-desktop1-narrador">Narrador</option>
            <option value="ldt-desktop1-orca">Orca</option>
            <option value="ldt-desktop1-systemaccess">System Access</option>
            <option value="ldt-desktop1-virtualvision">Virtual Vision</option>
            <option value="ldt-desktop1-voiceover">VoiceOver</option>
            <option value="ldt-desktop1-zoomtext">ZoomText</option>
            <option value="ldt-desktop1-outro">Outro</option>
            <option value="ldt-desktop1-naoutilizo">Não utilizo nenhum</option>
        </select>    

        <label for="ldt-desktop2">2.2 Há outro leitor de tela que você mais utiliza para computador / notebook?</label>
        <select name="ldt-desktop2" id="ldt-desktop2">
            <option value>Sem resposta</option>
            <option value="ldt-desktop2-chromevox">ChromeVox</option>
            <option value="ldt-desktop2-dosvox">Dosvox</option>
            <option value="ldt-desktop2-jaws">JAWS</option>
            <option value="ldt-desktop2-nvda">NVDA</option>
            <option value="ldt-desktop2-narrador">Narrador</option>
            <option value="ldt-desktop2-orca">Orca</option>
            <option value="ldt-desktop2-systemaccess">System Access</option>
            <option value="ldt-desktop2-virtualvision">Virtual Vision</option>
            <option value="ldt-desktop2-voiceover">VoiceOver</option>
            <option value="ldt-desktop2-zoomtext">ZoomText</option>
            <option value="ldt-desktop2-outro">Outro</option>
            <option value="ldt-desktop2-naoutilizo">Não, só utilizo um</option>
        </select> 

        <label for="ldt-atualizar">2.3 Quando foi a última vez que você atualizou seu leitor de tela para computador / notebook?</label>
        <select name="ldt-atualizar" id="ldt-atualizar">
            <option value>Sem resposta</option>
            <option value="ldt-atualizar-dias">Há alguns dias</option>
            <option value="ldt-atualizar-meses">Há alguns meses</option>
            <option value="ldt-atualizar-ano">Há mais de um ano</option>
            <option value="ldt-atualizar-naoatualizo">Não tenho costume de atualizar</option>
            <option value="ldt-atualizar-naosei">Não sei</option>            
        </select>

        <label for="ldt-mobile">2.4 Qual leitor de tela você mais utiliza para celular / tablet?</label>
        <select name="ldt-mobile" id="ldt-mobile">
            <option value>Sem resposta</option>
            <option value="ldt-mobile-mobileacessibility">Mobile Accessibility</option>
            <option value="ldt-mobile-mobilespeaks">MobileSpeak</option>
            <option value="ldt-mobile-nunancetalks">Nuance Talks</option>
            <option value="ldt-mobile-spineplus">Shine Plus</option>
            <option value="ldt-mobile-talkback">TalkBack</option>
            <option value="ldt-mobile-voiceassistant">Voice Assistant</option>
            <option value="ldt-mobile-voiceover">VoiceOver</option>
            <option value="ldt-mobile-naoutilizo">Não utilizo nenhum</option>
        </select> 

        <label for="uso-recurso">2.5 Qual opção descreve como você utiliza o seu leitor de tela?</label>
        <select name="uso-recurso" id="uso-recurso">
            <option value>Sem resposta</option>
            <option value="uso-recurso-apenas-leitor">Utilizo somente a fala do leitor de tela.</option>
            <option value="uso-recurso-mais-leitor">Utilizo principalmente a fala do leitor de tela, mas também preciso dos recursos visuais.</option>
            <option value="uso-recurso-mais-visual">Utilizo principalmente os recursos visuais, mas também preciso da fala do leitor de tela.</option>
            <option value="uso-recurso-apenas-visual">Utilizo somente os recursos visuais.</option>
        </select>

        <label for="uso-dispositivo">2.6 Você utiliza mais computador / notebook ou do celular / tablet?</label>
        <select name="uso-dispositivo" id="uso-dispositivo">
            <option value>Sem resposta</option>
            <option value="uso-dispositivo-mais-desktop">Utilizo mais o leitor de tela do computador / notebook.</option>
            <option value="uso-dispositivo-tanto">Utilizo tanto o leitor de tela do computador / notebook quanto o do celular / tablet.</option>
            <option value="uso-dispositivo-mais-mobile">Utilizo mais o leitor de tela do celular / tablet.</option>
        </select>

        <label for="aprendeu">2.7 Como você aprendeu a utilizar seu leitor de tela?</label>
        <select name="aprendeu" id="aprendeu">
            <option value>Sem resposta</option>
            <option value="aprendeu-amigos">Com amigos</option>
            <option value="aprendeu-instituicao">Em uma instituição para pessoas com deficiência visual</option>
            <option value="aprendeu-escola">Na escola</option>
            <option value="aprendeu-trabalho">No trabalho</option>
            <option value="aprendeu-sozinho">Sozinho</option>
        </select>

        <label for="pagar">2.8 Você acha que vale a pena pagar para um leitor de tela?</label>
        <select name="pagar" id="pagar">
            <option value>Sem resposta</option>
            <option value="pagar-sim">Sim</option>
            <option value="pagar-nao">Não</option>
        </select>    
        
        <label for="pagar-porque">2.9 Explique o motivo da resposta acima.</label>
        <input id="pagar-porque" name="pagar-porque" type="text">        

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button">Continuar</button>
       
       </fieldset>   
    </form>
</main>

@endsection
