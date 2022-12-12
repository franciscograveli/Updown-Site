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
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<style>
  html,
  body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }

  .btnMotor:hover {
    background-color: rgba(51, 190, 236, .5);
  }

  .masthead {

    background-image: url("assets/img/logo/logo_af.png");
  }

  .apresentacao {
    margin-left: 30px;
  }
  .TituloHeader {
    font-size: 30%;
  }

  /* Responsividade */
  @media (min-width: 360px) {
    .apresentacao {
      text-align: center;
      margin-top: -25%;
      z-index: 2;
    }

    .motorista {
      padding: 15%;
      margin-top: 135%;
      position: absolute;
    }
  }

  @media (min-width: 768px) {
    .apresentacao {
      margin-top: -10%;
    }

    .motorista {
      margin-top: 20.8%;
    }
  }

  @media (min-width: 992px) {
    .apresentacao {
      margin-top: 0;
      margin-left: 3%;
    }

    .motorista {
      margin-top: 2.6%;
    }
  }

  @media (min-width: 1280px) and (max-width: 1365px) {

    .apresentacao {
      margin-top: 0;
      margin-left: 3%;
    }

    .motorista {
      margin-top: 17.1%;
      margin-left: 30%;
    }
  }

  @media (max-width: 1366px) {
    .apresentacao {
      margin-top: 0;
      margin-left: 3%;
    }

    .motorista {
      margin-top: 22.4%;
      margin-left: 25%;
    }
  }


</style>

<body id="page-top">
  <!-- Navigation-->
   <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-lg-white" id="mainNav"> 
    <div class="container px-3">
      <a class="navbar-brand fw-bold upFont LogoTitleColor" href="index.php">
        <img src="assets/img/logo/logoUpDown.png" id="logo" />
        UpDown</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="bi-list"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
          <li class="nav-item">
            <a class="nav-link me-lg-3" href="#infos">Porque usar Updown</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-lg-3" href="#categorias">Conheça as Modalidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-lg-3" href="#footer">Baixe Agora</a>
          </li>
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
  <header class="masthead bg-gradient-blueUser text-center text-white" >
    <div class="container" style=" padding-left: var(--bs-gutter-x, 1.75rem) !important;padding-right: var(--bs-gutter-x, 1.75rem) !important;">
      <div class="row align-items-center justify-content-center">
      <div class="col-12 col-lg-6 ">
          <!-- Textos-->
          <div class="mb-lg-0 text-start">
            <h1 class="display-5 lh-1 mb-4 upFont">Faça entregas rápidas com a Updown!!</h1>
            <p class="lead fw-light mb-5">
            Aceitamos o envio de produtos de pequeno à grande porte
          </p>
          </div>
        </div>
        <div class="col-sm-10 col-md-6 mb-5 mt-0">
          <img src="assets/img/users/userHeader.png" alt="Usuariosinho" style="max-width: 70%; max-height: 100%" />
        </div>  
      </div>
    </div>
  </header>

  <!-- Carrossel -->
  <div id="carouselUpdownUser" class="carousel slide carousel-fade p-5"  data-ride="carousel">
    <!-- Imagens -->
    <div class="carousel-inner p-5">
      <!-- Primeira Imagem -->
      <div class="carousel-item active" data-bs-interval="3000">
        <img class="d-block w-100" src="assets/img/pitch/users/app01.jpg" alt="primeiro slide">
      </div>
      <!-- Segunda Imagem -->
      <div class="carousel-item" data-bs-interval="3000">
        <img class="d-block w-100" src="assets/img/pitch/users/app02.jpg" alt="segundo slide">
      </div>
      <!-- Terceira Imagem -->
      <div class="carousel-item" data-bs-interval="3000">
        <img class="d-block w-100" src="assets/img/pitch/users/app03.jpg" alt="terceiro slide">
      </div>
      <!-- quarta Imagem -->
      <div class="carousel-item" data-bs-interval="3000">
        <img class="d-block w-100" src="assets/img/pitch/users/app04.jpg" alt="quarto slide">
      </div>
      <!-- Quinta Imagem -->
      <div class="carousel-item" data-bs-interval="3000">
        <img class="d-block w-100" src="assets/img/pitch/users/app05.jpg" alt="Quinto slide">
      </div>
      <!-- Sexta Imagem -->
      <div class="carousel-item" data-bs-interval="3000">
        <img class="d-block w-100" src="assets/img/pitch/users/app06.jpg" alt="Sexto slide">
      </div>
      <!-- Sétima Imagem -->
      <div class="carousel-item" data-bs-interval="3000">
        <img class="d-block w-100" src="assets/img/pitch/users/app07.jpg" alt="Sétimo slide">
      </div>
      <!-- Oitava Imagem -->
      <div class="carousel-item" data-bs-interval="3000">
        <img class="d-block w-100" src="assets/img/pitch/users/app08.jpg" alt="oitavo slide">
      </div>
      <!-- Nona Imagem -->
      <div class="carousel-item" data-bs-interval="3000">
        <img class="d-block w-100" src="assets/img/pitch/users/app09.jpg" alt="nono slide">
      </div>
      <!-- Décima Imagem -->
      <div class="carousel-item" data-bs-interval="3000">
        <img class="d-block w-100" src="assets/img/pitch/users/app10.jpg" alt="Décimo slide">
      </div>
      <!-- Décima Primeira Imagem -->
      <div class="carousel-item" data-bs-interval="3000">
        <img class="d-block w-100" src="assets/img/pitch/users/app11.jpg" alt="Décimo Primeiro slide">
      </div>      
    </div>
    <!-- Controladores -->
    <!-- Anterior -->
    <a class="carousel-control-prev" href="#carouselUpdownUser" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <!-- Próximo -->
    <a class="carousel-control-next" href="#carouselUpdownUser" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
  </div>

  <!-- Explicação -->
  <!--  -->
  <section class="bg-gradient-blueUser" id="infos">
  <div class="container p-5 text-muted " >
    <h2 class="text-center text-white">Venha conhecer os benefícios de utilizar nossa plataforma:</h2>
      <!-- Preço Justo -->
      <div class="d-flex flex-column-reverse flex-lg-row align-items-center justify-content-center mx-auto text-center">
      <div class="col img-fluid text-lg-end" id="motivo">
          <img src="assets/img/bolhas.png/viagemsegura.png" alt=""style="max-width:100%;" >
        </div>
        <div class="col img-fluid text-lg-start" id="motivo">
          <img src="assets/img/bolhas.png/cuponsdedesconto.png" alt="" style="max-width:100%;">
        </div>
      </div>
      <div class="d-flex flex-column-reverse flex-lg-row align-items-center justify-content-center mx-auto text-center ">
      <div class="col img-fluid text-lg-end" id="motivo">
          <img src="assets/img/bolhas.png/indiqueeganhe.png" alt="" style="max-width:100%; ">
        </div>
        <div class="col img-fluid text-lg-start" id="motivo">
          <img src="assets/img/bolhas.png/precobaixo.png" alt="" style="max-width:100%; ">
        </div>
      </div><div class="d-flex flex-column-reverse flex-lg-row align-items-center justify-content-center mx-auto text-center ">
      <div class="col img-fluid text-lg-end" id="motivo">
          <img src="assets/img/bolhas.png/entregacobrar.png" alt="" style="max-width:100%; ">
        </div><div class="col img-fluid text-lg-start" id="motivo">
          <img src="assets/img/bolhas.png/planovip.png" alt="" style="max-width:100%; ">
        </div>
      </div><div class="d-flex flex-column-reverse flex-lg-row align-items-center justify-content-center mx-auto text-center ">
     <div class="col img-fluid text-lg-end" id="motivo">
          <img src="assets/img/bolhas.png/atendimentopersonalizado.png" alt="" style="max-width:100%; ">
        </div>
        <div class="col img-fluid text-lg-start" id="motivo">
          <img src="assets/img/bolhas.png/variasparadas.png" alt="" style="max-width:100%; ">
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <div class="">
    <div class="container p-5 text-muted " >
      <!-- Preço Justo -->
      <div class="row align-items-center justify-content-center" >
        <div class="col-12 col-lg-6 h3 fw-light">
          <p>Não se trata apenas de inovação, mas de acessibilidade para vocês. Com a gente, as entregas são mais
            econômicas e seguras.</p>
        </div>
        <div class="col-sm-10 col-md-6 mb-5 mt-0" id="motivo">
          <img src="assets/img/users/preco.png" alt="" style="max-width: 80%; margin-left: 50px">
        </div>
      </div>
      <!-- Entregas Expressas -->
      <div class="d-flex flex-column-reverse flex-lg-row  align-items-center justify-content-center" >
        <div class="col-sm-10 col-md-6 mb-5 mt-0" >
          <img src="assets/img/users/entregas_expressas.png" alt="" style="max-width: 80%; margin-left: 50px">
        </div>
        <div class="col-12 order-1 col-lg-6  h3 fw-light">
          <p>Com a nossa frota de colaboradores, não precisa procurar por entregadores. Estaremos sempre disponíveis
            para você com nossas entregas eficientes. </p>
        </div>
      </div>
      <!-- Entregas Flexíveis -->
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-lg-6  h3 fw-light">
          <p>Chega de problemas com frete. Com a gente não tem limite de carga, entregamos desde
            envelope até mudança residencial.</p>
        </div>
        <div class="col-sm-10 col-md-6 mb-5 mt-0">
          <img src="assets/img/users/entregas_flexiveis.png" alt="" style="max-width: 80%; margin-left: 50px">
        </div>
      </div>
    </div>
  </div>
  <!-- Fim da Explicação -->

  <!-- Categorias -->
  <div class="
  py-5
  bg-darkBlue
  text-light
  " id="categorias">

    <div class="py-3 mx-5">
      <div class="row align-items-center justify-content-center">
        <!-- Imagem Grandona -->
        <div class="col-sm-10 col-md-6 mb-5 mt-0">
          <img src="assets/img/users/categorias.png" alt="" 
          style="max-width: 100%;">
        </div>
        <!-- Veículos -->
        <div class="col-sm-6">
          <!-- Moto -->
          <div class="row px-3">
            <p class="h4 upFont fw-bolder mb-0"><span>Moto</span></p>
            <p><small class="h6 fw-light">Para pequenos produtos. Peça seu UpMoto para realizar as entregas mais rápidas do mercado, também
                com a taxa de valor mais acessível.</small></p>
          </div>
          <!-- Carro -->
          <div class="row px-3">
            <p class="h4 upFont fw-bolder mb-0"><span>Carro</span></p>
            <p><small class="h6 fw-light">Se seus produtos variam entre pequeno e médio porte, essa é a categoria ideal. Carros são
                perfeitos para realizar uma entrega com maior segurança e lidar com materiais frágeis. Você pode
                aproveitar para pedir uma carona. ;)</small></p>
          </div>
          <!-- Utilitário -->
          <div class="row px-3">
            <p class="h4 upFont fw-bolder mb-0"><span>Utilitário</span></p>
            <p><small class="h6 fw-light">Se precisa entregar móveis e eletrônicos de grande porte, basta pedir um utilitário. Não deixamos
                na mão quem precisa de ajuda mais robusta.</small></p>
          </div>
          <!-- Baú -->
          <div class="row px-3 ">
            <p class="h4 upFont fw-bolder mb-0"><span>Baú</span></p>
            <p><small class="h6 fw-light">Está de mudança? Pois aqui está a solução do seu frete! Nossos colaboradores Baú são perfeitos
                para quem precisa transportar vários produtos simultaneamente.</small></p>
          </div>
        </div>

      </div>
    </div>
    <!-- Fim dos Ícones -->
  </div>
  <!-- Fim das Categorias -->

  <!-- Baixe o Aplicativo-->
  <section class="userCta" id="download">
    <div class="cta-content mb-6">
      <div class="container px-5 py-7">
        <h2 class="text-white display-1 lh-1 upFont">
          Impulsione agora
          <br />
          as suas entregas.
        </h2>
        
        <!-- <a class="btn btn-outline-light py-3 px-4 my-3 rounded-pill" href="#!" target="_blank">Baixe agora nosso aplicativo!</a> -->
      </div>
    </div>
    <div class="bg-gradient-primary-to-secondary-tp mt-5"id="download">
        <div class="container px-5 text-center">
            <h1 class="text-center text-white font-alt mb-3 fw-bold">Baixe agora o nosso aplicativo!</h1>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <div>
                <h4><p class="text-white fw-lighter" id="footer">Seja um Usuário: </p></h4>
                <a class=" text-center me-lg-3 mb-5 mb-lg-4" href="https://play.google.com/store/apps/details?id=com.updownuser"><img class="app-badge" src="assets/img/pt-br_badge_web_generic.png" alt="Updown Usuários" /></a>
                </div>
            </div>
        </div>
        </div>
  </section>
  <!-- Fim do "Baixe o Aplicativo" -->

  <!-- Footer-->
  <footer class="bg-black text-center py-4">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; 2021 Updown - todos os direitos reservados.</div>
                <a href="assets/docs/Politica.pdf" target="_blank">Política de Privacidade</a>
                <span class="mx-1">&middot;</span>
                <a href="assets/docs/termos de uso - clientes.pdf" target="_blank">Termos de Uso - Usuários</a>
                <span class="mx-1">&middot;</span>
                <a href="assets/docs/termos de uso - entregador.pdf" target="_blank">Termos de Uso - Entregadores</a>
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
  <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
</body>

</html>