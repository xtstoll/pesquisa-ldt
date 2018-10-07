<?php
namespace App\Http\Controllers;

use App\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class RespostaController extends Controller
{

    public function parte1(Request $r)
    {
        $resposta = new Resposta();
        $resposta->parte = 1;
        $resposta->ano_nascimento = $r->ano_nascimento;
        $resposta->genero = $r->genero;
        $resposta->estado = $r->estado;
        $resposta->escolaridade = $r->escolaridade;
        $deficiencias = $r->deficiencia;
        $resposta->def_cegueira = in_array('cegueira', $deficiencias) ? true : false;
        $resposta->def_bx_visao = in_array('baixa-visao', $deficiencias) ? true : false;
        $resposta->def_cognitiva = in_array('cognitiva', $deficiencias) ? true : false;
        $resposta->def_auditiva = in_array('auditiva', $deficiencias) ? true : false;
        $resposta->def_motora = in_array('motora', $deficiencias) ? true : false;
        $resposta->def_outra = in_array('outra', $deficiencias) ? true : false;
        $resposta->def_nenhuma = in_array('nenhuma', $deficiencias) ? true : false;
        $resposta->save();

        Cookie::queue("id", $resposta->id);
        return view('parte2', [
            'id' => $resposta->id
        ]);
    }

    public function parte2(Request $r)
    {
        $resposta = Resposta::findOrFail($r->cookie('id'));
        $resposta->ldt_desktop1 = $r->ldt_desktop1;
        $resposta->ldt_desktop2 = $r->ldt_desktop2;
        $resposta->ldt_atualizado = $r->ldt_atualizado;
        $resposta->ldt_mobile = $r->ldt_mobile;
        $resposta->ldt_uso = $r->ldt_uso;
        $resposta->dispositivo_usado = $r->dispositivo_usado;
        $resposta->aprendeu = $r->aprendeu;
        $resposta->ldt_pagar = $r->pagar;
        $resposta->ldt_pagar_motivo = $r->ldt_pagar_motivo;

        $resposta->save();
        return view('parte3', [
            'id' => $resposta->id
        ]);
    }

    public function parte3(Request $r)
    {
        $resposta = Resposta::findOrFail($r->cookie('id'));
        $resposta->navegador_desktop = $r->navegador_desktop;
        $resposta->navegador_mobile = $r->navegador_mobile;
        $resposta->nav_encontrar = $r->nav_encontrar;
        $resposta->nav_irpara = $r->nav_irpara;
        $resposta->nav_marcas = $r->nav_marcas;
        $resposta->nav_barra = $r->nav_barra;
        $resposta->nav_teclas = $r->nav_teclas;
        $resposta->nav_dificuldade = $r->nav_dificuldade;

        $resposta->save();
        return view('parte4', [
            'id' => $resposta->id
        ]);
    }

    public function parte4(Request $r)
    {
        $resposta = Resposta::findOrFail($r->cookie('id'));
        $resposta->braille_virtual = $r->braille_virtual;
        $resposta->linha_braille = $r->linha_braille;
        $resposta->teclado_externo = $r->teclado_externo;
        $resposta->digitacao_voz = $r->digitacao_voz;

        $resposta->save();
        return view('parte5', [
            'id' => $resposta->id
        ]);
    }

    public function parte5(Request $r)
    {
        $resposta = Resposta::findOrFail($r->cookie('id'));
        $resposta->preferencia_navegacao = $r->preferencia_navegacao;
        $resposta->mais_acessivel = $r->mais_acessivel;
        $resposta->lbi = $r->lbi;
        $resposta->site_acessivel = $r->site_acessivel;
        $resposta->site_inacessivel = $r->site_inacessivel;

        $resposta->save();
        return view('parte6', [
            'id' => $resposta->id
        ]);
    }

    public function parte6(Request $r)
    {
        $resposta = Resposta::findOrFail($r->cookie('id'));
        $resposta->email = $r->email;
        $resposta->nome = $r->nome;
        $resposta->opniao = $r->opniao;

        $resposta->save();
        return view('confirm', [
            'id' => $resposta->id
        ]);
    }
}
