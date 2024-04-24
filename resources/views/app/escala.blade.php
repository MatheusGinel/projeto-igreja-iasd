@extends('app.layouts.basico')

@section('titulo', 'Escala')

@section('conteudo')
    <div class="conteudo-destaque">
        <br>
        <div class="esquerda">
            <div class="informacoes">
                <h1>Gerenciamentoaaaaaaaaaa de Escalas da Igreja Adventista</h1>
                <p>Sistema para o líder fazer a escala do seu departamento<p>
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
    </div>
@endsection