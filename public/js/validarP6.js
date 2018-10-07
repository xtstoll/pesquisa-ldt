function validarP6()
{
var Sorteio=document.getElementById("sorteio").value;
var Publicarmos=document.getElementById("publicarmos").value;
var Email=document.getElementById("email").value;
var validarMail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

if(Sorteio!="")
{
document.getElementById("Sorteio").innerHTML='<label for="sorteio" id="Sorteio">6.1 Quer ter a oportunidade de ganhar um powerbank (carregador de celular port\u00E1til) por sua participa\u00E7\u00E3o nesta pesquisa?</label>';
}
if(Publicarmos!="")
{
document.getElementById("Publicarmos").innerHTML='<label for="publicarmos" id="Publicarmos">6.2 Quer receber um e-mail quando publicarmos os resultados da pesquisa?</label>';
}
if(validarMail.test(Email))
{
document.getElementById("Email").innerHTML='<label for="email" id="Email">6.3 Qual o seu e-mail?</label>';
}

else if(Sorteio=="")
{
parte6.sorteio.focus();
document.getElementById("Sorteio").innerHTML='<label for="sorteio" id="Sorteio" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 6.1 Quer ter a oportunidade de ganhar um powerbank (carregador de celular port\u00E1til) por sua participa\u00E7\u00E3o nesta pesquisa?</label>';
}
else if(Publicarmos=="")
{
parte6.publicarmos.focus();
document.getElementById("Publicarmos").innerHTML='<label for="publicarmos" id="Publicarmos" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 6.2 Quer receber um e-mail quando publicarmos os resultados da pesquisa?</label>';
}
if(!validarMail.test(Email))
{
parte6.email.focus();
document.getElementById("Email").innerHTML='<label for="email" id="Email" role="alert"><strong style="color:red;">Por favor, digite uma resposta v\u00E1lida.</strong> - 6.3 Qual o seu e-mail?';
}
else
{
parte6.submit();
}
}