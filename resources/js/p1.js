function validarP1()
{
var ano_nascimento=document.getElementById("ano-nascimento").value;
var genero=document.getElementById("genero").value;
var escolaridade=document.getElementById("escolaridade").value;
var dvc=document.getElementById("deficiencia-cegueira").checked;
var dvb=document.getElementById("deficiencia-baixa-visao").checked;
var dvCog=document.getElementById("deficiencia-cognitiva").checked;
var dva=document.getElementById("deficiencia-auditiva").checked;
var dvm=document.getElementById("deficiencia-motora").checked;
var dvOutra=document.getElementById("deficiencia-outra").checked;
var dvNen=document.getElementById("deficiencia-nenhuma").checked;
if((ano_nascimento<=1912) | (ano_nascimento<=2014))
{
parte1.ano_nascimento.focus();
document.getElementById("ano").innerHTML='<label for="ano-nascimento" id="ano" role="alert">Por favor, digite seu ano de nascimento. - 1.1 Qual ano você nasceu?</label>';
return false;
}
else if(genero=="")
{
parte1.genero.focus();
document.getElementById("gen").innerHTML='<label for="genero" id="gen" role="alert">Por favor, selecione seu gênero. - 1.2 Qual é o seu gênero?</label>';
return false;
}
else if(estado=="")
{
parte1.estado.focus();
document.getElementById("est").innerHTML='<label for="estado" id="est" role="alert">Por favor, selecione seu estado. - 1.3 Em qual estado você mora?</label>';
return false;
}
else if(escolaridade=="")				
{
parte1.escolaridade.focus();
document.getElementById("esc").innerHTML='<label for="escolaridade" id="esc" role="alert">Por favor, selecione seu escolaridade. - 1.4 Qual o seu nível de escolaridade?</label>';
return false;
}
else if((dvc==false) & (dvb==false) & (dva==false) & (dvCog==false) & (dva==false) & (dvm==false) & (dvOutra==false) & (dvNen==false)) 
{
parte1.deficiencia-cegueira.focus();
document.getElementById("deficiencias").innerHTML='<label id="deficiencias" role="alert">Por favor, selecione suas deficiências. - 1.5 Qual(is) deficiência(s) você possui?</label>';
return false;
}
else
{
parte1.submit();
return true;
}
}