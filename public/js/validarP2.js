function validarP2()
{
var ldtDesktop1=document.getElementById("ldtdesktop1").value;
var ldtDesktop2=document.getElementById("ldtdesktop2").value;
var Atualizar=document.getElementById("ldtatualizar").value;
var ldtMobile=document.getElementById("ldtmobile").value;
var usoRecurso=document.getElementById("usorecurso").value;
var usoDispositivo=document.getElementById("usodispositivo").value;
var Aprendeu=document.getElementById("aprendeu").value;
var Pagar=document.getElementById("pagar").value;
var pagarPorque=document.getElementById("pagarporque").value;
if(ldtDesktop1!="")
{
document.getElementById("ldtDesktop1").innerHTML='<label for="ldtdesktop1" id="ldtDesktop1">2.1 Qual leitor de tela você mais utiliza para computador / notebook?</label>';
}
if(ldtDesktop2!="")
{
document.getElementById("ldtDesktop2").innerHTML='<label for="ldtdesktop2" id="ldtDesktop2">2.2 Há outro leitor de tela que você mais utiliza para computador / notebook?</label>';
}
if(Atualizar!="")
{
document.getElementById("Atualizar").innerHTML='<label for="ldtatualizar" id="ldtAtualizar">2.3 Quando foi a última vez que você atualizou seu leitor de tela para computador / notebook?</label>';
}
if(ldtMobile=="")
{
document.getElementById("ldtMobile").innerHTML='<label for="ldtmobile" id="ldtMobile">2.4 Qual leitor de tela você mais utiliza para celular / tablet?</label>';
}
if(usoRecurso!="")
{
document.getElementById("usoRecurso").innerHTML='<label for="usorecurso" id="usoRecurso">2.5 Qual opção descreve como você utiliza o seu leitor de tela?</label>';
}
if(usoDispositivo!="")
{
document.getElementById("usoDispositivo").innerHTML='<label for="usodispositivo" id="usoDispositivo">2.6 Você utiliza mais o leitor de tela do computador / notebook ou do celular / tablet?</label>';
}
if(Aprendeu!="")
{
document.getElementById("Aprendeu").innerHTML='<label for="aprendeu" id="Aprendeu">2.7 Como você aprendeu a utilizar seu leitor de tela?</label>';
}
if(Pagar!="")
{
document.getElementById("Pagar").innerHTML='<label for="pagar" id="Pagar">2.8 Você acha que vale a pena pagar por um leitor de tela?</label>';
}
if(pagarPorque!="")
{
document.getElementById("pagarPorque").innerHTML='<label for="pagarporque" id="pagarPorque">2.9 Explique o motivo da resposta acima.</label>';
}
if(ldtDesktop1=="")
{
parte2.ldtdesktop1.focus();
document.getElementById("ldtDesktop1").innerHTML='<label for="ldtdesktop1" id="ldtDesktop1" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 2.1 Qual leitor de tela voc\u00EA mais utiliza para computador / notebook?</label>';
}
else if(ldtDesktop2=="")
{
parte2.ldtdesktop2.focus();
document.getElementById("ldtDesktop2").innerHTML='<label for="ldtdesktop2" id="ldtDesktop2" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 2.2 H\u00E1 outro leitor de tela que voc\u00EA mais utiliza para computador / notebook?</label>';
}
else if(Atualizar=="")
{
parte2.ldtatualizar.focus();
document.getElementById("Atualizar").innerHTML='<label for="ldtatualizar" id="Atualizar" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 2.3 Quando foi a \u00FAltima vez que voc\u00EA atualizou seu leitor de tela para computador / notebook?</label>';
}
else if(ldtMobile=="")
{
parte2.ldtmobile.focus();
document.getElementById("ldtMobile").innerHTML='<label for="ldtmobile" id="ldtMobile" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 2.4 Qual leitor de tela voc\u00EA mais utiliza para celular / tablet?</label>';
}
else if(usoRecurso=="")
{
parte2.usorecurso.focus(); 
document.getElementById("usoRecurso").innerHTML='<label for="usorecurso" id="usoRecurso" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 2.5 Qual op\u00E7\u00E3o descreve como voc\u00EA utiliza o seu leitor de tela?</label>';
}
else if(usoDispositivo=="")
{
parte2.usodispositivo.focus();
document.getElementById("usoDispositivo").innerHTML='<label for="usodispositivo" id="usoDispositivo" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 2.6 Voc\u00EA utiliza mais computador / notebook ou do celular / tablet?</label>';
}
else if(Aprendeu=="")
{
parte2.aprendeu.focus();
document.getElementById("Aprendeu").innerHTML='<label for="aprendeu" id="Aprendeu" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 2.7 Como voc\u00EA aprendeu a utilizar seu leitor de tela?</label>';
}
else if(Pagar=="")
{
parte2.pagar.focus();
document.getElementById("Pagar").innerHTML='<label for="pagar" id="Pagar" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 2.8 Voc\u00EA acha que vale a pena pagar por um leitor de tela?</label>';
}
else if(pagarPorque=="")
{
parte2.pagarporque.focus();
document.getElementById("pagarPorque").innerHTML='<label for="pagarporque" id="pagarPorque" role="alert"><strong style="color:red;">Por favor, digite uma resposta.</strong> - 2.9 Explique o motivo da resposta acima.</label>';
}
else
{
parte2.submit();
}
}