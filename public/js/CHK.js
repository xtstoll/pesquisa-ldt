function CHK()
{
var deficienciaCegueira=document.getElementById("deficienciacegueira").checked;
var deficienciaBaixaVisao=document.getElementById("deficienciabaixavisao").checked;
var deficienciaCognitiva=document.getElementById("deficienciacognitiva").checked;
var deficienciaAuditiva=document.getElementById("deficienciaauditiva").checked;
var deficienciaMotora=document.getElementById("deficienciamotora").checked;
var deficienciaOutra=document.getElementById("deficienciaoutra").checked;
var deficienciaNenhuma=document.getElementById("deficiencianenhuma").checked;
if(deficienciaCegueira==true)
{
parte1.deficienciacegueira.setAttribute('aria-label', "cegueira selecionado");
}
else
{
parte1.deficienciacegueira.setAttribute('aria-label', "cegueira n\u00E3o selecionado");
}

if(deficienciaBaixaVisao==true)
{
parte1deficienciabaixavisao.setAttribute('aria-label', "baixa vis\u00E3o selecionado");
}
else
{
parte1.deficienciabaixavisao.setAttribute('aria-label', "baixa vis\u00E3o n\u00E3o selecionado");
}

if(deficienciaCognitiva==true)
{
parte1deficienciacognitiva.setAttribute('aria-label', "defici\u00EAncia cognitiva selecionado");
}
else
{
parte1.deficienciacognitiva.setAttribute('aria-label', "defici\u00EAncia cognitiva n\u00E3o selecionado");
}
if(deficienciaMotora==true)
{
parte1.deficienciamotora.setAttribute('aria-label', "defici\u00EAncia motora selecionado");
}
else
{
parte1.deficienciamotora.setAttribute('aria-label', "defici\u00EAncia motora n\u00E3o selecionado");
}
if(deficienciaOutra==true)
{
parte1.deficienciaoutra.setAttribute('aria-label', "outra defici\u00EAncia selecionado");
}
else
{
parte1.deficienciaoutra.setAttribute('aria-label', "outra defici\u00EAncia n\u00E3o selecionado");
}

if(deficienciaNenhuma==true)
{
parte1.deficiencianenhuma.setAttribute('aria-label', "nenhuma defici\u00EAncia selecionado");
}
else
{
parte1.deficiencianenhuma.setAttribute('aria-label', "nenhuma defici\u00EAncia n\u00E3o selecionado");
}

if(deficienciaAuditiva==true)
{
parte1.deficienciaauditiva.setAttribute('aria-label', "defici\u00EAncia auditiva selecionado");
}
else
{
parte1.deficienciaauditiva.setAttribute('aria-label', "defici\u00EAncia auditiva n\u00E3o selecionado");
}
}