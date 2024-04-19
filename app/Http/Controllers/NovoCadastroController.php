<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class NovoCadastroController extends Controller
{
    public function novoCadastro(Request $request){
        $usuario = new Usuarios();
        $usuario->usu_nome_exibicao = $request->input('usu_nome_exibicao');
        $usuario->usu_nome_completo = $request->input('usu_nome_completo');
        $usuario->usu_contato = $request->input('usu_contato');
        $usuario->usu_endereco = $request->input('usu_endereco');
        $usuario->usu_email = $request->input('usu_email');
        $usuario->usu_senha = $request->input('usu_senha');
        $usuario->save();

        return view('site.novo-cadastro');
    }
}
