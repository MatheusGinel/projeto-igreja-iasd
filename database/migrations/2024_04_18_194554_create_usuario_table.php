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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('usu_nome_exibicao', 50);
            $table->string('usu_nome_completo', 50);
            $table->string('usu_contato', 50);
            $table->string('usu_endereco', 50);
            $table->string('usu_email', 50);
            $table->string('usu_senha', 50);
        });

        Schema::table('usuario_departamento', function(Blueprint $table){
            $table->unsignedBigInteger('usu_id');
            $table->foreign('usu_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuario_departamento', function(Blueprint $table){
            $table->dropForeign('usuario_departamento_usu_id_foreign');
            $table->dropColumn('usu_id');
        });
        Schema::dropIfExists('usuarios');
    }
};