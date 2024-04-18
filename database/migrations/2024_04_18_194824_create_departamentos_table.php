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
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dep_nome', 50);
            $table->string('dep_descricao', 50);
            $table->dateTime('dep_criacao');
            $table->dateTime('dep_alteracao');
            $table->dateTime('dep_exclusao');
        });

        Schema::table('usuario_departamento', function(Blueprint $table){
            $table->unsignedBigInteger('usu_dep_id');
            $table->foreign('usu_dep_id')->references('id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuario_departamento', function(Blueprint $table){
            //remove a fk
            $table->dropForeign('usuario_departamento_usu_dep_id_foreign');
            //remover a coluna unidade_id
            $table->dropColumn('usu_dep_id');
        });
        Schema::dropIfExists('departamentos');
    }
};
