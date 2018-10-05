function validarP6()
{
var Email=document.getElementById("email").value;
var Nome=document.getElementById("nome").value;
var Pesquisa=document.getElementById("pesquisa").value;
var validarMail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
if(validarMail.test(Email))
{
document.getElementById("Email").innerHTML='<label for="email" id="Email">Qual o seu e-mail?</label>';
}
if((Nome!="") | (Nome.length>=3))
{
document.getElementById("Nome").innerHTML='<label for="nome" id="Nome">Qual o seu nome?</label>';
}
if(Pesquisa!="")
{
document.getElementById("Pesquisa").innerHTML='<label for="pesquisa" id="Pesquisa">O que você achou da pesquisa?</label>';
}

if(!validarMail.test(Email))
{
parte6.email.focus();
document.getElementById("Email").innerHTML='<label for="email" id="Email" role="alert"><strong style="color:red;">Por favor, digite uma resposta v\u00E1lida.</strong> - Qual o seu e-mail?';
}
else if((Nome=="") | (Nome.length<=3))
{
parte6.nome.focus();
document.getElementById("Nome").innerHTML='<label for="nome" id="Nome" role="alert"><strong style="color:red;">Por favor, digite uma resposta v\u00E1lida.</strong> - Qual o seu nome?</label>';
}
else if(Pesquisa=="")
{
parte6.pesquisa.focus();
document.getElementById("Pesquisa").innerHTML='<label for="pesquisa" id="Pesquisa" role="alert"><strong style="color:red;">Por favor, digite uma resposta.</strong> - O que voc\u00EA achou da pesquisa?</label>';
}
else
{
parte6.submit();
}
}