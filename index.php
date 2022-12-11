<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>UpDown</title>
    <link rel="icon" type="image/x-icon" href="assets/updown-logo.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<style>
    @media (max-width: 360px) {

        .aboutUsButton {

            margin: 60px;
        }
    }
</style>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-3">
            <a class="navbar-brand fw-bold upFont LogoTitleColor" href="#page-top">
                <img src="assets/img/logo/logoUpDown.png" id="logo" >
                UpDown</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">O App</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#AboutUs">Quem Somos</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#Driver">Faça Parte</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Download</a></li>
                </ul>
                <!--<button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Seja um Motorista!</span>
                        </span>
                    </button>-->
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead bg-lg-gradient-darkblue-to-lightblue ">
        <div class="container px-5 py-7 ">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-Xlg-start">
                    <p class="lead fw-lighter  mb-3 headerSubTitleColor ">Faça parte da melhor rede de entregas do Brasil!</p>
                        <h1 class="display-HeaderTile lh-1 mb-3 upFont headerTitleColor ">UpDown</h1>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/pt-br_badge_web_generic.png" alt="..." /></a>
                            <!--<a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Adiciona outros conteudos no header -->
                </div>
            </div>
        </div>
    </header>
    <!-- Quote/testimonial aside-->
    <aside class="text-center bg-gradient-blue-to-lightblue">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-11">
                    <div class="h2 fs-1 text-white mb-4">A solução mais confiável e transparente para suas encomendas</div>
                </div>
            </div>
            <!-- Botão para usuário -->
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <a class="btn btn-outline-user py-3 px-5 rounded-pill fs-6 nowrap"
                     href="user.php">Benefícios para usuários</a>
                </div>
            </div>
        </div>
    </aside>
    <!-- App features section-->
    <section id="features" style="scroll-behavior: smooth" class=" bg-gradient-white-to-gray text-muted">
    <div class="container bg-features" style="padding-top: 2rem; padding-bottom:2rem;">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0 featuresGridIcons">
                    <div class="container-fluid px-5" >
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5" style="max-width: 300px;">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <img src="assets/img/features/celular.png" class=" d-block mb-1" style="max-width: 100%; height:auto;" />
                                    <h3 class="font-alt fs-6 fw-bolder">Rastreio com GPS</h3>
                                    <p class="text-muted mb-0 fs-6 fw-lighter">Saiba exatamente onde se encontra sua encomenda!</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5" style="max-width: 300px;">
                                <!-- Feature item-->
                                <div class="text-center">
                                <img src="assets/img/features/caminhao.png" class=" d-block mb-1" style="max-width: 100%; height:auto;" />
                                    <h3 class="font-alt fs-6 fw-bolder">Entregas Rentáveis</h3>
                                    <p class="text-muted mb-0 fs-6 fw-lighter">O melhor custo benefício para suas entregas!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5 mb-md-0" style="max-width: 300px;">
                                <!-- Feature item-->
                                <div class="text-center">
                                <img src="assets/img/features/cifrao.png" class=" d-block mb-1" style="max-width: 100%; height:auto;" />
                                    <h3 class="font-alt fs-6 fw-bolder">Entregas flexiveís</h3>
                                    <p class="text-muted mb-0 fs-6 fw-lighter">Faça entregas sem 
                                        limites de cargas, de envelopes à mudança residencial</p>
                                </div>
                            </div>
                            <div class="col-md-6" style="max-width: 300px;">
                                <!-- Feature item-->
                                <div class="text-center">
                                <img src="assets/img/features/smile.png" class=" d-block mb-1" style="max-width: 100%; height:auto;" />
                                    <h3 class="font-alt fs-6 fw-bolder ">Suporte 24/7</h3>
                                    <p class="text-muted mb-0 fs-6 fw-lighter">Prestamos serviços para melhor atender a sua demanda
                                        de entregas. Na hora que precisar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="px-0 px-sm-0"><img class="img-fluid " id="imgfeatures" style="margin-left: auto; margin-right:auto;" src="assets/img/features/celularnamao.png" alt="..." /></div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Basic features section-->
    <section class="bg-gradient-white-to-gray text-muted" id="AboutUs">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-sm-10 col-md-6 mb-5 mt-0">
                    <div class="px-0 px-sm-0"><img class="img-fluid " src="assets/img/entregas.png" alt="..." /></div>
                </div>
                <div class="col-12 col-lg-5 ">
                    <h2 class="display-6 lh-1 mb-4 upFont text-center ">Simplicidade e Confiabilidade.</h2>
                    <p class="lead fw-normal mb-5 mb-lg-0">Esse é o nosso dilema. Oferecemos a você um
                        serviço completo de transporte de cargas de qualquer porte, para que possa fazer e
                        receber entregas. além de realizar sua mudança residêncial ou profissional.</p>
                    <a class="btn btn-outline-user py-6 px-6 my-5 mt-2 ms-md-auto rounded-pill aboutUsButton "  
                        href="aboutUs.php">Saiba Mais</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Redes sociais começar aqui!!-->
    <section class="bg-gradient-blue-to-lightblue" id="socialMedia">
        <div class="container px-3">
            <h2 class="text-center text-white font-alt mb-4 fw-lighter">Além do nosso site,<br>
                você poderá ficar por dentro de todas as nossas campanhas e novidades no:
            </h2>
            <div class="d-flex flex-wrap flex-lg-row align-items-center" id="socialID" style="justify-content: space-around;">
                <div>
                <a class=" text-center  mb-4 " href="https://play.google.com/store/apps/details?id=com.updownuser"><img class="socialmedia" src="assets/img/social/instagram.png" alt="Updown Usuários" /></a>
                </div>
                <div>
                <a class=" text-center  mb-4 " href="https://play.google.com/store/apps/details?id=com.updownuser"><img class="socialmedia" src="assets/img/social/facebook.png" alt="Updown Usuários" /></a>
                </div>
                <div>
                <a class=" text-center  mb-4 " href="https://play.google.com/store/apps/details?id=com.updownuser"><img class="socialmedia" src="assets/img/social/linkedin.png" alt="Updown Usuários" /></a>
                </div>
                <div>
                <a class=" text-center  mb-4 " href="https://play.google.com/store/apps/details?id=com.updownuser"><img class="socialmedia" src="assets/img/social/wpp.png" alt="Updown Usuários" /></a>
                </div>
                <div>
                <a class=" text-center   mb-4 " href="https://play.google.com/store/apps/details?id=com.updownuser"><img class="socialmedia" src="assets/img/social/mail.png" alt="Updown Usuários" /></a>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <!-- Call to action section-->
    <section class="cta" id="Driver">
        <div class="cta-content">
            <div class="container px-3">
                <h2 class="text-white display-5 lh-1 mb-3 upFont  ">
                    Simplicidade e Confiabilidade.
                </h2>
                <p class="text-light fw-lighter display-motorista ">Você decidirá seu horário e não terá tempo ocioso.<br></p>
                <a class="btn btn-outline-driver py-4 px-4 my-3 ms-btn-driver rounded-pill fw-light" 
                href="driver.php">Benefícios para motoristas</a>
            </div>
        </div>
    </section>
    
    <!-- App badge section-->
    <section class="bg-gradient-primary-to-secondary" id="download">
        <div class="container px-5 text-center">
            <h1 class="text-center text-white font-alt mb-3 fw-bold">Baixe agora o nosso aplicativo!</h1>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <div>
                <h4><p class="text-white fw-lighter">Seja um Usuário: </p></h4>
                <a class=" text-center me-lg-3 mb-4 mb-lg-0" href="https://play.google.com/store/apps/details?id=com.updownuser"><img class="app-badge" src="assets/img/pt-br_badge_web_generic.png" alt="Updown Usuários" /></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-4">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; 2021 Updown - todos os direitos reservados.</div>
                <a href="assets/docs/Politica.pdf" target="_blank">Política de Privacidade</a>
                <span class="mx-1">&middot;</span>
                <a href="assets/docs/termos de uso - clientes.pdf" target="_blank">Termos de Uso - Usuários</a>
                <span class="mx-1">&middot;</span>
                <a href="assets/docs/termos de uso - entregador.pdf.pdf" target="_blank">Termos de Uso - Entregadores</a>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>