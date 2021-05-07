<!DOCTYPE html>
<html lang="en">
<head>
    @include('_shared.sistema.head')
    <title>Paciente | Editar</title>
</head>
<body>
    @include('_shared.sistema.sidebar')
    @include('_shared.sistema.nav')
    <div class="container">
        <form class="row g-3" action="./index.html" method="POST">
            @include('_shared.sistema.form')

            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>

    <link rel="stylesheet" href="{{asset('assets/styles/global.css')}}" />

    @include('_shared.sistema.scriptBootstrap')
</body>
</html>