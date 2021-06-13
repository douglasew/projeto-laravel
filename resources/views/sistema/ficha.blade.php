<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_shared.sistema.head')
        <title>Paciente | Ficha</title>
    </head>
    <body>
        @include('_shared.sistema.sidebar')
        <div class="container">
            <form class="row g-3" method="GET">
                <textarea
                    style="resize: none; margin-top: 5%"
                    name="ficha"
                    value="{{old('ficha', $ficha['ficha'])}}"
                    id=""
                    cols="30"
                    rows="35"
                >
                </textarea>
                
                <a href="{{ url('sistema/') }}">
                    <button type="button" class="btn btn-primary">
                        Voltar
                    </button>
                </a>
            </form>
        </div>
        <link
            rel="stylesheet"
            href="{{asset('assets/sistema/styles/global.css')}}"
        />
        @include('_shared.sistema.scriptBootstrap')
    </body>
</html>
