<div class="sidebar ">
    <nav class="navbar" role="navigation">
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
                    <a href="{{ url('sistema/') }}">Lista de Pacientes</a>
                </li>
                <li>
                    <a href="{{ url('sistema/cadastro') }}">Cadastrar</a>
                </li>
                <h2>Agendamento</h2>
                <li>
                    <a href="{{ url('sistema/agendamentos') }}">Lista de Agendamentos</a>
                </li>
                <li>
                    <a href="{{ url('sistema/agendamento') }}">Agendamento</a>
                </li>
            </ul>
            <div class="d-grid gap-2" id="logout">
                <a href="{{route('logout')}}">
                    <button class="btn btn-outline-danger" type="button">Logout</button>
                </a>
            </div>
        </div>
    </nav>
    
</div>

<link rel="stylesheet" href="{{asset('assets/sistema/styles/sidebar.css')}}" />

<script>
    function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>