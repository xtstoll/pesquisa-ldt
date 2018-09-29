function validarP4()
{
var brailleVirtual=document.getElementById("braillevirtual").value;
var brailleLinha=document.getElementById("braillelinha").value;
var tecladoExterno=document.getElementById("tecladoexterno").value;
var digitacaoVoz=document.getElementById("digitacaovoz").value;

if(brailleVirtual=="")
{
parte4.braillevirtual.focus();
document.getElementById("brailleVirtual").innerHTML='        <label for="braille-virtual" id="brailleVirtual" role="alert">Por gentileza, selecione uma opção. - 4.1 Você utiliza algum teclado virtual braille no seu celular / tablet? <em>Por exemplo, Entrada via Braille do iOS ou o aplicativo Soft Braille Keyboard do Android.</em></label>    ';
}
else if(brailleLinha=="")
{
parte4.braillelinha.focus();
document.getElementById("brailleLinha").innerHTML='        <label for="braille-linha" id="brailleLinha" role="alert">Por gentileza, selecione uma opção. - 4.2 Você utiliza alguma linha braille com seu leitor de tela?</label>';    
}
else if(tecladoExterno=="")
{
parte4.tecladoexterno.focus();

document.getElementById("tecladoExterno").innerHTML='        <label for="teclado-externo" id="tecladoExterno" role="alert">Por gentileza, selecione uma opção. - 4.3 Você utiliza algum teclado externo para navegar e digitar no seu celular / tablet?</label>';    
}
else if(digitacaoVoz=="")
{
parte4.digitacaovoz.focus();
document.getElementById("digitacaoVoz").innerHTML='        <label for="digitacao-voz" id="digitacaoVoz" role="alert">Por gentileza, selecione uma opção. - 4.4 Com qual frequência você utiliza o recurso de digitação por voz no seu celular / tablet?</label>';    

}
else
{
parte4.submit();


}
}