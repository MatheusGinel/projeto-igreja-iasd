@extends('site.layouts.basico')

@section('titulo', 'Novo Cadastro')

@section('conteudo')
    <div class="conteudo-destaque">
        <br>

        <div class="login">
            <div class="novo-contato">
                <center>
                    <br>
                    <h1>Novo Cadastro aqui!</h1>
                    <p>Olá, faça o seu cadastro em nosso sistema</p>
                    <p>E realize as atividades do seu <i><b class="letra-cor-destaque">Departamento</b></i></p><br>
                    @component('site.layouts._components.cadastro', ['classe' => 'borda-branca'])
                    @endcomponent    
                </center>            
            </div>
        </div>
    </div>
@endsection