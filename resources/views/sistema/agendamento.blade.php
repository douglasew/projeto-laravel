<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_shared.sistema.head')
        <title>Sistema | Agendamento</title>
    </head>
    <body>
        @include('_shared.sistema.sidebar')

        @if($errors->any())
            <div class="alert alert-danger container">
                <strong>Erro!</strong>
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        
        <div class="container">
            <h2>Dados pessoais</h2>
            <form class="row g-3" action="{{route('agendar')}}" method="post">
                @csrf 
                <div class="col-md-4">
                    <label class="form-label">Nome completo</label>
                    <input
                        type="text"
                        placeholder="Maria da silva"
                        class="form-control"
                        name="nome"
                    />
                </div>
                <div class="col-md-4">
                    <label class="form-label">Telefone</label>
                    <input
                        type="text"
                        placeholder="(11) 2222-3333"
                        class="form-control"
                        name="telefone" 
                    />
                </div>
                <div class="col-md-4">
                    <label class="form-label">Idade</label>
                    <input
                        type="number"
                        placeholder="20"
                        class="form-control"
                        name="idade"
                    />
                </div>
                <div class="col-md-4">
                    <label class="form-label">Data agendamento</label>
                    <input 
                        type="date" 
                        class="form-control" 
                        name="data" 
                    />
                </div>
                <div class="col-md-4">
                    <label class="form-label">Hora agendamento</label>
                    <input
                        type="time"
                        
                        class="form-control"
                        name="hora"
                    />
                </div>
                <div class="form-group">
                    <label class="form-label">Denstista:</label>
                    <select name="dentista_id" class="form-control" name="dentista_id">
                        <option selected>Selecione o dentista</option>
                        <option value="1">Felipe Leonardo Gonçalves</option>
                        <option value="2">Ayla Cláudia das Neves</option>
                        <option value="3">Elias Tomás Nogueira</option>
                        <option value="4">Mirella Rebeca Bernardes</option>
                        <option value="5">Oliver Isaac Marcelo Farias</option>
                        <option value="6">Bianca Rosa Joana Sales</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Agendar</button>
            </form>

        <link rel="stylesheet" href="{{asset('assets/sistema/styles/global.css')}}" />

        @include('_shared.sistema.scriptBootstrap')
        <script src="{{asset('assets/sistema/js/cep.js')}}"></script>
    </body>
</html>
