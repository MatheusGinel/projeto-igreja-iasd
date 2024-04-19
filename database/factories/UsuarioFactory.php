<?php

namespace Database\Factories;

use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuarios>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usu_nome_exibicao' => '',
            'usu_nome_completo' => '',
            'usu_contato' => '',
            'usu_endereco' => '',
            'usu_email' => '',
            'usu_senha' => '',
        ];
    }

    //$factory->define(Usuarios::class, function( Faker $faker) {

    //});
}
