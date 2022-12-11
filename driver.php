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
  .ParagrafStyle {
    font-size: 150%;
  }
  .btnMotor:hover {
    background-color: rgba(51, 190, 236, .5);
  }
  .TopicStyle{
    flex-direction: column;
    min-width: 234;
  }
  .TextheaderH1 {
    font-size: 2.3rem;
    
  } 
  .ImageStylesContainer{
    max-width: 30rem;
    height: 30rem;
    margin-left: 0;
  }
  .DriveIcons{
    width: 4rem;
  }
  .modalImage {

    width: 100%;
  }

  #carouselUpdownUser {
    align-self: center;
    margin-top: 3%;
    margin-left: 5%;
    margin-right: 5%;
    max-width: 100%;
  }

  #why {
    max-width: 100%;
    padding-left: 15%;
    padding-right: 15%;
  }
  /* Responsividade */
  @media (max-width: 360px) {

    .card {

      margin-left: 10%;
      margin-bottom: 5%;
    }

  }

  @media (min-width: 360px) {
    .apresentacao {
      text-align: center;
      margin-top: -25%;
      z-index: 2;
    }

    #carouselUpdownUser {
      align-self: center;
      margin-top: 3%;
      max-width: 150%;
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
      margin-top: 23rem;
      margin-left: 15rem;
      padding: 15rem;
    }
  }
</style>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
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
            <a class="nav-link me-lg-3" href="#why">Porque ser Updown</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-lg-3" href="#benefits">Vantagens</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-lg-3" href="#colaborador">Como ser Updown</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- (Bloco 1) Mashead header-->
  <header id="home" class="masthead bg-gradient-blue text-center text-white" >
    <div class="container" style=" padding-left: var(--bs-gutter-x, 1.75rem) !important;padding-right: var(--bs-gutter-x, 1.75rem) !important;">
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-lg-6 ">
          <!-- Textos-->
          <div class="my-0 mb-lg-0 text-start" id="titledriver">
            <h1 class="display-3 lh-1 mb-1 upFont fw-bold">Seja um Driver!!</h1>
            <h3 class=" lh-1 upFont mb-3" >
              Faça parte da nossa rede de motoristas.
            </h3>
            <div class="d-flex flex-column flex-lg-row align-items-center">

              <!-- BOTÃO PARA SE CADASTRAR -->

              <button class="btn btn-lg btn-outline-light rounded-pill px-4 py-3 btnMotor" data-bs-toggle="modal" data-bs-target="#SignUpModal">
                
                  <span class="text-light btnMotor fw-400">
                    Seja um Motorista!
                </span>
              </button>

              <!-- FIM DO BOTÃO PARA SE CADASTRAR -->

            </div>
          </div>
        </div>
        <div class="col-sm-10 col-md-6 ">
          <img src="assets/img/driver/Branquelo.png" alt="Motoristinha" style="max-width: 100%; max-height: auto" />
        </div>
      </div>
    </div>
  </header>

  <!-- (Bloco 2) Carrossel -->

  <div class="row">
    <div class="col">
      <div id="carouselUpdownUser" class="carousel slide carousel-fade mb-5" data-ride="carousel">
        <!-- Imagens -->
        <div class="carousel-inner ">
          <!-- Primeira Imagem -->
          <div class="carousel-item active" data-bs-interval="3000">
            <img class="d-block w-100" src="assets/img/pitch/drivers/01.jpg" alt="primeiro slide">
          </div>
          <!-- Segunda Imagem -->
          <div class="carousel-item" data-bs-interval="3000">
            <img class="d-block w-100" src="assets/img/pitch/drivers/02.jpg" alt="segundo slide">
          </div>
          <!-- Terceira Imagem -->
          <div class="carousel-item" data-bs-interval="3000">
            <img class="d-block w-100" src="assets/img/pitch/drivers/03.jpg" alt="terceiro slide">
          </div>
          <!-- quarta Imagem -->
          <div class="carousel-item" data-bs-interval="3000">
            <img class="d-block w-100" src="assets/img/pitch/drivers/04.jpg" alt="quarto slide">
          </div>
          <!-- Quinta Imagem -->
          <div class="carousel-item" data-bs-interval="3000">
            <img class="d-block w-100" src="assets/img/pitch/drivers/05.jpg" alt="Quinto slide">
          </div>
          <!-- Sexta Imagem -->
          <div class="carousel-item" data-bs-interval="3000">
            <img class="d-block w-100" src="assets/img/pitch/drivers/06.jpg" alt="Sexto slide">
          </div>
          <!-- Sétima Imagem -->
          <div class="carousel-item" data-bs-interval="3000">
            <img class="d-block w-100" src="assets/img/pitch/drivers/07.jpg" alt="Sétimo slide">
          </div>
          <!-- Oitava Imagem -->
          <div class="carousel-item" data-bs-interval="3000">
            <img class="d-block w-100" src="assets/img/pitch/drivers/08.jpg" alt="oitavo slide">
          </div>
          <!-- Nona Imagem -->
          <div class="carousel-item" data-bs-interval="3000">
            <img class="d-block w-100" src="assets/img/pitch/drivers/09.jpg" alt="nono slide">
          </div>
          <!-- Décima Imagem -->
          <div class="carousel-item" data-bs-interval="3000">
            <img class="d-block w-100" src="assets/img/pitch/drivers/10.jpg" alt="Décimo slide">
          </div>
          <!-- Décima Primeira Imagem -->
          <div class="carousel-item" data-bs-interval="3000">
            <img class="d-block w-100" src="assets/img/pitch/drivers/11.jpg" alt="Décimo Primeiro slide">
          </div>
        </div>
        <!-- Décima Segunda Imagem -->
        <div class="carousel-item" data-bs-interval="3000">
          <img class="d-block w-100" src="assets/img/pitch/drivers/12.jpg" alt="Décimo Segundo slide">
        </div>
      </div>
      <!-- Décima Terceira Imagem -->
      <div class="carousel-item" data-bs-interval="3000">
        <img class="d-block w-100" src="assets/img/pitch/drivers/13.jpg" alt="Décimo Terceiro slide">
      </div>
    </div>
    <!-- Décima Quarta Imagem -->
    <div class="carousel-item" data-bs-interval="3000">
      <img class="d-block w-100" src="assets/img/pitch/drivers/14.jpg" alt="Décimo Quarto slide">
    </div>
  </div>
  <!-- Décima Quinta Imagem -->
  <div class="carousel-item" data-bs-interval="3000">
    <img class="d-block w-100" src="assets/img/pitch/drivers/15.jpg" alt="Décimo Quinto slide">
  </div>
  </div>
  <!-- Décima Sexta Imagem -->
  <div class="carousel-item" data-bs-interval="3000">
    <img class="d-block w-100" src="assets/img/pitch/drivers/16.jpg" alt="Décimo Sexto slide">
  </div>
  </div>
  <!-- Décima Sétima Imagem -->
  <div class="carousel-item" data-bs-interval="3000">
    <img class="d-block w-100" src="assets/img/pitch/drivers/17.jpg" alt="Décimo Sétimo slide">
  </div>
  </div>
  <!-- Décima Oitava Imagem -->
  <div class="carousel-item" data-bs-interval="3000">
    <img class="d-block w-100" src="assets/img/pitch/drivers/18.jpg" alt="Décimo Oitavo slide">
  </div>
  </div>
  <!-- Décima Nona Imagem -->
  <div class="carousel-item" data-bs-interval="3000">
    <img class="d-block w-100" src="assets/img/pitch/drivers/19.jpg" alt="Décimo Nono slide">
  </div>
  </div>
  <!-- Controladores -->
  <!-- Anterior -->
  </div>
  </div>
  </div>


  <!-- (Bloco 3) Três filosofias nossas sobre nossos colaboradores -->
  
  <!-- (Bloco 4) Tipos de Colaboradores -->
  <div class="text-center bg-gradient-primary-to-secondary py-5 px-5" id="benefits">
    <div class="text-light upFont my-5 col-12 text-center text-sm-start ms-0 ms-sm-btn-driver">
      <h3 class="display-2 fw-normal ">Confira as vantagens</h3>
      <h4 >Faça parte da nossa rede de motoristas.</h4>
    </div>
    <div class="container mb-5" style="min-width:100%;">
      <div class="row justify-content-around align-items-center px-sm-5" style="min-height: 150px;">
        <!-- Carro -->
        <div class="col-lg-2 bg-gradient-white-to-gray m-1
          shadow-sm rounded zoom text-dark " data-bs-toggle="modal" data-bs-target="#carroModal">
          <div class="">
            <div class="lead">
              <img src="assets/img/driver/carro-novo.png" alt="" id="imgCard">
              <h5 class="">Carro</h5>
              <p class="text-muted">maior<br>conforto</p>
            </div>
          </div>
        </div>
        <!-- Moto -->
        <div class="col-lg-2 bg-gradient-white-to-gray m-1 shadow-sm rounded zoom text-dark" data-bs-toggle="modal" data-bs-target="#motoModal">
          <div class="">
            <div class="lead">
              <img src="assets/img/driver/moto-nova.png" alt="" id="imgCard">
              <h5 class="">Moto</h5>
              <p class="text-muted">maior<br>demanda</p>
            </div>
          </div>
        </div>
        <!-- Utilitário -->
        <div class="col-lg-2 bg-gradient-white-to-gray m-1 shadow-sm rounded zoom text-dark" data-bs-toggle="modal" data-bs-target="#utilitarioModal">
          <div class="">
            <div class="lead">
              <img src="assets/img/driver/utilitario-novo.png" alt="" id="imgCard">
              <h5 class="">Utilitário</h5>
              <p class="text-muted">maior<br>rentabilidade</p>
            </div>
          </div>
        </div>
        <!-- Baú -->
        <div class="col-lg-2 bg-gradient-white-to-gray m-1 shadow-sm rounded zoom text-dark" data-bs-toggle="modal" data-bs-target="#bauModal">
          <div class="">
            <div class="lead">
              <img src="assets/img/driver/caminhao-novo.png" alt="" id="imgCard">
              <h5 class="">Baú</h5>
              <p class="text-muted">Melhor<br>rentabilidade</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fim dos Colaboradores -->

  <section class="bg-gradient-primary-to-secondary" id="">
        <div class="container px-5 text-white text-sm-start text-center">
        <div class="row gx-5 align-items-center">
                <div class="col-12 order-lg-1 mb-5 mb-lg-0 featuresGridIcons">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5" >
                                <!-- Feature item-->
                                <div class="">
                                <h3 class="font-alt fs-6 fw-bolder">Carro</h3>
                                    <p class="mb-0 fs-6 fw-lighter">Prefere trabalhar com pequenas e médias encomendas?
                                      Essa modalidade é ideal para você. Dirigindo de carro,
                                      você trabalha com mais seguraça e conforto,
                                      além de se adequar numa das melhores demandas do mercado de frete.<br>
                                      <br>
                                      Detalhes da Corrida
                                      <br>
                                      <br>
                                      <ul class="fw-light text-start">
                                      <li>15 Corridas</li>
                                      <li>11,50 Reias de Bônus</li>
                                      <li>0,46 centavos por corrida ou aproximadamente 1/3 da comissão de 20% do valor mínimino da corrida</li>
                                      </ul> 
                                      </p>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 mb-5" >
                                <!-- Feature item-->
                                <div class="">
                                <h3 class="font-alt fs-6 fw-bolder">Moto</h3>
                                    <p class="mb-0 fs-6 fw-lighter">Que tal trabalhar com agilidade? Na categoria moto,
                                        suas entregas serão mais rápidas e econômicas. É a
                                        melhor opção para quem quer iniciar no mercado de delivery. Sem metas abusivas, para
                                        que você possa
                                        realizar suas entregas com tranquilidade e segurança.<br>
                                        <br>
                                        Detalhes da Corrida
                                        <br>
                                        <br>
                                        <ul class="fw-light text-start">
                                        <li>15 Corridas</li>
                                        <li>10,00 Reias de Bônus</li>
                                        <li>0,40 centavos por corrida ou aproximadamente 1/3 da comissão de 20% do valor mínimino da corrida</li>
                                        </ul> 
                                        </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5 mb-5">
                                <!-- Feature item-->
                                <div class="">
                                <h3 class="font-alt fs-6 fw-bolder">Utilitário</h3>
                                    <p class="mb-0 fs-6 fw-lighter">Se você é do tipo que gosta de transportar cargas mais pesadas ou várias
                                            menores simultaneamente,
                                            o utilitário é para você. Você pode tanto ganhar mais com uma única
                                            entrega de carga pesada quanto ganhar muito mais carregando várias
                                            leves ao mesmo tempo.<br>
                                            <br>
                                            Detalhes da Corrida
                                            <br>
                                            <br>
                                            <ul class="fw-light text-start">
                                            <li>5 Corridas</li>
                                            <li>10,50 Reias de Bônus</li>
                                            <li>2,10 centavos por corrida ou aproximadamente 1/3 da comissão de 20% do valor mínimino da corrida</li>
                                            </ul> 
                                            </p>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <!-- Feature item-->
                                <div class="">
                                <h3 class="font-alt fs-6 fw-bolder">Baú</h3>
                                    <p class="mb-0 fs-6 fw-lighter">Realize entregas de todos os tipos, ajude pessoas e empresas com mudanças e
                                        encomendas. Com o baú, você pode aceitar qualquer corrida.
                                        Detalhes da Corrida:<br>
                                        <br>
                                        Detalhes da Corrida
                                        <br>
                                        <br>
                                        <ul class="fw-light text-start">
                                        <li>2 Corridas</li>
                                        <li>13,00 Reias de Bônus</li>
                                        <li>6,50 centavos por corrida ou aproximadamente 1/3 da comissão de 20% do valor mínimino da corrida</li>
                                        </ul> 
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>  
        </div>
    </section>
<!--  -->
<section class="bg-gradient-white-to-gray text-muted" id="AboutUs">
        <div class="container px-5">
        <h2 class="display-motorista lh-1 mb-4 upFont text-center ">Venha conhecer os benefícios de utilizar nossa plataforma:</h2>
            <div class="row gx-5 mb-md-3 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-sm-4 col-md-3 mb-0 mt-0">
                    <div class="px-0 px-sm-0"><img class="img-fluid " src="assets/img/driver/free.png" alt="..."></div>
                </div>
                <div class="col-12 col-lg-9 ">
                    <h3 class=" lh-1 mb-1 upFont text-center text-sm-start ">Período de utilização livre</h3>
                    <p class="lead fw-400 mb-3 mb-lg-0">Para conhecer nossa plataforma, ao se cadastrar você ganhará um período de
                      utilização sem incidência de cobrança da taxa administrativa de 20%. Confira
                      as condições de campanha no nosso aplicativo.
                      </p>
                </div>
            </div>
            <div class="row gx-5 mb-md-3 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-sm-4 col-md-3 mb-0 mt-0">
                    <div class="px-0 px-sm-0"><img class="img-fluid " src="assets/img/driver/timer.png" alt="..."></div>
                </div>
                <div class="col-12 col-lg-9 ">
                    <h3 class=" lh-1 mb-1 upFont text-center text-sm-start ">Ausência de tempo ocioso</h3></h3>
                    <p class="lead fw-400 mb-3 mb-lg-0">Diferentemente dos tradicionais aplicativos de entrega presentes na cidade e
                      que possuem foco no delivery de alimentação, não haverá tempo de espera
                      para preparação de pedidos. Todos os itens entregues ocorrerão de maneira
                      imediata entre entregador e cliente de origem após a busca do produto.
                      </p>
                </div>
            </div> <div class="row gx-5 mb-md-3 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-sm-4 col-md-3 mb-0 mt-0">
                    <div class="px-0 px-sm-0"><img class="img-fluid " src="assets/img/driver/gift.png" alt="..."></div>
                </div>
                <div class="col-12 col-lg-9 ">
                    <h3 class=" lh-1 mb-1 upFont text-center text-sm-start ">Cartão-Presente</h3>
                    <p class="lead fw-400 mb-3 mb-lg-0">Sempre que realizar um número específico de entregas diárias, variando
                      a depender do seu veículo, você ganhará uma premiação.
                      </p>
                </div>
            </div>
        </div>
    </section>
<!--  -->
    <!-- (Bloco 5) Como ser um Colaborador -->
  
    <div class="pt-5 bg-gradient-primary-to-secondary text-white">
    <h1 class="upFont text-center  TextheaderH1" id="colaborador">
      Veja como é fácil ser um colaborador
    </h1>
     <div >   
     <div class="container text-center pb-5">
   
        <img class="ImageStylesContainer mx-auto" style="display: block" src="assets/img/driver/Azuzin.png">
      <div class="d-flex flex-wrap flex-lg-row align-items-center" style="justify-content: space-around;">
        <div class="TopicStyle"> 
          <img class="DriveIcons mx-auto" style="display: block" src="assets/img/driver/Icons/logoIconDriver.png" /> 
          <p class="mx-auto text-center my-4 ParagrafStyle"> 
            Instale Nosso App 
          </p>
        </div>
        <div class="TopicStyle"> 
          <img class="DriveIcons mx-auto" style="display: block" src="assets/img/driver/Icons/plus.png" /> 
          <p class="mx-auto text-center my-4 ParagrafStyle"> 
          Realize o Cadastro
          </p>
        </div>     
        <div class="TopicStyle"> 
          <img class="DriveIcons mx-auto" style="display: block" src="assets/img/driver/Icons/carta.png" /> 
          <p class="mx-auto text-center my-4 ParagrafStyle"> 
          Envie os Documentos
          </p>
        </div>     
        <div class="TopicStyle"> 
          <img class="DriveIcons mx-auto" style="display: block" src="assets/img/driver/Icons/calendario.png" /> 
          <p class="mx-auto text-center my-4 ParagrafStyle"> 
          Aguarde um Pouco
          </p>
        </div>     
        <div class="TopicStyle"> 
          <img class="DriveIcons mx-auto" style="display: block" src="assets/img/driver/Icons/check.png" /> 
          <p class="mx-auto text-center my-4 ParagrafStyle"> 
          Aguarde um Pouco
          </p>
        </div> 
      </div>      
      </div>
  </div>
  


  <!-- Finalzinho -->

  <!-- cta -->
  <section class="" id="Driver">
    <div class="cta-content">
      <div class="container px-5">
        <h2 class="text-white display-3 lh-1 mb-4 upFont fw-bolder">
          Confira as vantagens
        </h2>
        <a class="btn btn-outline-light py-3 px-4 my-3 rounded-pill" href="#home">
          Faça seu Cadastro!
        </a>
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

  <!-- MODAL SEJA UM MOTORISTA-->
  <div class="modal fade text-muted" id="SignUpModal" tabindex="-1" aria-labelledby="SignUpModalLabel" aria-hidden="true">
    <!-- MODAL SEJA UM MOTORISTA -->
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-gradient-primary-to-secondary p-4">
          <h5 class="modal-title font-alt text-white" id="SignUpModalLabel">
            Seja Motorista!
          </h5>
          <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-0 p-4">
          <!-- formulário -->
          <form id="signUpForm" action="DriverSignUp.php" method="POST">
            <!-- Nome e SobreNome-->
            <div class="form-floating mb-3">
              <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" onkeyup="validateDriver()" />
              <label for="name">Nome</label>
              <div class="invalid-feedback" data-sb-feedback="name:required">
                Nome Obrigatório.
              </div>
            </div>
            <div class="form-floating mb-3">
              <input class="form-control" id="surName" name="surName" type="text" placeholder="Enter your name..." data-sb-validations="required" onkeyup="validateDriver()" />
              <label for="surName">Sobrenome</label>
              <div class="invalid-feedback" data-sb-feedback="surName:required">
                Sobrenome Obrigatório.
              </div>
            </div>
            <!-- Email-->
            <div class="form-floating mb-3">
              <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" onkeyup="validateDriver()" />
              <label for="email">Endereço de E-mail</label>
              <div class="invalid-feedback" data-sb-feedback="email:required">
                E-mail Obrigatório.
              </div>
              <div class="invalid-feedback" data-sb-feedback="email:email">
                E-mail inválido. Insira outro.
              </div>
            </div>
            <!-- Cpf -->
            <div class="form-floating mb-3">
              <input class="form-control" id="cpf" name="cpf" type="text" placeholder="000.000.000-00" data-sb-validations="required,cpf" onkeyup="validateDriver()" />
              <label for="cpf">CPF</label>
              <div class="invalid-feedback" data-sb-feedback="cpf:required">
                Cpf Obrigatório.
              </div>
              <div class="invalid-feedback" data-sb-feedback="cpf:cpf">
                CPF inválido. Insira seu CPF.
              </div>
            </div>
            <!-- Número do telefone-->
            <div class="form-floating mb-3">
              <input class="form-control" id="phone" name="phone" type="tel" placeholder="(00)9 0000-0000" data-sb-validations="required" onkeyup="validateDriver()" />
              <label for="phone">Telefone</label>
              <div class="invalid-feedback" data-sb-feedback="phone:required">
                Número de Telefone é Obrigatório.
              </div>
            </div>
            <!-- Data de Nascimento -->
            <div class="form-floating mb-3">
              <input class="form-control" id="birthDate" name="birthDate" type="text" placeholder="00/00/0000" data-sb-validations="required" onkeyup="validateDriver()" />
              <label for="birthDate">Data de Nascimento</label>
              <div class="invalid-feedback" data-sb-feedback="birthDate:required">
                Data de Nascimento Obrigatória.
              </div>
            </div>
            <!-- Senha e Confirmação de Senha -->
            <div class="form-floating mb-3">
              <input class="form-control" id="password" name="password" type="password" placeholder="****" data-sb-validations="required" onkeyup="validateDriver()" />
              <label for="password">Senha</label>
              <div class="invalid-feedback" data-sb-feedback="password:required">
                Campo Obrigatório.
              </div>
            </div>
            <div class="form-floating mb-3">
              <input class="form-control" id="senhaTemp" name="senhaTemp" type="password" placeholder="****" data-sb-validations="required" onkeyup="validateDriver()" />
              <label for="passwordConfirm">Senha</label>
              <div class="invalid-feedback" data-sb-feedback="passwordConfirm:required">
                Campo Obrigatório.
              </div>
            </div>
            <!-- Mensagem de Sucesso-->
            <!---->
            <div class="d-none" id="submitSuccessMessage">
              <div class="text-center mb-3">
                <div class="fw-bolder">Cadastro realizado com sucesso!!</div>
              </div>
            </div>
            <!-- Mensagem de erro-->
            <!---->
            <div class="d-none" id="submitErrorMessage">
              <div class="text-center text-danger mb-3">
                Algo de errado aconteceu. Tente Novamente.
              </div>
            </div>
            <!-- Submit Button-->
            <div class="d-grid">
              <button class="btn btn-secondary rounded-pill btn-lg" id="submitButton" type="submit" form="signUpForm" value="submit">
                Cadastrar!!
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- FIM DO MODAL SEJA UM MOTORISTA -->


  <!-- MODAL DO CARRO -->
  <div class="modal fade" id="carroModal" tabindex="-1" aria-labelledby="carroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="carroModalLabel">Carro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <!-- Imagem carro -->
            <div class="col-sm-6">
              <img class="modalImage" src="assets/img/driver/car.png">
            </div>
            <!-- Descrição -->
            <div class="col-sm-6">
              <div class="description">
                <p><span><small>
                      Prefere trabalhar com pequenas e médias encomendas? Essa modalidade é ideal para você. Dirigindo
                      de carro, você trabalha com mais seguraça e conforto, além de se adequar numa das melhores
                      demandas do mercado de frete.
                    </small></span></p>
              </div>
              <div class="especificacoes">
                <p><span>Detalhes da Corrida:</span></p>
                <p><span>
                    <ul>
                      <li>15 Corridas</li>
                      <li>11,50 Reais de Bônus</li>
                      <li>0,46 centavos por corrida ou aproximadamente 1/3 da comissão de 20% do valor mínimo da corrida
                      </li>
                    </ul>
                  </span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- FIM DO MODAL DO CARRO -->

  <!-- MODAL DA MOTO -->
  <div class="modal fade" id="motoModal" tabindex="-1" aria-labelledby="motoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="motoModalLabel">Moto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <!-- Imagem moto -->
            <div class="col-sm-6">
              <img class="modalImage" src="assets/img/driver/motoca.png">
            </div>
            <!-- Descrição -->
            <div class="col-sm-6">
              <div class="description">
                <p><span><small>
                      Que tal trabalhar com agilidade? Na categoria moto, suas entregas serão mais rápidas e econômicas. É
                      a melhor opção para quem quer iniciar no mercado de delivery. Sem metas abusivas, para que você possa realizar
                      suas entregas com tranquilidade e segurança.
                    </small></span></p>
              </div>
              <div class="especificacoes">
                <p><span>Detalhes da Corrida:</span></p>
                <p><span>
                    <ul>
                      <li>15 Corridas</li>
                      <li>10 Reais de Bônus</li>
                      <li>0,40 centavos por corrida ou 1/3 da comissão de 20% do valor mínimo da corrida
                      </li>
                    </ul>
                  </span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- FIM DO MODAL DA MOTO -->

  <!-- MODAL DO UTILITÁRIO -->
  <div class="modal fade" id="utilitarioModal" tabindex="-1" aria-labelledby="utilitarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="utilitarioModalLabel">Carro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <!-- Imagem carro -->
            <div class="col-sm-6">
              <img class="modalImage" src="assets/img/driver/utility.png">
            </div>
            <!-- Descrição -->
            <div class="col-sm-6">
              <div class="description">
                <p><span><small>
                        Se você é do tipo que gosta de transportar cargas mais pesadas ou várias menores
                      simultaneamente, o utilitário é para você. Você pode tanto ganhar mais com uma
                      única entrega de carga pesada quanto ganhar muito mais carregando várias leves
                      ao mesmo tempo.
                    </small></span></p>
              </div>
              <div class="especificacoes">
                <p><span>Detalhes da Corrida:</span></p>
                <p><span>
                    <ul>
                      <li>5 Corridas</li>
                      <li>10,50 Reais de Bônus</li>
                      <li>2,10 centavos por corrida ou aproximadamente 1/3 da comissão de 20% do valor mínimo da corrida
                      </li>
                    </ul>
                  </span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- FIM DO MODAL DO UTILITÁRIO -->

  <!-- MODAL DO BAÚ -->
  <div class="modal fade" id="bauModal" tabindex="-1" aria-labelledby="bauModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bauModalLabel">Carro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <!-- Imagem carro -->
            <div class="col-sm-6">
              <img class="modalImage" src="assets/img/driver/caminhao.png">
            </div>
            <!-- Descrição -->
            <div class="col-sm-6">
              <div class="description">
                <p><span><small>
                      Realize entregas de todos os tipos, ajude pessoas e empresas com mudanças e
                      encomendas. Com o baú, você pode aceitar qualquer corrida.
                    </small></span></p>
              </div>
              <div class="especificacoes">
                <p><span>Detalhes da Corrida:</span></p>
                <p><span>
                    <ul>
                      <li>2 Corridas</li>
                      <li>13,00 Reais de Bônus</li>
                      <li>6,50 centavos por corrida ou aproximadamente 1/3 da comissão de 20% do valor mínimo da corrida
                      </li>
                    </ul>
                  </span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- FIM DO MODAL DO BAÚ -->


  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->

  <!-- API PARA CADASTRO -->
</body>

</html>