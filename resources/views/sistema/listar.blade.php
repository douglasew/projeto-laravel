<!DOCTYPE html>
<html lang="en">
<head>
    @include('_shared.sistema.head')
    <title>Sistema | Lista</title>
</head>
<body>
    @include('_shared.sistema.sidebar')
    @include('_shared.sistema.nav')
        @if(session('sucesso'))
			<p class="alert alert-success">{{session('sucesso')}}</p>
		@endif
        <table class="table table-hover">
            <thead className="thead-dark">
                <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th style="text-align:center">Detalhes</th>
                <th style="text-align:center">Editar</th>
                <th style="text-align:center">Ficha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                <tr>

                    <td>{{$paciente['id']}}</td>
                    <td>{{$paciente['nome']}}</td>
                    <td>{{$paciente['telefone']}}</td>
                    
                    <td style="text-align:center">
                        <Button class="btn btn-primary">
                            <a href="{{route('sistema.detalhes', ['id' => $paciente['id']])}}">
                                <i class="bi bi-info-circle-fill" style="font-size: 15px; color=black;"></i>
                            </a>
                        </Button>
                    </td>
                    <td style="text-align:center">
                        <Button class="btn btn-warning">
                            <a href="{{ route('sistema.editar',['id' => $paciente['id']]) }}">
                                <i class="bi bi-person-lines-fill" style="font-size: 15px; color=black;"></i>
                            </a>
                        </Button>
                    </td>
                    <td style="text-align:center">
                        <Button class="btn btn-info">
                            <a href="">
                                <i class="bi bi-file-earmark-text-fill " style="font-size: 15px;"></i>
                            </a>
                        </Button>
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