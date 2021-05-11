<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- SEO Meta Tags -->
        <meta
            name="description"
            content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template."
        />
        <meta name="author" content="Inovatik" />

        <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
        <meta property="og:site_name" content="" />
        <!-- website name -->
        <meta property="og:site" content="" />
        <!-- website link -->
        <meta property="og:title" content="" />
        <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" />
        <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" />
        <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" />
        <!-- where do you want your post to link to -->
        <meta property="og:type" content="article" />

        <!-- Website Title -->
        <title>Dental System - sistema odontológico</title>

        <!-- Styles -->
        <link
            href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext"
            rel="stylesheet"
        />
        <link
            href="{{asset('assets/site/css/bootstrap.css')}}"
            rel="stylesheet"
        />
        <link
            href="{{asset('assets/site/css/fontawesome-all.css')}}"
            rel="stylesheet"
        />
        <link href="{{asset('assets/site/css/swiper.css')}}" rel="stylesheet" />
        <link
            href="{{asset('assets/site/css/magnific-popup.css')}}"
            rel="stylesheet"
        />
        <link href="{{asset('assets/site/css/styles.css')}}" rel="stylesheet" />

        <!-- Favicon  -->
        <link rel="icon" href="{{asset('assets/site/images/favicon.png')}}" />
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
        <!-- Preloader -->
        <div class="spinner-wrapper">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <!-- end of preloader -->

        <!-- Navigation -->
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



        
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col">
                    <h4>Sobre Dental System</h4>
                    <p>
                        O Dental System armazena todas as informações de
                        seus pacientes desde tratamentos, imagens,
                        orçamentos, anamnese até receituários e
                        atestados em um só lugar e com máxima segurança.
                    </p>
                </div>
            </div>
            <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col middle">
                    <h4>Links importantes</h4>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">
                                Leia nosso
                                <a
                                    class="turquoise"
                                    href="{{ url('/termo_consentimento') }}"
                                    >Termo de consentimento</a
                                >,
                                <a
                                    class="turquoise"
                                    href="{{ url('/politica_privacidade') }}"
                                    >Politica de privacidade</a
                                >
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col last">
                    <h4>Mídia social</h4>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i
                                class="fab fa-facebook-f fa-stack-1x"
                            ></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i
                                class="fab fa-google-plus-g fa-stack-1x"
                            ></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i
                                class="fab fa-linkedin-in fa-stack-1x"
                            ></i>
                        </a>
                    </span>
                </div>
            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</div>
<!-- end of footer -->
<!-- end of footer -->

<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">
                    Copyright © 2021 - Todos os direitos reservardos
                </p>
            </div>
            <!-- end of col -->
        </div>
        <!-- enf of row -->
    </div>
    <!-- end of container -->
</div>
<!-- end of copyright -->
<!-- end of copyright -->

<!-- Scripts -->
<script src="{{asset('assets/site/js/jquery.min.js')}}"></script>
<!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{asset('assets/site/js/popper.min.js')}}"></script>
<!-- Popper tooltip library for Bootstrap -->
<script src="{{asset('assets/site/js/bootstrap.min.js')}}"></script>
<!-- Bootstrap framework -->
<script src="{{asset('assets/site/js/jquery.easing.min.js')}}"></script>
<!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{asset('assets/site/js/swiper.min.js')}}"></script>
<!-- Swiper for image and text sliders -->
<script src="{{asset('assets/site/js/jquery.magnific-popup.js')}}"></script>
<!-- Magnific Popup for lightboxes -->
<script src="{{asset('assets/site/js/validator.min.js')}}"></script>
<!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="{{asset('assets/site/js/scripts.js')}}"></script>
<!-- Custom scripts -->
</body>
</html>