<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        $erro = '';

        if($request->get('erro') == 1){
            $erro = 'Usuário e/ou senha não existe';
        }

        if($request->get('erro') == 2){
            $erro = 'Necessário realizar login para ter acesso á página';
        }

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request){
        //regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);
        
        //recuperamos os parametros do formulário
        $email = $request->get('usuario');
        $password = $request->get('senha');

        //iniciar model usuarios
        $user = new Usuarios();
        $usuario = $user->where('usu_email', $email)
                ->where('usu_senha', $password)
                ->get()
                ->first();
        
        if(isset($usuario->usu_nome_exibicao)){
            $_SESSION['nome'] = $usuario->usu_nome_exibicao;
            $_SESSION['email'] = $usuario->usu_email;

            /*session()->put('nome', $usuario->usu_nome_exibicao);
            session()->put('email', $usuario->usu_email);*/

            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
        //return view('site.home');
    }

    public function sair(){
        session_destroy();
        return redirect()->route('site.index');
    }
}
