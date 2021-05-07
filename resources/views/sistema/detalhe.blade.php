<!DOCTYPE html>
<html lang="en">
<head>
    @include('_shared.sistema.head')
    <title>Paciente | Detalhe</title>
</head>
<body>
    @include('_shared.sistema.sidebar')
    @include('_shared.sistema.nav')
    <div class="container">
        <form class="row g-3" >
            @include('_shared.sistema.form')
        </form>
    </div>

    <link rel="stylesheet" href="{{asset('assets/sistema/styles/global.css')}}" />

    @include('_shared.sistema.scriptBootstrap')
</body>
</html>