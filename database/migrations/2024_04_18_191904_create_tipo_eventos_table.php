<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipo_eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150);
            $table->string('descricao', 200);
            $table->timestamps();
        });

        //adicionar o relacionamento com a tabela eventos
        Schema::table('eventos', function(Blueprint $table){
            $table->unsignedBigInteger('tip_eve_id');
            $table->foreign('tip_eve_id')->references('id')->on('tipo_eventos');
        });

        //adicionar o relacionamento com a tabela programação
        Schema::table('programacao', function(Blueprint $table){
            $table->unsignedBigInteger('tip_eve_id');
            $table->foreign('tip_eve_id')->references('id')->on('tipo_eventos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        //remove o relacionamento com a tabela eventos
        Schema::table('eventos', function(Blueprint $table){
            //remove a fk
            $table->dropForeign('eventos_tip_eve_id_foreign');
            //remover a coluna unidade_id
            $table->dropColumn('tip_eve_id');
        });

        //remove o relacionamento com a tabela programação
        Schema::table('programacao', function(Blueprint $table){
            //remove a fk
            $table->dropForeign('programacao_tip_eve_id_foreign');
            //remover a coluna unidade_id
            $table->dropColumn('tip_eve_id');
        });
        Schema::dropIfExists('tipo_eventos');
    }
};
