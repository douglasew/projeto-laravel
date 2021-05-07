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
                <li>
                    <a href="{{ url('sistema/') }}">Lista</a>
                </li>
                <li>
                    <a href="{{ url('sistema/cadastro') }}">Cadastrar</a>
                </li>
                <li>
                    <a href="#">Marcação</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<link rel="stylesheet" href="{{asset('assets/sistema/styles/sidebar.css')}}" />