<!DOCTYPE html>
<html lang="en">
<head>
    @include('_shared.sistema.head')
    <title>Paciente | Editar</title>
</head>
<body>
    @include('_shared.sistema.sidebar')
    <div class="container">
        <form class="row g-3" action="{{route('editar' , ['id' => $paciente['id']])}}"  method="POST">
            @csrf
            @include('_shared.sistema.form')

            <button type="submit" class="btn btn-primary">Editar</button>
            
        </form>
    </div>

    <link rel="stylesheet" href="{{asset('assets/styles/global.css')}}" />
    <script src="{{asset('assets/sistema/js/cep.js')}}"></script>
    @include('_shared.sistema.scriptBootstrap')
</body>
</html>