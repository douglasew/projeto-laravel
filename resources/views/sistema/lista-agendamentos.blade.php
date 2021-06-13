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
                    <form class="d-flex" action="{{route('sistema.agendamentos')}}" method="GET">
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
                        <th>Telefone</th>
                        
                        <th style="text-align: center">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agendamentos as $agendamento)
                    <tr>
                        <td>{{$agendamento['id']}}</td>
                        <td>{{$agendamento['nome']}}</td>
                        <td>{{$agendamento['telefone']}}</td>

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
                                                Excluir Agendamento
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
                                        <div class="modal-body">Deseja excluir {{$agendamento['nome']}} ?</div>
                                        <div class="modal-footer">
                                            <button
                                                type="button"
                                                class="btn btn-secondary"
                                                data-dismiss="modal"
                                            >
                                                Fechar
                                            </button>
                                                <a href="{{route('agendamento.excluir', ['id' => $agendamento['id']])}}">
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
            {{$agendamentos->links('vendor.pagination.bootstrap-4')}}
        </div>

        @include('_shared.sistema.scriptBootstrap')

    </body>
</html>
