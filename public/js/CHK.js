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
parte1.deficienciacegueira.setAttribute('aria-label', "cegueira n�o selecionado");
}

if(deficienciaBaixaVisao==true)
{
parte1deficienciabaixavisao.setAttribute('aria-label', "baixa vis�o selecionado");
}
else
{
parte1.deficienciabaixavisao.setAttribute('aria-label', "baixa vis�o n�o selecionado");
}

if(deficienciaCognitiva==true)
{
parte1deficienciacognitiva.setAttribute('aria-label', "defici�ncia cognitiva selecionado");
}
else
{
parte1.deficienciacognitiva.setAttribute('aria-label', "defici�ncia cognitiva n�o selecionado");
}

if(deficienciaMotora==true)
{
parte1.deficienciamotora.setAttribute('aria-label', "defici�ncia motora selecionado");
}
else
{
parte1.deficienciamotora.setAttribute('aria-label', "defici�ncia motora n�o selecionado");
}

if(deficienciaOutra==true)
{
parte1.deficienciaoutra.setAttribute('aria-label', "outra defici�ncia selecionado");
}
else
{
parte1.deficienciaoutra.setAttribute('aria-label', "outra defici�ncia n�o selecionado");
}

if(deficienciaNenhuma==true)
{
parte1.deficiencianenhuma.setAttribute('aria-label', "nenhuma defici�ncia selecionado");
}
else
{
parte1.deficiencianenhuma.setAttribute('aria-label', "nenhuma defici�ncia n�o selecionado");
}

if(deficienciaAuditiva==true)
{
parte1.deficienciaauditiva.setAttribute('aria-label', "defici�ncia auditiva selecionado");
}
else
{
parte1.deficienciaauditiva.setAttribute('aria-label', "deficiencia auditiva n�o selecionado");
}




}