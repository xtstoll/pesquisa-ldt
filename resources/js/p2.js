function validarP2()
{
var desktop1=document.getElementById("ldt_desktop1").value;
var desktop2=document.getElementById("ldt_desktop2").value;
var atualizar=document.getElementById("ldt_atualizado").value;
var mobile=document.getElementById("ldt_mobile").value;
var recurso=document.getElementById("ldt_uso").value;
var dispositivo=document.getElementById("dispositivo_usado").value;
var aprender=document.getElementById("aprendeu").value;
var pg=document.getElementById("ldt_pagar").value;
var pgto=document.getElementById("pagar-porque").value;
if(desctop1="")
{
parte2.ldt-desktop2.focus();
document.getElementById("desktop1").innerHTML='<label for="ldt-desktop1" id="desktop1" role="alert">Por gentileza, selecione a op��o abaixo. - 2.1 Qual leitor de tela voc� mais utiliza para computador / notebook?</label>';
}
else if(desctop2=="")
{
parte2.ldt-desktop2.focus();
document.getElementById("desktop2").innerHTML='<label for="ldt-desktop2" id="desktop2" role="alert">Por gentileza, selecione uma op��o. - 2.2 H� outro leitor de tela que voc� mais utiliza para computador / notebook?</label>';
}
else if(atualizar=="")
{
parte2.ldt-atualizar.focus();
document.getElementById("atualizar").innerHTML='<label for="ldt-atualizar" id="atualizar" role="alert">Por gentileza, selecione uma op��o. - 2.3 Quando foi a �ltima vez que voc� atualizou seu leitor de tela para computador / notebook?</label>';
}
else if(mobile=="")
{
parte2.ldt-mobile.focus();
document.getElementById("mobile").innerHTML='<label for="ldt-mobile" id="mobile" role="alert">Por gentileza, selecione uma op��o. - 2.4 Qual leitor de tela voc� mais utiliza para celular / tablet?</label>';
}
else if(recurso=="")
{
parte2.uso-recurso.focus(); 
document.getElementById("uso").innerHTML='<label for="uso-recurso" id="uso" role="alert">Por gentileza, selecione uma op��o. - 2.5 Qual op��o descreve como voc� utiliza o seu leitor de tela?</label>';
}
else if(dispositivo=="")
{
parte2.uso-dispositivo.focus();
document.getElementById("dispositivo").innerHTML='<label for="uso-dispositivo" id="dispositivo" role="alert">Por gentileza, selecione uma op��o. - 2.6 Voc� utiliza mais computador / notebook ou do celular / tablet?</label>';
}
else if(aprender=="")
{
parte2.aprendeu.focus();
document.getElementById("aprende").innerHTML='<label for="aprendeu" id="aprende"  role="alert">Por gentileza, selecione uma op��o. - 2.7 Como voc� aprendeu a utilizar seu leitor de tela?</label>';
}

else if(pg=="")
{
parte2.pagar.focus();
document.getElementById("pg").innerHTML='<label for="pagar" id="pg"  role="alert">Por gentileza, selecione uma op��o. - 2.8 Voc� acha que vale a pena pagar por um leitor de tela?</label>';
}
else if(pgto=="")
{
parte2.pagar-porque.focus();
document.getElementById("pgto").innerHTML='<label for="pagar-porque" id="pgto" role="alert">Por gentileza, n�o deixe de responder esta pergunta. Ela � importante. - 2.9 Explique o motivo da resposta acima.</label>';
}
}


