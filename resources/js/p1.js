function validarP1()
{
var ano_nascimento=document.getElementById("ano_nascimento").value;
var genero=document.getElementById("genero").value;
var escolaridade=document.getElementById("escolaridade").value;
var dvc=document.getElementById("deficiencia-cegueira").checked;
var dvb=document.getElementById("deficiencia-baixa-visao").checked;
var dvCog=document.getElementById("deficiencia-cognitiva").checked;
var dva=document.getElementById("deficiencia-auditiva").checked;
		var dvm=document.getElementById("deficiencia-motora").checked;
if((ano_nascimento<=1912) | (ano_nascimento<=2014))
{
parte1.ano_nascimento.focus();
document.getElementById("anoNasc").innerHTML='<label for="ano_nascimento" id="anoNasc" role="alert"> Ano de Nascimento Inv�lido. -  1.1 Qual ano voc� nasceu?</label>';
return false;
}
else if(genero=="")
{
parte1.genero.focus();
document.getElementById("gn").innerHTML='<label for="genero" id="gn"  role="alert">Por favor, selecione uma op��o abaixo. - 1.2 Qual � o seu g�nero?</label>';
return false;
}
else if(estado=="")
{
parte1.estado.focus();
document.getElementById("est").innerHTML='<label for="estado" id="est"  role="alert">Por gentileza, selecione seu Estado. - 1.3 Em qual estado voc� mora?</label>';
return false;
}
else if(escolaridade=="")
{
parte1.escolaridade.focus();
document.getElementById("esc").innerHTML='<label for="escolaridade" id="esc" role="alert">Por gentileza, selecione uma op��o abaixo. - 1.4 Qual o seu n�vel de escolaridade?</label>';
return false;
}
else if((dvc==false) & (dvb==false) & (dva==false) & (dvCog==false) & (dva==false) & (dvm==false))
{
parte1.deficiencia-cegueira.focus();
document.getElementById("deficiencias").innerHTML='<label id="deficiencias" role="alert">Por gentileza, marque uma das op��es abaixo. - 1.5 Qual(is) defici�ncia(s) voc� possui?</label>';
return false;
}
else
{
parte1.submit();
return true;
}
}