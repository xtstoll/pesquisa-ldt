<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Parte 2 - Pesquisa nacional de leitores de tela</title>
  <link rel="stylesheet" href="assets/uswds-1.6.8/css/uswds.min.css">
  <link rel="stylesheet" href="assets/stylesheets/pesquisa.css">
</head>
<body>

<h1>Parte 2: Leitores de tela</h1>

<main>
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
            <option value="ldt-desktop1-naoutilizo">Não utilizo nenhum</option>
        </select>    

        <label for="ldt-desktop2">2.2 Há outro leitor de tela você mais utiliza para computador / notebook?</label>
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
            <option value="ldt-desktop2-naoutilizo">Não utilizo nenhum</option>
        </select> 

        <label for="ldt-atualizar">2.3 Quando foi a última vez que você atualizou seu leitor de tela para computador / notebook?</label>
        <select name="ldt-atualizar" id="ldt-atualizar">
            <option value>Sem resposta</option>
            <option value="ldt-atualizar-dias">Há alguns dias</option>
            <option value="ldt-atualizar-meses">Há alguns meses</option>
            <option value="ldt-atualizar-ano">Há mais de um ano</option>
            <option value="ldt-atualizar-naoatualizo">Não tenho costume de atualizar</option>
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
            <option value="uso-recurso-mais-leitor">Utilizo principalmente a fala do leitor de tela, mas também preciso os recursos visuais.</option>
            <option value="uso-recurso-mais-visual">Utilizo principalmente dos recursos visuais, mas também preciso a fala do leitor de tela.</option>
            <option value="uso-recurso-apenas-visual">Utilizo somente os recursos visuais.</option>
        </select>

        <label for="uso-dispositivo">2.6 Você utiliza mais o leitor de tela do computador / notebook ou do celular / tablet?</label>
        <select name="uso-dispositivo" id="uso-dispositivo">
            <option value>Sem resposta</option>
            <option value="uso-dispositivo-mais-desktop">Utilizo mais o leitor de tela do computador / notebook.</option>
            <option value="uso-dispositivo-tanto">Utilizo tanto o leitor de tela do computador / notebook quanto do celular / tablet.</option>
            <option value="uso-dispositivo-mais-mobile">Utilizo mais o leitor de tela do celular / tablet.</option>
        </select>

        <label for="aprendeu">2.7 Como você aprendeu a utilizar seu leitor de tela?</label>
        <select name="aprendeu" id="aprendeu">
            <option value>Sem resposta</option>
            <option value="aprendeu-amigos">Com amigos</option>
            <option value="aprendeu-associacao">Numa associação de cegos</option>
            <option value="aprendeu-fundacao">Numa fundação para cegos</option>
            <option value="aprendeu-escola">Na escola</option>
            <option value="aprendeu-trabalho">No trabalho</option>
            <option value="aprendeu-sozinho">Sozinho</option>
        </select>

        <label for="compraria">2.8 Você compraria uma licença de leitor de tela?</label>
        <select name="compraria" id="compraria">
            <option value>Sem resposta</option>
            <option value="compraria-sim">Sim</option>
            <option value="compraria-nao">Não</option>
        </select>    
        <label for="compraria-porque">2.8.1 Por quê você compraria ou não?</label>
        <input id="compraria-porque" name="compraria-porque" type="text">        

        <button class="usa-button-secondary">Voltar</button>
        <button class="usa-button">Continuar</button>
       
       </fieldset>   
    </form>
</main>

<script src="assets/uswds-1.0.0/js/uswds.min.js"></script>
</body>
</html>