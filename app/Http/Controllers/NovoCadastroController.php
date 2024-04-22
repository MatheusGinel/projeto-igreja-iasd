<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class NovoCadastroController extends Controller
{
    public function novoCadastro(Request $request){
        return view('site.novo-cadastro');
    }

    public function salvar(Request $request){
        //realizar a validação dos dados do formulário recebidos no request
        $regras = [
            'usu_nome_exibicao' => 'required|min:3|max:20',
            'usu_nome_completo' => 'required|unique:usuarios',
            'usu_contato' => 'required',
            'usu_endereco' => 'required',
            'usu_email' => 'required|email|unique:usuarios',
            'usu_senha' => 'required|min:6|max:10',
        ];

        $feedback = [
            //'required' => 'O campo :attribute deve ser preenchido',
            //usu_nome_exibicao
            'usu_nome_exibicao.required' => 'O campo nome de exibição deve ser preenchido',
            'usu_nome_exibicao.min' => 'O campo nome de exibição precisa ter no mínimo 3 caracteres',
            'usu_nome_exibicao.max' => 'O campo nome de exibição precisa ter no maximo 20 caracteres',

            //usu_nome_completo
            'usu_nome_completo.required' => 'O campo nome completo deve ser preenchido',
            'usu_nome_completo.unique' => 'O nome completo inserido já está em uso',

            //usu_contato
            'usu_contato.required' => 'O campo de telefone deve ser preenchido',
            
            //usu_endereco
            'usu_endereco.required' => 'O campo de endereço deve ser preenchido',

            //usu_email
            'usu_email.required' => 'O campo e-mail deve ser preenchido',
            'usu_email.email' => 'O e-mail inserido é inválido',
            'usu_email.unique' => 'O e-mail inserido já está em uso',

            //usu_senha
            'usu_senha.required' => 'O campo senha deve ser preenchido',
            'usu_senha.min' => 'A senha deve ter no mínimo 6 caracteres',
            'usu_senha.max' => 'A senha deve ter no maximo 10 caracteres'
        ];
         
        $request->validate($regras, $feedback);
        Usuarios::create($request->all());
        return redirect()->route('site.index');
    }
}
