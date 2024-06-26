@extends('site.layouts.basico')

@section('titulo', 'Escala')

@section('conteudo')
    <div class="conteudo-destaque">
        <br>

        <div class="login">
            <div class="contato">
                <center>
                    <br>
                    <h1>Entrar</h1>
                    <p>Olá, faça o login com o seu nome de usuário e senha!</p>
                    <p>E realize as atividades do seu <i><b class="letra-cor-destaque">Departamento</b></i></p><br>
                    @component('site.layouts._components.login', ['classe' => 'borda-branca'])
                    @endcomponent    
                </center>            
            </div>
        </div>
    </div>
@endsection