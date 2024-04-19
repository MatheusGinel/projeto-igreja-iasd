<?php

namespace Database\Seeders;

use App\Models\Usuarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //instanciando um objeto
        $usuario = new Usuarios();
        $usuario->usu_nome_exibicao = 'Jessica';
        $usuario->usu_nome_completo = 'Jessica Goes';
        $usuario->usu_contato = '(18)9856-2547';
        $usuario->usu_endereco = 'Rua amado, 568';
        $usuario->usu_email = 'teste@gmail.com';
        $usuario->usu_senha = '1234';
        $usuario->save();

        //o método create (atenção para o atributo fillable da classe)
        Usuarios::create([
            'usu_nome_exibicao' => 'Marisa',
            'usu_nome_completo' => 'Marisa Silva',
            'usu_contato' => '(11) 8563-5847',
            'usu_endereco' => 'Rua senhor aleatorio, 89',
            'usu_email' => 'mari@gmail.com',
            'usu_senha' => '789456123',
        ]);

        //insert
        DB::table('usuarios')->insert([
            'usu_nome_exibicao' => 'Matheus',
            'usu_nome_completo' => 'Matheus Neves',
            'usu_contato' => '(11) 5896-2417',
            'usu_endereco' => 'Rua agenor, 258',
            'usu_email' => 'matt@hotmail.com',
            'usu_senha' => '25933',
        ]);
    }
}
