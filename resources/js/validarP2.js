function validarP2()
{

var ldtDesktop1=document.getElementById("ldtdesktop1").value;

var ldtDesktop2=document.getElementById("ldtdesktop2").value;

var Atualizar=document.getElementById("ldtatualizar").value;

var ldtMobile=document.getElementById("ldtmobile").value;

usoRecurso=document.getElementById("usorecurso").value;

var Dispositivo=document.getElementById("usodispositivo").value;

var Aprendeu=document.getElementById("aprendeu").value;

var Pagar=document.getElementById("pagar").value;

var pagarPorque=document.getElementById("pagarporque").value;

if( ldtDesktop1=="")
{
parte2.ldtdesktop2.focus();
document.getElementById("ldtDesktop1").innerHTML='<label for="ldtdesktop1" id="ldtDesktop1" role="alert">Por gentileza, selecione uma opção abaixo. - 2.1 Qual leitor de tela você mais utiliza para computador / notebook?</label>';
}
else if(ldtDesktop2=="")
{
parte2.ldtdesktop2.focus();
document.getElementById("ldtDesktop2").innerHTML='<label for="ldtdesktop2" id="ldtDesktop2" role="alert">Por gentileza, selecione uma opção. - 2.2 Há outro leitor de tela que você mais utiliza para computador / notebook?</label>';
}
else if(Atualizar=="")
{
parte2.ldtatualizar.focus();
document.getElementById("Atualizar").innerHTML='<label for="ldtatualizar" id="Atualizar" role="alert">Por gentileza, selecione uma opção. - 2.3 Quando foi a última vez que você atualizou seu leitor de tela para computador / notebook?</label>';
}
else if(ldtMobile=="")
{
parte2.ldtmobile.focus();
document.getElementById("ldtMobile").innerHTML='<label for="ldtmobile" id="ldtMobile" role="alert">Por gentileza, selecione uma opção. - 2.4 Qual leitor de tela você mais utiliza para celular / tablet?</label>';
}
else if(usoRecurso=="")
{
parte2.usorecurso.focus(); 
document.getElementById("usoRecurso").innerHTML='<label for="usorecurso" id="usoRecurso" role="alert">Por gentileza, selecione uma opção. - 2.5 Qual opção descreve como você utiliza o seu leitor de tela?</label>';
}
else if(Dispositivo=="")
{
parte2.usodispositivo.focus();
document.getElementById("Dispositivo").innerHTML='<label for="usodispositivo" id="Dispositivo" role="alert">Por gentileza, selecione uma opção. - 2.6 Você utiliza mais computador / notebook ou do celular / tablet?</label>';
}
else if(Aprendeu=="")
{
parte2.aprendeu.focus();
document.getElementById("Aprendeu").innerHTML='<label for="aprendeu" id="Aprendeu"  role="alert">Por gentileza, selecione uma opção. - 2.7 Como você aprendeu a utilizar seu leitor de tela?</label>';
}

else if(Pagar=="")
{
parte2.pagar.focus();
document.getElementById("Pagar").innerHTML='<label for="pagar" id="Pagar" role="alert">Por gentileza, selecione uma opção. - 2.8 Você acha que vale a pena pagar por um leitor de tela?</label>';
}
else if(pagarPorque=="")
{
parte2.pagarporque.focus();
document.getElementById("pagarPorque").innerHTML='<label for="pagarporque" id="pagarPorque" role="alert">2.9 Por gentileza, Explique o motivo da resposta acima.</label>';
}
else
{
parte2.submit();
}
}


