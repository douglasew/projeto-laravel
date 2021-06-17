@extends('_shared.site.template')
        <!-- Header -->
        <header id="header" class="header">
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text-container">
                                <h1>
                                    <span class="turquoise">Dental System</span
                                    ><br />
                                    Sistemas para clinicas odontológicas
                                </h1>
                                <p class="p-large">
                                    Não adianta o programa odontológico ser mil
                                    coisas, se você precisa de horas de
                                    treinamento para aprender a fazer o fluxo de
                                    caixa. Quer controlar suas finanças com
                                    alguns cliques
                                </p>
                                <a
                                    class="btn-solid-lg page-scroll"
                                    href="#services"
                                    >DESCOBRIR</a
                                >
                            </div>
                            <!-- end of text-container -->
                        </div>
                        <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="image-container">
                                <img
                                    class="img-fluid"
                                    src="{{asset('assets/site/images/header-teamwork.svg')}}"
                                    alt="alternative"
                                />
                            </div>
                            <!-- end of image-container -->
                        </div>
                        <!-- end of col -->
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of container -->
            </div>
            <!-- end of header-content -->
        </header>

        <!-- Services -->
        <div id="services" class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Serviços de crescimento de negócios</h2>
                        <p class="p-heading p-large">
                            Serviços de crescimento de negócios Atendemos
                            pequenas e médias clinicas em com serviços de
                            crescimento de alta qualidade que são apresentados
                            abaixo
                        </p>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Card -->
                        <div class="card">
                            <img
                                class="card-image"
                                src="{{asset('assets/site/images/services-icon-1.svg')}}"
                                alt="alternative"
                            />
                            <div class="card-body">
                                <h4 class="card-title">Market Analysis</h4>
                                <p>
                                    Nossa equipe de profissionais de marketing
                                    entusiasmados analisará e avaliará como sua
                                    empresa se compara aos concorrentes mais
                                    próximos
                                </p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <img
                                class="card-image"
                                src="{{asset('assets/site/images/services-icon-2.svg')}}"
                                alt="alternative"
                            />
                            <div class="card-body">
                                <h4 class="card-title">Opportunity Scan</h4>
                                <p>
                                    Assim que o processo de análise de mercado
                                    for concluído, nossa equipe irá procurar
                                    oportunidades que estejam ao seu alcance
                                </p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <img
                                class="card-image"
                                src="{{asset('assets/site/images/services-icon-3.svg')}}"
                                alt="alternative"
                            />
                            <div class="card-body">
                                <h4 class="card-title">Planos</h4>
                                <p>
                                    Com todas as informações disponíveis, será
                                    apresentado a você um plano de ação que sua
                                    empresa precisa seguir
                                </p>
                            </div>
                        </div>
                        <!-- end of card -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of cards-1 -->
        <!-- end of services -->

        <!-- Details 1 -->
        <div class="basic-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h2>
                                Planeje seus passos de crescimento de negócios
                            </h2>
                            <p>
                                Potenti posuere tempus imperdiet habitasse est
                                aenean suscipit metus ipsum sit malesuada,
                                dictumst velit ullamcorper vestibulum pretium
                                porttitor posuere orci non. imperdiet mi primis
                                commodo hendrerit facilisis nisi vehicula
                            </p>
                        </div>
                        <!-- end of text-container -->
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img
                                class="img-fluid"
                                src="{{asset('assets/site/images/details-1-office-worker.svg')}}"
                                alt="alternative"
                            />
                        </div>
                        <!-- end of image-container -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of basic-1 -->
        <!-- end of details 1 -->

        <!-- Details 2 -->
        <div class="basic-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img
                                class="img-fluid"
                                src="{{asset('assets/site/images/details-2-office-team-work.svg')}}"
                                alt="alternative"
                            />
                        </div>
                        <!-- end of image-container -->
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h2>
                                Procure otimização onde quer que seja possível
                            </h2>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">
                                        Condimentum metus tellus nam consectetur
                                        feugiat aliquet cursus
                                    </div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">
                                        vehicula libero, pretium curae non curae
                                        sed ad mattis interdum
                                    </div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">
                                        ecenas ullamcorper diam sollicitudin
                                        sagittis himenaeos justo
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end of text-container -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of basic-2 -->
        <!-- end of details 2 -->

        <!-- Details Lightboxes -->
        <!-- Details Lightbox 1 -->
        <div
            id="details-lightbox-1"
            class="lightbox-basic zoom-anim-dialog mfp-hide"
        >
            <div class="container">
                <div class="row">
                    <button
                        title="Close (Esc)"
                        type="button"
                        class="mfp-close x-button"
                    >
                        ×
                    </button>
                    <div class="col-lg-8">
                        <div class="image-container">
                            <img
                                class="img-fluid"
                                src="{{asset('assets/site/images/details-lightbox-1.svg')}}"
                                alt="alternative"
                            />
                        </div>
                        <!-- end of image-container -->
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-4">
                        <h3>Design And Plan</h3>
                        <hr />
                        <h5>Core feature</h5>
                        <p>
                            The emailing module basically will speed up your
                            email marketing operations while offering more
                            subscriber control.
                        </p>
                        <p>
                            Do you need to build lists for your email campaigns?
                            It just got easier with Evolo.
                        </p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">
                                    List building framework
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">
                                    Easy database browsing
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">
                                    User administration
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">
                                    Automate user signup
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">
                                    Quick formatting tools
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">
                                    Fast email checking
                                </div>
                            </li>
                        </ul>
                        <a
                            class="btn-solid-reg mfp-close page-scroll"
                            href="#request"
                            >REQUEST</a
                        >
                        <a
                            class="btn-outline-reg mfp-close as-button"
                            href="#screenshots"
                            >BACK</a
                        >
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of lightbox-basic -->
        <!-- end of details lightbox 1 -->

        <!-- Details Lightbox 2 -->
        <div
            id="details-lightbox-2"
            class="lightbox-basic zoom-anim-dialog mfp-hide"
        >
            <div class="container">
                <div class="row">
                    <button
                        title="Close (Esc)"
                        type="button"
                        class="mfp-close x-button"
                    >
                        ×
                    </button>
                    <div class="col-lg-8">
                        <div class="image-container">
                            <img
                                class="img-fluid"
                                src="{{asset('assets/site/images/details-lightbox-2.svg')}}"
                                alt="alternative"
                            />
                        </div>
                        <!-- end of image-container -->
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-4">
                        <h3>Search To Optimize</h3>
                        <hr />
                        <h5>Core feature</h5>
                        <p>
                            The emailing module basically will speed up your
                            email marketing operations while offering more
                            subscriber control.
                        </p>
                        <p>
                            Do you need to build lists for your email campaigns?
                            It just got easier with Evolo.
                        </p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">
                                    List building framework
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">
                                    Easy database browsing
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">
                                    User administration
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">
                                    Automate user signup
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">
                                    Quick formatting tools
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">
                                    Fast email checking
                                </div>
                            </li>
                        </ul>
                        <a
                            class="btn-solid-reg mfp-close page-scroll"
                            href="#request"
                            >REQUEST</a
                        >
                        <a
                            class="btn-outline-reg mfp-close as-button"
                            href="#screenshots"
                            >BACK</a
                        >
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of lightbox-basic -->
        <!-- end of details lightbox 2 -->
        <!-- end of details lightboxes -->

        <!-- Pricing -->
        <div id="pricing" class="cards-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Escolha o plano ideal para você</h2>
                        <p class="p-heading p-large">
                            Preparamos planos de preços para todos os orçamentos
                            para que você possa começar imediatamente. Eles são
                            ótimos para pequenas empresas e grandes organizações
                        </p>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">AGENDA</div>
                                <div class="card-subtitle">
                                    Só para ver o que pode ser alcançado
                                </div>
                                <hr class="cell-divide-hr" />
                                <div class="price">
                                    <span class="currency">R$</span
                                    ><span class="value">99,90</span>
                                    <div class="frequency">mensal</div>
                                </div>
                                <hr class="cell-divide-hr" />
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            viverra ut phasellus dapibus
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            aenean placerat ut himenaeos
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-times"></i>
                                        <div class="media-body">
                                            viverra ut phasellus dapibus
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-times"></i>
                                        <div class="media-body">
                                            viverra ut phasellus dapibusa
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-times"></i>
                                        <div class="media-body">
                                            viverra ut phasellus dapibus
                                        </div>
                                    </li>
                                </ul>
                                <div class="button-wrapper">
                                    <a
                                        class="btn-solid-reg page-scroll"
                                        href="#request"
                                        >SOLICITAR</a
                                    >
                                </div>
                            </div>
                        </div>
                        <!-- end of card -->
                        <!-- end of card -->

                        <!-- Card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">GESTÃO</div>
                                <div class="card-subtitle">
                                    Muito apropriado para o curto prazo
                                </div>
                                <hr class="cell-divide-hr" />
                                <div class="price">
                                    <span class="currency">R$</span
                                    ><span class="value">149,90</span>
                                    <div class="frequency">mensal</div>
                                </div>
                                <hr class="cell-divide-hr" />
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            viverra ut phasellus dapibus
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            aenean placerat ut himenaeos
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            viverra ut phasellus dapibus
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            viverra ut phasellus dapibusa
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-times"></i>
                                        <div class="media-body">
                                            viverra ut phasellus dapibus
                                        </div>
                                    </li>
                                </ul>
                                <div class="button-wrapper">
                                    <a
                                        class="btn-solid-reg page-scroll"
                                        href="#request"
                                        >SOLICITAR</a
                                    >
                                </div>
                            </div>
                        </div>
                        <!-- end of card -->
                        <!-- end of card -->

                        <!-- Card-->
                        <div class="card">
                            <div class="label">
                                <p class="best-value">Melhor Plano</p>
                            </div>
                            <div class="card-body">
                                <div class="card-title">VENDAS</div>
                                <div class="card-subtitle">
                                    Obrigatório para grandes empresas
                                </div>
                                <hr class="cell-divide-hr" />
                                <div class="price">
                                    <span class="currency">R$</span
                                    ><span class="value">159,90</span>
                                    <div class="frequency">mensal</div>
                                </div>
                                <hr class="cell-divide-hr" />
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            aenean placerat ut himenaeos
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            viverra ut phasellus dapibus
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            viverra ut phasellus dapibus
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            viverra ut phasellus dapibusa
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            viverra ut phasellus dapibus
                                        </div>
                                    </li>
                                </ul>
                                <div class="button-wrapper">
                                    <a
                                        class="btn-solid-reg page-scroll"
                                        href="#request"
                                        >SOLICITAR</a
                                    >
                                </div>
                            </div>
                        </div>
                        <!-- end of card -->
                        <!-- end of card -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>

        <!-- About -->
        <div id="about" class="basic-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Sobre o nosso time</h2>
                        <p class="p-heading p-large">
                            Cansado de procurar a pastinha no arquivo?! Está na
                            hora de ter um sistema para seu consultório ou
                            clínica!
                        </p>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Team Member -->
                        <div class="team-member">
                            <div class="image-wrapper">
                                <img
                                    class="img-fluid"
                                    src="{{asset('assets/site/images/team-member-1.svg')}}"
                                    alt="alternative"
                                />
                            </div>
                            <!-- end of image-wrapper -->
                            <p class="p-large">
                                <strong>Ayla Cláudia</strong>
                            </p>
                            <p class="job-title">Business Developer</p>

                            <!-- end of social-icons -->
                        </div>
                        <!-- end of team-member -->
                        <!-- end of team member -->

                        <!-- Team Member -->
                        <div class="team-member">
                            <div class="image-wrapper">
                                <img
                                    class="img-fluid"
                                    src="{{asset('assets/site/images/team-member-2.svg')}}"
                                    alt="alternative"
                                />
                            </div>
                            <!-- end of image wrapper -->
                            <p class="p-large"><strong>Felipe Leonardo</strong></p>
                            <p class="job-title">Online Marketer</p>

                            <!-- end of social-icons -->
                        </div>
                        <!-- end of team-member -->
                        <!-- end of team member -->

                        <!-- Team Member -->
                        <div class="team-member">
                            <div class="image-wrapper">
                                <img
                                    class="img-fluid"
                                    src="{{asset('assets/site/images/team-member-3.svg')}}"
                                    alt="alternative"
                                />
                            </div>
                            <!-- end of image wrapper -->
                            <p class="p-large">
                                <strong>Mirella Rebeca</strong>
                            </p>
                            <p class="job-title">Software Engineer</p>

                            <!-- end of social-icons -->
                        </div>
                        <!-- end of team-member -->
                        <!-- end of team member -->

                        <!-- Team Member -->
                        <div class="team-member">
                            <div class="image-wrapper">
                                <img
                                    class="img-fluid"
                                    src="{{asset('assets/site/images/team-member-4.svg')}}"
                                    alt="alternative"
                                />
                            </div>
                            <!-- end of image wrapper -->
                            <p class="p-large">
                                <strong>Bianca Rosa</strong>
                            </p>
                            <p class="job-title">Product Manager</p>

                            <!-- end of social-icons -->
                        </div>
                        <!-- end of team-member -->
                        <!-- end of team member -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>

        <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
        </script>
        <script>
            (function () {
                window.onload = function () {
                    localStorage.removeItem('blipSdkUAccount');
                    new BlipChat()
                    .withAppKey('c2lzdGVtYW9kb250b2xvZ2ljbzphY2M2ZDdiMS05MTA1LTRmOWYtOTI5NC0yY2UxZDlkZGVlNWY=')
                    .withButton({"color":"#2CC3D5","icon":""})
                    .withCustomCommonUrl('https://chat.blip.ai/')
                    .build();
                }
            })();
        </script>
                                        
                                        
