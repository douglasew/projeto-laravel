<nav
    class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top"
>
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="{{ url('/') }}"
        ><img
            src="{{asset('assets/site/images/logo.svg')}}"
            alt="alternative"
    /></a>

    <!-- Mobile Menu Toggle Button -->
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#header"
                    >Inicio <span class="sr-only">(current)</span></a
                >
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#services"
                    >Serviços</a
                >
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#pricing"
                    >Preços</a
                >
            </li>

            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a
                    class="nav-link dropdown-toggle page-scroll"
                    href="#about"
                    id="navbarDropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Sobre</a
                >
                <div
                    class="dropdown-menu"
                    aria-labelledby="navbarDropdown"
                >
                    <a
                        class="dropdown-item"
                        href="{{ url('/termo_consentimento') }}"
                        ><span class="item-text"
                            >Termos e condições</span
                        ></a
                    >
                    <div class="dropdown-items-divide-hr"></div>
                    <a
                        class="dropdown-item"
                        href="{{ url('/politica_privacidade') }}"
                        ><span class="item-text"
                            >Política de Privacidade</span
                        ></a
                    >
                </div>
            </li>
            <!-- end of dropdown menu -->

            <li class="nav-item">
                <a
                    class="nav-link page-scroll"
                    href="{{ url('/login') }}"
                    ><strong>Login</strong></a
                >
            </li>
        </ul>
    </div>
</nav>