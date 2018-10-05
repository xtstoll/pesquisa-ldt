function validarP4()
{
var brailleVirtual=document.getElementById("braillevirtual").value;
var brailleLinha=document.getElementById("braillelinha").value;
var tecladoExterno=document.getElementById("tecladoexterno").value;
var digitacaoVoz=document.getElementById("digitacaovoz").value;

if(brailleVirtual=="")
{
parte4.braillevirtual.focus();
document.getElementById("brailleVirtual").innerHTML='<label for="braille-virtual" id="brailleVirtual" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 4.1 Voc\u00EA utiliza algum teclado virtual braille no seu celular / tablet? <em>Por exemplo, Entrada via Braille do iOS ou o aplicativo Soft Braille Keyboard do Android.</em></label>';
}
else if(brailleLinha=="")
{
parte4.braillelinha.focus();
document.getElementById("brailleLinha").innerHTML='<label for="braille-linha" id="brailleLinha" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 4.2 Voc\u00EA utiliza alguma linha braille com seu leitor de tela?</label>';    
}
else if(tecladoExterno=="")
{
parte4.tecladoexterno.focus();
document.getElementById("tecladoExterno").innerHTML='<label for="teclado-externo" id="tecladoExterno" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 4.3 Voc\u00EA utiliza algum teclado externo para navegar e digitar no seu celular / tablet?</label>';    
}
else if(digitacaoVoz=="")
{
parte4.digitacaovoz.focus();
document.getElementById("digitacaoVoz").innerHTML='<label for="digitacao-voz" id="digitacaoVoz" role="alert"><strong style="color:red;">Por favor, selecione uma op\u00E7\u00E3o.</strong> - 4.4 Com qual frequ\u00EAncia voc\u00EA utiliza o recurso de digita\u00E7\u00E3o por voz no seu celular / tablet?</label>';    
}
else
{
parte4.submit();

}
}