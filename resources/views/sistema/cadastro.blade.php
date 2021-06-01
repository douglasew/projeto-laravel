<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_shared.sistema.head')
        <title>Sistema | Cadastro</title>
    </head>
    <body>
        @include('_shared.sistema.sidebar')
        @include('_shared.sistema.nav')

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Erro!</strong>
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        
        <div class="container">
            <form class="row g-3" action="{{route('cadastrar')}}" method="post">
                @csrf 
                @include('_shared.sistema.form')

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <link rel="stylesheet" href="{{asset('assets/sistema/styles/global.css')}}" />

        @include('_shared.sistema.scriptBootstrap')
        <script src="{{asset('assets/sistema/js/cep.js')}}"></script>
    </body>
</html>
