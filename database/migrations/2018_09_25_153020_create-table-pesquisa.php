<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePesquisa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger("parte")->default(0);
            $table->smallInteger("ano_nascimento")->nullable();
            $table->enum("genero", ['homem','mulher','outro','semresposta'])->nullable();
            $table->string("estado",2)->nullable();
            $table->string("escolaridade",20)->nullable();
            $table->json("deficiencia")->nullable();
            $table->string("ldt_desktop1",30)->nullable();
            $table->string("ldt_desktop2",30)->nullable();
            $table->string("ldt_atualizado", 20)->nullable();
            $table->string("ldt_mobile",30)->nullable();
            $table->string("ldt_uso",20)->nullable();
            $table->string("dispositivo_usado",30)->nullable();
            $table->string("aprendeu",20)->nullable();
            $table->enum("ldt_pagar", ['sim','nao'])->nullable();
            $table->string("ldt_pagar_motivo",250)->nullable();
            $table->String("navegador_desktop",30)->nullable();
            $table->String("navegador_mobile",30)->nullable();
            $table->string("nav_encontrar",30)->nullable();
            $table->string("nav_irpara",30)->nullable();
            $table->string("nav_marcas",30)->nullable();
            $table->string("nav_barra",20)->nullable();
            $table->string("nav_teclas",20)->nullable();
            $table->string("nav_dificuldade",20)->nullable();
            $table->string("braille_virtual",20)->nullable();
            $table->string("linha_braille",20)->nullable();
            $table->string("teclado_externo",20)->nullable();
            $table->string("digitacao_voz",20)->nullable();
            $table->string("preferencia_navegacao",20)->nullable();
            $table->string("mais_acessivel",20)->nullable();
            $table->string("lbi",3)->nullable();
            $table->string("site_acessivel",100)->nullable();
            $table->string("site_inacessivel",100)->nullable();
            $table->string("sorteio",3)->nullable();
            $table->string("publicada",3)->nullable();
            $table->string("email",100)->nullable();
            $table->string("nome",100)->nullable();
            $table->text("opniao")->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respostas');
    }
}
