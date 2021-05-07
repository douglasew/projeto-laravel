<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_shared.sistema.head')
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <main>
                @if(session('erro'))
                <div class="alert alert-danger" role="alert">
                    <strong>Erro!</strong> {{session('erro')}}
                </div>
                @endif
                
                <form class="mb-3" action="{{route('logar')}}" method="post">
                    @csrf 
                    <h2>Dental System</h2>
                    <div class="form-floating mb-3">
                        <input
                            type="email"
                            class="form-control"
                            id="floatingInput"
                            placeholder="E-mail"
                            name="email"
                            required
                        />
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input
                            type="password"
                            class="form-control"
                            id="floatingPassword"
                            placeholder="Senha"
                            name="senha"
                            required
                        />
                        <label for="floatingPassword">Senha</label>
                    </div>
                    <br />
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lembrar de mim
                        </label>
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary">Login</button>

                    <link rel="stylesheet" href="{{asset('assets/sistema/styles/pages/Login.css')}}" />
                    <link rel="stylesheet" href="{{asset('assets/sistema/styles/global.css')}}" />
                </form>
            </main>
        </div>
        @include('_shared.sistema.scriptBootstrap')
    </body>
</html>
