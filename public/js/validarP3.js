function validarP3()
{
var navDesk=document.getElementById("navegadordesktop").value;
var navMobile=document.getElementById("navegadormobile").value;
var navEncontrar=document.getElementById("navencontrar").value;
var navIrPara=document.getElementById("navirpara").value;
var navMarcas=document.getElementById("navmarcas").value;
var navBarra=document.getElementById("navbarra").value;
var navTeclas=document.getElementById("navteclas").value;
var navDificil=document.getElementById("navdificil").value;
var navDificil2=document.getElementById("navdificil2").value;
var navDificil3=document.getElementById("navdificil3").value;
var navLinks=document.getElementById("navlinks").value;

if(navDesk!="selecione")
{
document.getElementById("navDesk").innerHTML='<label for="navegadordesktop"  id="navDesk">3.1 Qual navegador voc\u00EA mais utiliza no seu computador / notebook?</label>';    
}
if(navMobile!="")
{
document.getElementById("navMobile").innerHTML='<label for="navegadormobile" id="navMobile">3.2 Qual navegador voc\u00EA mais utiliza no seu celular / tablet?</label>';    
}
if(navEncontrar!="")
{
document.getElementById("navEncontrar").innerHTML='<label for="navencontrar" id="navEncontrar">3.3 Ao tentar encontrar informa\u00E7\u00F5es em uma p\u00E1gina da Internet, qual das seguintes op\u00E7\u00F5es voc\u00EA costuma utilizar?</label>';
}
if(navIrPara!="")
{
document.getElementById("navIrPara").innerHTML='<label for="navirpara" id="navIrPara">3.4 Com qual frequ\u00EAncia voc\u00EA utiliza os links \u201Cir para conte\u00FAdo\u201D ou \u201Cir para o menu\u201D quando est\u00E3o dispon\u00EDveis em uma p\u00E1gina?</label>';
}
if(navMarcas!="")
{
document.getElementById("navMarcas").innerHTML='<label for="navmarcas" id="navMarcas">3.5 Com qual frequ\u00EAncia voc\u00EA utiliza a navega\u00E7\u00E3o pelas marcas / regi\u00F5es (tecla D ou R) em uma p\u00E1gina?</label>';
}
if(navBarra!="")
{
document.getElementById("navBarra").innerHTML='<label for="navbarra" id="navBarra">3.6 Com qual frequ\u00EAncia voc\u00EA utiliza as op\u00E7\u00F5es de aumentar/diminuir fonte ou alternar contraste, quando est\u00E3o dispon\u00EDveis em uma p\u00E1gina?</label>';
}
if(navTeclas!="")
{
document.getElementById("navTeclas").innerHTML='<label for="navteclas" id="navTeclas">3.7 Com qual frequ\u00EAncia voc\u00EA utiliza as teclas de atalho de um site, quando est\u00E3o dispon\u00EDveis? Por exemplo, a tecla P para publicar um novo status no Facebook.</label>';
}
if(navDificil!="")
{
document.getElementById("navDificil").innerHTML='<label for="navdificil" id="navDificil">3.8 Em qual elemento voc\u00EA tem mais dificuldade de navegar?</label>';
}
if(navDificil2!="")
{
document.getElementById("navDificil2").innerHTML='<label for="navdificil2" id="navDificil2">3.9 A partir da lista anterior, qual \u00E9 segundo elemento voc\u00EA tem mais dificuldade de navegar?</label>';
}
if(navDificil3!="")
{
document.getElementById("navDificil3").innerHTML='<label for="navdificil3" id="navDificil3">3.10 A partir da lista anterior, qual \u00E9 terceiro elemento voc\u00EA tem mais dificuldade de navegar?</label>';
}
if(navLinks!="")
{
document.getElementById("navLinks").innerHTML='<label for="navlinks" id="navLinks">3.11 Quando existem dois ou mais links seguidos, o seu leitor de tela l\u00EA todos na mesma linha ou cada link em uma linha separada?</label>';
}

if(navDesk=="selecione")
{	
parte3.navegadordesktop.focus();
document.getElementById("navDesk").innerHTML='<label for="navegador-desktop"  id="navDesk" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 3.1 Qual navegador voc\u00EA mais utiliza no seu computador / notebook?</label>';    
}
else if(navMobile=="")
{
parte3.navegadormobile.focus(); 
document.getElementById("navMobile").innerHTML='<label for="navegador-mobile" id="navMobile" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 3.2 Qual navegador voc\u00EA mais utiliza no seu celular / tablet?</label>';    
}
else if(navEncontrar=="")
{
parte3.navencontrar.focus();
document.getElementById("navEncontrar").innerHTML='<label for="nav-encontrar" id="navEncontrar" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 3.3 Ao tentar encontrar informa\u00E7\u00F5es em uma p\u00E1gina da Internet, qual das seguintes op\u00E7\u00F5es voc\u00EA costuma utilizar?</label>';
}
else if(navIrPara=="")
{
parte3.navirpara.focus();
document.getElementById("navIrPara").innerHTML='<label for="nav-irpara" id="navIrPara" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 3.4 Com qual frequ\u00EAncia voc\u00EA utiliza os links \u201Cir para conte\u00FAdo\u201D ou \u201Cir para o menu\u201D quando est\u00E3o dispon\u00EDveis em uma p\u00E1gina?</label>';
}
else if(navMarcas=="")
{
parte3.navmarcas.focus();
document.getElementById("navMarcas").innerHTML='<label for="nav-marcas" id="navMarcas" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 3.5 Com qual frequ\u00EAncia voc\u00EA utiliza a navega\u00E7\u00E3o pelas marcas / regi\u00F5es (tecla D ou R) em uma p\u00E1gina?</label>';
}
else if(navBarra=="")
{
parte3.navbarra.focus();
document.getElementById("navBarra").innerHTML='<label for="nav-barra" id="navBarra" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 3.6 Com qual frequ\u00EAncia voc\u00EA utiliza as op\u00E7\u00F5es de aumentar/diminuir fonte ou alternar contraste, quando est\u00E3o dispon\u00EDveis em uma p\u00E1gina?</label>';           
}
else if(navTeclas=="")
{
parte3.navteclas.focus();
document.getElementById("navTeclas").innerHTML='<label for="nav-teclas" id="navTeclas" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 3.7 Com qual frequ\u00EAncia voc\u00EA utiliza as teclas de atalho de um site, quando est\u00E3o dispon\u00EDveis? Por exemplo, a tecla P para publicar um novo status no Facebook.</label>';
}
else if(navDificil=="")
{
parte3.navdificil.focus();
document.getElementById("navDificil").innerHTML='<label for="nav-dificil" id="navDificil" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 3.8 Em qual elemento voc\u00EA tem mais dificuldade de navegar?</label>'; 
}
else if(navDificil2=="")
{
parte3.navdificil2.focus();
document.getElementById("navDificil2").innerHTML='<label for="nav-dificil2" id="navDificil2" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 3.9 A partir da lista anterior, qual \u00E9 segundo elemento voc\u00EA tem mais dificuldade de navegar?</label>'; 
}
else if(navDificil3=="")
{
parte3.navdificil3.focus();
document.getElementById("navDificil3").innerHTML='<label for="nav-dificil3" id="navDificil3" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 3.10 A partir da lista anterior, qual \u00E9 terceiro elemento voc\u00EA tem mais dificuldade de navegar?</label>'; 
}
else if(navLinks=="")
{
parte3.navlinks.focus();
document.getElementById("navLinks").innerHTML='<label for="nav-links" id="navLinks" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 3.11 Quando existem dois ou mais links seguidos, o seu leitor de tela l\u00EA todos na mesma linha ou cada link em uma linha separada?</label>'; 
}
else
{
parte3.submit();
}
}