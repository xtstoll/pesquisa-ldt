function validarP5()
{
var prefereWebe=document.getElementById("prefereweb").value;
var maisAcessivel=document.getElementById("maisacessivel").value;

var LBI=document.getElementById("lbi").value;

var siteAcessivel=document.getElementById("siteacessivel").value;

var siteInacessivel=document.getElementById("siteinacessivel").value;

if(prefereWebe=="")
{
parte5.prefereweb.focus();
document.getElementById("prefereWebe").innerHTML='<label for="prefereweb" id="prefereWebe" role="alert">Por gentileza, selecione uma op��o. - 5.1 Voc� prefere navegar em uma p�gina da Internet pelo computador / notebook ou pelo celular / tablet?</label>';
}
else if(maisAcessivel=="")
{
parte5.maisacessivel.focus();
document.getElementById("maisAcessivel").innerHTML='<label for="maisacessivel" id="maisAcessivel" role="alert">Por gentileza, selecione uma op��o. - 5.2 Na sua opini�o, voc� acha que a Internet ficou mais acess�vel desde 2015?</label>';
}
else if(LBI=="")
{
parte5.lbi.focus();
document.getElementById("LBI").innerHTML='<label for="lbi" id="LBI" role="alert">Por gentileza, selecione uma op��o. - 5.3 Voc� j� ouviu falar da LBI (Lei Brasileira de Inclus�o, n� 13.146/2015)?</label>';
}
else if(siteAcessivel=="")
{
parte5.siteacessivel.focus();
document.getElementById("siteAcessivel").innerHTML='<label for="siteacessivel" id="siteAcessivel" role="alert">Por gentileza, n�o deixe de inserir sua resposta. - 5.4 Qual � o site mais acess�vel que voc� utiliza?</label>';
}
else if(siteAcessivel.length<=5)
{
parte5.siteacessivel.focus();
document.getElementById("siteAcessivel").innerHTML='<label for="siteacessivel" id="siteAcessivel" role="alert">O site inform�do, n�o e  um endere�o v�lido. Por gentileza, n�o deixe de inserir sua resposta. - 5.4 Qual � o site mais acess�vel que voc� utiliza?</label>';
}
else if(siteInacessivel=="")
{
parte5.siteinacessivel.focus();
document.getElementById("siteInacessivel").innerHTML='<label for="siteinacessivel" id="siteInacessivel" role="alert">Por gentileza, n�o deixe de inserir sua resposta. - 5.5 Qual � o site menos acess�vel que voc� utiliza?</label>';
}
else if(siteInacessivel.length<=5)
{
parte5.siteinacessivel.focus();
document.getElementById("siteInacessivel").innerHTML='<label for="siteinacessivel" id="siteInacessivel" role="alert">O endere�o inform�do, n�o � um endere�o v�lido. Por gentileza, n�o deixe de inserir sua resposta. - 5.5 Qual � o site menos acess�vel que voc� utiliza?</label>';
}
else
{
parte5.submit();
}
}