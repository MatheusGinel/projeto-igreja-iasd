@extends('site.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')
    <div class="conteudo-destaque">
        <br>
        <div class="pagina-inicial">
            <center>
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
                <div class="img-igreja">
                    <img src="{{ asset ('img/igreja.jpeg') }}">
                </div>
            </center>
        </div>
    </div>
@endsection