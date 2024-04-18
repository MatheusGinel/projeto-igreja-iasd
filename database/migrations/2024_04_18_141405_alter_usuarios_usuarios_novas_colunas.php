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
        /*Schema::table('usuarios', function (Blueprint $table) {
            $table->string('uf', 2);
            $table->string('emaill', 150);
        });*/

        /*Schema::table('usuarios', function (Blueprint $table) {
            $table->string('site', 150)->after('nome')->nullable()->default('');
        });*/

        //Reset: executa o rollback de todas migrations 
        //Refresh executa o rollback de todas as migrations + o migrate para recriar os objetos
        //Fresh: faz o drop de todos os objetos do banco de dados + o migrate para recriar os objetos
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {
            //para remover colunas
            //$table->dropColumn('uf');
            //$table->dropColumn('email');
            //$table->dropColumn(['uf', 'email']);
        });
    }
};
