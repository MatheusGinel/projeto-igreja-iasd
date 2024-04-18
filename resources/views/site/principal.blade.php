@extends('site.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')
    <div class="conteudo-destaque">
        <br>
        <div class="esquerda">
            <div class="informacoes">
                <h1>Bem-vindo a Igreja Adventista do CEA</h1>
                <p>Aqui é onde você pode ficar informado sobre as noticias da igreja<p>
                <div class="chamada">
                    <img src="{{ asset ('img/check.png') }}">
                    <span class="texto-branco">Escala completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset ('img/check.png') }}">
                    <span class="texto-branco">Seu departamento na tecnologia</span>
                </div>
            </div>

            <div class="calendario">
                <img src="{{ asset ('img/datas.jpg') }}">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Entrar</h1>
                <p>Faça login com o seu usuário e senha e preencha a sua escala do próximo mês!<p>
                @component('site.layouts._components.login', ['classe' => 'borda-branca'])
                @endcomponent                
            </div>
        </div>
    </div>
@endsection