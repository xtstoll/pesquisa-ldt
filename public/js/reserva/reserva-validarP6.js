function validarP6()
{
var Sorteio=document.getElementById("sorteio").value;
var Publicarmos=document.getElementById("publicarmos").value;
var Email=document.getElementById("email").value;
var Nome=document.getElementById("nome").value;
var Pesquisa=document.getElementById("pesquisa").value;
var validarMail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
if(Sorteio=="")
{
parte6.sorteio.focus();
document.getElementById("Sorteio").innerHTML='<label for="sorteio" id="Sorteio" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - Quer ter a oportunidade de receber um pr\u00EAmio para sua participa\u00E7\u00E3o nesta pesquisa?</label>';
}
else if(Publicarmos=="")
{
parte6.publicarmos.focus();
document.getElementById("Publicarmos").innerHTML='<label for="publicarmos" id="Publicarmos" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - Quer receber um e-mail quando publicarmos os resultados da pesquisa?</label>';
}
else if(!validarMail.test(Email))
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