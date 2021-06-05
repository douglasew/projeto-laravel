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
                    <form class="d-flex" action="{{route('sistema.listar')}}" method="GET">
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
                        <th style="text-align: center">Ficha</th>
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
                            <button class="btn btn-info">
                                <a
                                    href="{{route('sistema.detalhes', ['id' => $paciente['id']])}}"
                                >
                                    <i
                                        class="bi bi-info-circle-fill"
                                        style="font-size: 15px; color=black;"
                                    ></i>
                                </a>
                            </button>
                        </td>
                        <td style="text-align: center">
                            <button class="btn btn-warning">
                                <a
                                    href="{{ route('sistema.edicao',['id' => $paciente['id']])}}"
                                >
                                    <i
                                        class="bi bi-person-lines-fill"
                                        style="font-size: 15px; color=black;"
                                    ></i>
                                </a>
                            </button>
                        </td>
                        <td style="text-align: center">
                            <button class="btn btn-primary">
                                <a href="{{ route('sistema.ficha',['id' => $paciente['id']])}}">
                                    <i
                                        class="bi bi-file-earmark-text-fill"
                                        style="font-size: 15px"
                                    ></i>
                                </a>
                            </button>
                        </td>
                        <td style="text-align: center">
                            <button 
                                class="btn btn-danger" 
                                type="button" 
                                data-toggle="modal" 
                                data-target="#exampleModal"
                            >
                                <i
                                    class="bi bi-archive-fill"
                                    style="font-size: 15px"
                                ></i>
                            </button>
                            <div
                                class="modal fade"
                                id="exampleModal"
                                tabindex="-1"
                                role="dialog"
                                aria-labelledby="exampleModalLabel"
                                aria-hidden="true"
                                style="text-align: center"
                            >
                                <div class="modal-dialog" role="document" >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title w-100 text-center" id="exampleModalLabel">
                                                Excluir Paciente
                                            </h5>
                                            <button
                                                type="button"
                                                class="close"
                                                data-dismiss="modal"
                                                aria-label="Close"
                                            >
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Deseja excluir {{$paciente['nome']}} ?</div>
                                        <div class="modal-footer">
                                            <button
                                                type="button"
                                                class="btn btn-secondary"
                                                data-dismiss="modal"
                                            >
                                                Fechar
                                            </button>
                                                <a href="{{route('excluir', ['id' => $paciente['id']])}}">
                                                    <button type="button" class="btn btn-danger">
                                                        Excluir
                                                    </button>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
