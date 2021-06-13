<div class="msb" id="msb">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <div class="brand-wrapper">
                <div class="brand-name-wrapper">
                    <a class="navbar-brand" href="{{ url('sistema/') }}"> SISTEMA </a>
                </div>
            </div>
        </div>
        <div class="side-menu-container">
            <ul class="nav navbar-nav">
                <h2>Paciente</h2>
                <li>
                    <a href="{{ url('sistema/') }}">Lista</a>
                </li>
                <li>
                    <a href="{{ url('sistema/cadastro') }}">Cadastrar</a>
                </li>
                <h2>Agendamento</h2>
                <li>
                    <a href="{{ url('sistema/agendamento') }}">Agendamento</a>
                </li>
                <li>
                    <a href="{{ url('sistema/agendamentos') }}">Agendamentos</a>
                </li>
                <li>
                    <a href="{{route('logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<link rel="stylesheet" href="{{asset('assets/sistema/styles/sidebar.css')}}" />