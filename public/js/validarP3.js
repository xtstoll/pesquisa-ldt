function validarP3()
{
//pegar valor dos inputse guardar na variavel. 
var navDesk=document.getElementById("navegadordesktop").value;
var navMobile=document.getElementById("navegadormobile").value;
var navEncontrar=document.getElementById("navencontrar").value;
var navIrPara=document.getElementById("navirpara").value;
var navMarcas=document.getElementById("navmarcas").value;
var navBarra=document.getElementById("navbarra").value;
    var navTeclas=document.getElementById("navteclas").value;
var navDificil=document.getElementById("navdificil").value;
//Validar campos se est�o sem serem preenchidos.


if(navDesk=="selecione")
{


//Atribuir foco para o campo incorreto.
parte3.navegadordesktop.focus();
//Substituir label atual por uma outra contendo o alerta para o usu�rio.
document.getElementById("navDesk").innerHTML='<label for="navegador-desktop"  id="navDesk" role="alert">Por gentileza, selecione uma op��o. - 3.1 Qual navegador voc� mais utiliza no seu computador / notebook?</label>';    



}
else if(navMobile=="")
{
parte3.navegadormobile.focus(); 
document.getElementById("navMobile").innerHTML='<label for="navegador-mobile" id="navMobile" role="alert">Por gentileza, selecione uma op��o. - 3.2 Qual navegador voc� mais utiliza no seu celular / tablet?</label>';    

}
else if(navEncontrar=="")
{
parte3.navencontrar.focus();
document.getElementById("navEncontrar").innerHTML='<label for="nav-encontrar" id="navEncontrar" role="alert">Por gentileza, selecione uma op��o. - 3.3 Ao tentar encontrar informa��es em uma p�gina da Internet, qual das seguintes op��es voc� costuma utilizar?</label>';

}
else if(navMarcas=="")
{
parte3.navmarcas.focus();
document.getElementById("navMarcas").innerHTML='<label for="nav-marcas" id="navMarcas" role="alert">Por gentileza, selecione uma op��o. - 3.5 Com qual frequ�ncia voc� utiliza a navega��o pelas marcas / regi�es (tecla D ou R) em uma p�gina?</label>';

}
else if(navBarra=="")
{
parte3.navbarra.focus();
document.getElementById("navBarra").innerHTML='<label for="nav-barra" id="navBarra" role="alert">Por gentileza, selecione uma op��o. - 3.6 Com qual frequ�ncia voc� utiliza as op��es de aumentar/diminuir fonte ou alternar contraste, quando est�o dispon�veis em uma p�gina?</label>';           

}
else if(navTeclas=="")
{
parte3.navteclas.focus();
document.getElementById("navTeclas").innerHTML='<label for="nav-teclas" id="navTeclas" role="alert">Por gentileza, selecione uma op��o. - 3.7 Com qual frequ�ncia voc� utiliza as teclas de atalho de um site, quando est�o dispon�veis? Por exemplo, a tecla P para publicar um novo status no Facebook.</label>';

}
else if(navDificil=="")
{
parte3.navdificil.focus();
document.getElementById("navDificil").innerHTML='<label for="nav-dificil" id="navDificil" role="alert">Por gentileza, selecione uma op��o. - 3.8 Em qual elemento voc� tem mais dificuldade de navegar?</label>'; 

}
else
{
//Liberar formul�rio para submit.
parte3.submit();

}


}