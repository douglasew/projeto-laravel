<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_shared.sistema.head')
        <title>Sistema | Lista</title>
    </head>
    <body>
        @include('_shared.sistema.sidebar')

        <div class="container">
            <nav class="p-3 bg-dark text-white">
                <!-- Navbar content -->

                <div class="container-fluid">
                    <form class="d-flex" action="{{route('paciente.listar')}}" method="GET">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Pesquisar paciente"
                            aria-label="Search"
                            name="nome"
                            value="{{$busca}}"
                        />
                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
            </nav>
            @if(session('sucesso'))
            <p class="alert alert-success">{{session('sucesso')}}</p>
            @endif
            <table class="table table-hover">
                <thead className="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th style="text-align: center">Detalhes</th>
                        <th style="text-align: center">Editar</th>
                        <th style="text-align: center">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $paciente)
                    <tr>
                        <td>{{$paciente['id']}}</td>
                        <td>{{$paciente['nome']}}</td>
                        <td>{{$paciente['telefone']}}</td>

                        <td style="text-align: center">
                            <a href="{{route('paciente.detalhes', ['id' => $paciente['id']])}}">
                                <button class="btn btn-info">
                                    <i
                                        class="bi bi-info-circle-fill"
                                        style="font-size: 15px; color=black;"
                                    ></i>
                                </button>
                            </a>
                        </td>
                        <td style="text-align: center">
                            <a href="{{ route('paciente.edicao',['id' => $paciente['id']])}}">
                                <button class="btn btn-warning">
                                    <i
                                        class="bi bi-person-lines-fill"
                                        style="font-size: 15px; color=black;"
                                    ></i>
                                </button>
                            </a>
                        </td>

                        <td style="text-align: center">
                            <a href="{{route('excluir', ['id' => $paciente['id']])}}">
                                <button class="btn btn-danger">
                                    <i
                                        class="bi bi-archive-fill"
                                        style="font-size: 15px; color=black;"
                                    ></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$pacientes->links('vendor.pagination.bootstrap-4')}}
        </div>

        @include('_shared.sistema.scriptBootstrap')

    </body>
</html>
