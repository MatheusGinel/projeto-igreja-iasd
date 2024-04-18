<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>IASD CEA - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>

    <body>
        @include('site.layouts._partials.topo')
        @yield('conteudo')
        @include('site.layouts._partials.rodape')
    </body>
</html>