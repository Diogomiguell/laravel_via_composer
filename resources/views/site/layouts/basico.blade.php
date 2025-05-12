<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    </head>
    <body>
        @include('site.layouts._partials.topo')
        @yield('content') {{-- nome do contéudo que as sections irão receber --}}
    </body>
</html>