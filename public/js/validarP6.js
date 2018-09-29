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
document.getElementById("Sorteio").innerHTML='<label for="sorteio" id="Sorteio" role="alert">Por gentileza, selecione uma opção. - Quer ter a oportunidade de receber um prêmio para sua participação nesta pesquisa?</label>';
}
else if(Publicarmos=="")
{
parte6.publicarmos.focus();
document.getElementById("Publicarmos").innerHTML='<label for="publicarmos" id="Publicarmos" role="alert">Por gentileza, selecione uma opção. - Quer receber um e-mail quando publicarmos os resultados da pesquisa?</label>';
}
else if(!validarMail.test(Email))
{
parte6.email.focus();
document.getElementById("Email").innerHTML='<label for="email" id="Email" role="alert">O endereço de e-mail informado, não é válido. Por gentileza, informe seu e-mail novamente.';
}
else if((Nome=="") | (Nome.length<=3))
{
parte6.nome.focus();
document.getElementById("Nome").innerHTML='<label for="nome" id="Nome" role="alert">Por gentileza, insira seu nome corretamente. - Qual o seu nome?</label>';
}
else if(Pesquisa=="")
{
parte6.pesquisa.focus();
document.getElementById("Pesquisa").innerHTML='<label for="pesquisa" id="Pesquisa" role="alert">Por gentileza, nos dê o seu feedback. - O que você achou da pesquisa?</label>';
}
else
{
parte6.submit();
}
}

