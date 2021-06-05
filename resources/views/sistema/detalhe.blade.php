<!DOCTYPE html>
<html lang="en">
<head>
    @include('_shared.sistema.head')
    <title>Paciente | Detalhe</title>
</head>
<body>
    @include('_shared.sistema.sidebar')
    <div class="container">
        <form class="row g-3" method="GET">
            @include('_shared.sistema.form')

            <a href="{{ url('sistema/') }}">
                <button type="button" class="btn btn-primary">Voltar</button>
            </a>
            
        </form>
    </div>

    <link rel="stylesheet" href="{{asset('assets/sistema/styles/global.css')}}" />
    @include('_shared.sistema.scriptBootstrap')  
</body>
</html>