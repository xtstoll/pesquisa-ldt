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
parte1.deficienciacegueira.setAttribute('aria-label', "cegueira não selecionado");
}

if(deficienciaBaixaVisao==true)
{
parte1deficienciabaixavisao.setAttribute('aria-label', "baixa visão selecionado");
}
else
{
parte1.deficienciabaixavisao.setAttribute('aria-label', "baixa visão não selecionado");
}

if(deficienciaCognitiva==true)
{
parte1deficienciacognitiva.setAttribute('aria-label', "deficiência cognitiva selecionado");
}
else
{
parte1.deficienciacognitiva.setAttribute('aria-label', "deficiência cognitiva não selecionado");
}

if(deficienciaMotora==true)
{
parte1.deficienciamotora.setAttribute('aria-label', "deficiência motora selecionado");
}
else
{
parte1.deficienciamotora.setAttribute('aria-label', "deficiência motora não selecionado");
}

if(deficienciaOutra==true)
{
parte1.deficienciaoutra.setAttribute('aria-label', "outra deficiência selecionado");
}
else
{
parte1.deficienciaoutra.setAttribute('aria-label', "outra deficiência não selecionado");
}

if(deficienciaNenhuma==true)
{
parte1.deficiencianenhuma.setAttribute('aria-label', "nenhuma deficiência selecionado");
}
else
{
parte1.deficiencianenhuma.setAttribute('aria-label', "nenhuma deficiência não selecionado");
}

if(deficienciaAuditiva==true)
{
parte1.deficienciaauditiva.setAttribute('aria-label', "deficiência auditiva selecionado");
}
else
{
parte1.deficienciaauditiva.setAttribute('aria-label', "deficiencia auditiva não selecionado");
}




}