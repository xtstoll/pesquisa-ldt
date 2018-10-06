function validarP5()
{
var prefereWebe=document.getElementById("prefereweb").value;
var maisAcessivel=document.getElementById("maisacessivel").value;
var LBI=document.getElementById("lbi").value;
var siteAcessivel=document.getElementById("siteacessivel").value;
var siteInacessivel=document.getElementById("siteinacessivel").value;
if(prefereWebe!="")
{
document.getElementById("prefereWebe").innerHTML='<label for="prefereweb" id="prefereWebe">5.1 Voc\u00EA prefere navegar em uma p\u00E1gina da Internet pelo computador / notebook ou pelo celular / tablet?</label>';
}
if(maisAcessivel!="")
{
document.getElementById("maisAcessivel").innerHTML='<label for="maisacessivel" id="maisAcessivel">5.2 Na sua opini\u00E3o, voc\u00EA acha que a Internet ficou mais acess\u00EDvel desde 2015?</label>';
}
if(LBI!="")
{
document.getElementById("LBI").innerHTML='<label for="lbi" id="LBI">5.3 Voc\u00EA j\u00E1 ouviu falar da LBI (Lei Brasileira de Inclus\u00E3o)?</label>';
}
if(siteAcessivel!="")
{
document.getElementById("siteAcessivel").innerHTML='<label for="siteacessivel" id="siteAcessivel">5.4 Qual \u00E9 o site mais acess\u00EDvel que voc\u00EA utiliza?</label>';
}
if(siteAcessivel.length>=5)
{
document.getElementById("siteAcessivel").innerHTML='<label for="siteacessivel" id="siteAcessivel">5.5 Qual \u00E9 o site menos acess\u00EDvel que voc\u00EA utiliza?</label>';
}
if(siteInacessivel!="")
{
document.getElementById("siteInacessivel").innerHTML='<input id="siteinacessivel" name="site_inacessivel" type="text" placeholder="Qual é o site menos acessível que você utiliza?" maxlength="100" required>';
}


if(prefereWebe=="")
{
parte5.prefereweb.focus();
document.getElementById("prefereWebe").innerHTML='<label for="prefereweb" id="prefereWebe" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 5.1 Voc\u00EA prefere navegar em uma p\u00E1gina da Internet pelo computador / notebook ou pelo celular / tablet?</label>';
}
else if(maisAcessivel=="")
{
parte5.maisacessivel.focus();
document.getElementById("maisAcessivel").innerHTML='<label for="maisacessivel" id="maisAcessivel" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 5.2 Na sua opini\u00E3o, voc\u00EA acha que a Internet ficou mais acess\u00EDvel desde 2015?</label>';
}
else if(LBI=="")
{
parte5.lbi.focus();
document.getElementById("LBI").innerHTML='<label for="lbi" id="LBI" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 5.3 Voc\u00EA j\u00E1 ouviu falar da LBI (Lei Brasileira de Inclus\u00E3o)?</label>';
}
else if(siteAcessivel=="")
{
parte5.siteacessivel.focus();
document.getElementById("siteAcessivel").innerHTML='<label for="siteacessivel" id="siteAcessivel" role="alert"><strong style="color:red;">Por favor, digite uma resposta.</strong> - 5.4 Qual \u00E9 o site mais acess\u00EDvel que voc\u00EA utiliza?</label>';
}
else if(siteAcessivel.length<=5)
{
parte5.siteacessivel.focus();
document.getElementById("siteAcessivel").innerHTML='<label for="siteacessivel" id="siteAcessivel" role="alert"><strong style="color:red;">Por favor, digite uma resposta v\u00E1lida.</strong> - 5.4 Qual \u00E9 o site mais acess\u00EDvel que voc\u00EA utiliza?</label>';
}
else if(siteInacessivel=="")
{
parte5.siteinacessivel.focus();
document.getElementById("siteInacessivel").innerHTML='<label for="siteinacessivel" id="siteInacessivel" role="alert"><strong style="color:red;">Por favor, digite uma resposta.</strong> - 5.5 Qual \u00E9 o site menos acess\u00EDvel que voc\u00EA utiliza?</label>';
}
else if(siteInacessivel.length<=5)
{
parte5.siteinacessivel.focus();
document.getElementById("siteInacessivel").innerHTML='<label for="siteinacessivel" id="siteInacessivel" role="alert"><strong style="color:red;">Por favor, digite uma resposta v\u00E1lida.</strong> - 5.5 Qual \u00E9 o site menos acess\u00EDvel que voc\u00EA utiliza?</label>';
}
else
{
parte5.submit();
}
}