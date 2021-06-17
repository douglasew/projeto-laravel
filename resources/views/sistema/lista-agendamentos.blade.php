<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_shared.sistema.head')
        <title>Sistema | Agendamentos</title>
    </head>
    <body>
        @include('_shared.sistema.sidebar')

        <div class="container">
            <nav class="p-3 bg-dark text-white">
                <!-- Navbar content -->

                <div class="container-fluid">
                    <form class="d-flex" action="{{route('agendamento.listar')}}" method="GET">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Pesquisar agendamento"
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
                        <th>Data</th>
                        <th>Hora</th>
                        
                        <th style="text-align: center">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agendamentos as $agendamento)
                    <tr>
                        <td>{{$agendamento['id']}}</td>
                        <td>{{$agendamento['nome']}}</td>
                        <td>{{$agendamento['data']}}</td>
                        <td>{{$agendamento['hora']}}</td>
                        
                        <td style="text-align: center">
                            <a href="{{route('agendamento.excluir', ['id' => $agendamento['id']])}}">
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
            {{$agendamentos->links('vendor.pagination.bootstrap-4')}}
        </div>

        @include('_shared.sistema.scriptBootstrap')

    </body>
</html>
