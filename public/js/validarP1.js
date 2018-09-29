function validarP1()
{
var anoNascimento=document.getElementById("anonascimento").value;
var Genero=document.getElementById("genero").value;

var Escolaridade=document.getElementById("escolaridade").value;

var Estado=document.getElementById("estado").value;

var deficienciaCegueira=document.getElementById("deficienciacegueira").checked;
var deficienciaBaixaVisao=document.getElementById("deficienciabaixavisao").checked;
var deficienciaCognitiva=document.getElementById("deficienciacognitiva").checked;
var deficienciaAuditiva=document.getElementById("deficienciaauditiva").checked;
var deficienciaMotora=document.getElementById("deficienciamotora").checked;
var deficienciaOutra=document.getElementById("deficienciaoutra").checked;
var deficienciaNenhuma=document.getElementById("deficiencianenhuma").checked;
if((anoNascimento<=1912) & (anoNascimento<=2014))
{
parte1.anonascimento.focus();
document.getElementById("anoNascimento").innerHTML='<label for="anonascimento" id="anoNascimento" role="alert"> Ano de Nascimento Inválido. -  1.1 Qual ano você nasceu?</label>';

}
else if(Genero=="")
{
parte1.genero.focus();
document.getElementById("Genero").innerHTML='<label for="genero" id="Genero"  role="alert">Por favor, selecione uma opção abaixo. - 1.2 Qual \u00C9 o seu gênero?</label>';
return false;
}
else if(Estado=="")
{
parte1.estado.focus();
document.getElementById("Estado").innerHTML='<label for="estado" id="Estado" role="alert">Por gentileza, selecione seu Estado. - 1.3 Em qual estado você mora?</label>';
return false;
}
else if(Escolaridade=="")				
{
parte1.escolaridade.focus();
document.getElementById("Escolaridade").innerHTML='<label for="escolaridade" id="Escolaridade" role="alert">Por gentileza, selecione uma opção abaixo. - 1.4 Qual o seu nível de escolaridade?</label>';
return false;
}
else if((deficienciaCegueira==false) & (deficienciaBaixaVisao==false) & (deficienciaAuditiva==false) & (deficienciaCognitiva==false) & (deficienciaMotora==false) & (deficienciaOutra==false) & (deficienciaNenhuma==false)) 
{
parte1.deficienciacegueira.focus();
document.getElementById("Deficiencias").innerHTML='<label id="deficiencias" role="alert">Por gentileza, marque uma das opções abaixo. - 1.5 Qual(is) deficiência(s) você possui?</label>';
return false;
}
else
{
parte1.submit();
return true;
}
}