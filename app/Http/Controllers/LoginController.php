<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        $erro = '';

        if($request->get('erro') == 1){
            $erro = 'Usuário e/ou senha não existe';
        }

        if($request->get('erro') == 3){
            $erro = 'Necessário realizar login para ter acesso á página';
        } else {
            return view('site.entrar');
        }

    return view('site.entrar', ['titulo' => 'Login', 'erro' => $erro]);
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
            session_start(); 
            
            $_SESSION['nome'] = $usuario->usu_nome_exibicao;
            $_SESSION['email'] = $usuario->usu_email;

            return view('app.home');
        } else {
            return redirect()->route('site.entrar', ['erro' => 1]);
        }
        //return view('site.home');
    }

    public function sair(){
        session_destroy();
        return redirect()->route('site.principal');
    }
}
