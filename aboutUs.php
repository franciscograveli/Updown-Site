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
  html,
  body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }

  #map {

    height: 300px;
    width: 100%;
  }

  @media only screen and (max-width:540px) {

    .aboutCta {
      height: 950px;
    }
  }
</style>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-lg-white" id="mainNav">
    <div class="container px-3">
      <a class="navbar-brand fw-bold upFont LogoTitleColor" href="index.php">
        <img src="assets/img/logo/logoUpDown.png" style="max-width: 35%; padding-right: 2px" />
        UpDown</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="bi-list"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
          <li class="nav-item">
            <a class="nav-link me-lg-3" href="#Empresa">A Empresa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-lg-3" href="#Equipe">A Equipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-lg-3" href="#Portfolio">Nosso Portfólio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-lg-3" href="#Contato">Fale Conosco</a>
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
  <header class="aboutHead bg-gradient-primary-to-secondary text-center text-white">
    <div class="container px-5">
      <div class="">
        <!-- Mashead text and app badges-->
        <div class="mt-sm-4 mt-lg-5 mb-5 mb-lg-0 text-center">
          <h1 class="display-HeaderTile lh-1 mb-3 upFont">Quem Somos</h1>
          <p class="h3 fw-light">
            Vamos falar um pouco sobre os serviços oferecidos pela Updown
          </p>
          <div class="d-flex flex-column flex-lg-row align-items-center"></div>
        </div>
      </div>
    </div>
  </header>

  <!-- Visão -->
  <section>
  <div class="row gx-5 align-items-center justify-content-center ">
                <div class="col-sm-8 col-lg-9 text-muted">
                    <h2 class="display-6 lh-1 mb-4 upFont text-end ">Saiba mais sobre nós</h2>
                    <p class="lead fw-400 mb-5 mb-lg-0 ">A Updown surgiu com o propósito de oferecer ao seu público serviços de coleta e entrega de documentos
                          e produtos de pequeno, médio e grande porte de forma prática, ágil e inovadora para seus usuários,
                          trazendo melhores opções de funcionalidade e otimização de tempo no transporte de artigos comerciais e
                          pessoais.<br>
                          Atuamos com moto, carro, utilitário e caminhão, permitindo o transporte de itens nos mais diversos
                          tamanhos e opção para que usuários solicitem o veículo que melhor se encaixem no perfil do que deseje
                          transportar.<br>
                          Possuímos também opções para que empresas dos mais diversos portes possam transportar itens com
                          segurança e agilidade de acordo com o que melhor se encaixe nas suas necessidade e permitindo a
                          entrega múltipla de itens com um único veículo, tornando a opção prática e econômica.<br>
                          As entregas são todas realizadas no mesmo dia e todos os pedidos possuem rastreamento em tempo real
                          e acompanhamento de rota por remetente e destinatário. Possuímos também possibilidade de
                          agendamento e de pagamento da entrega por quem recebe o pedido.<br>
                          Em todos os pedidos o pagamento pode ser realizado através do próprio aplicativo e você contará com
                          um histórico salvo das suas solicitações. E se tiver qualquer dúvida poderá entrar em contato conosco
                          através do nosso suporte 24 horas.</p>
                    
                </div>
            </div>
  </section>
  <!-- Fim do Divisor empresa/Equipe -->

  <!-- Equipe -->
  

  <!-- Nosso Portfólio -->
 
  <!-- Fim do Portfólio -->
  <!-- Banner final - Call to Action -->
  <div class="px-5 py-5 text-light text-left aboutCta " id="Contato">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-2 my-3 fw-bold">Fale Conosco!</h1>
        </div>
        <hr style="height:3px">
        <div class="col"></div>
      </div>
      <div class="row">

        <!-- Formulário de Contato -->
        <div class="col-sm-6">
          <form id="formulario" action="email.php" class="pr-5 fw-400 mt-lg-4 mt-3" method="post">
            <!-- Nome -->
            <div class="form-group">
              <label for="nameInput" class="mb-2">Nome e Sobrenome</label>
              <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="">
            </div>
            <!-- Email -->
            <div class="form-group">
              <label for="emailInput" class="my-2">Endereço de E-mail</label>
              <input type="email" class="form-control" id="emailInput" name="emailInput" placeholder="">
            </div>
            <!-- Corpo do email -->
            <div class="form-group">
              <label for="mailBody" class="my-2 ">Mensagem</label>
              <textarea type="text" class="form-control rounded-4" id="mailBody" name="mailBody" placeholder="" row="3">
              </textarea>
            </div>
            <!-- Botão de enviar -->
            <button type="submit" class="btn btn-outline-driver rounded-pill my-3 px-4" style="font-size: 1rem !important;">Enviar</button>
          </form>
        </div>
        
        <!-- Localização e Mapa -->
        <div class="col-sm-6">
          <div class="localizacao my-0 text-center text-light fw-400">
            <small> Av. Silvio Almeida, 626 <br></small>
            <small>Expedicionários João Pessoa - PB</small>
          </div>
          <div id="map" class="map rounded">
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&libraries=&v=weekly&channel=2" async></script>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fim do banner final - Call to action -->

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

  <!-- Google maps -->
  <script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      const upDown = {
        lat: -7.122579,
        lng: -34.853751
      };
      // The map, centered at Uluru
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: upDown,
      });
      // The marker, positioned at Uluru
      const marker = new google.maps.Marker({
        position: upDown,
        map: map,
      });
    }
  </script>

  <!-- Formulário de Contato -->
  <script>
    function validaForm() {
      erro = false;
      if ($('#nameInput').val() == '') {
        alert('Você precisa preencher o campo Nome');
        erro = true;
      }
      if ($('#emailInput').val() == '' && !erro) {
        alert('Você precisa preencher o campo E-mail');
        erro = true;
      }
      if ($('#mailBody').val() == '' && !erro) {
        alert('Você precisa preencher o campo Mensagem');
        erro = true;
      }

      //se nao tiver erros
      if (!erro) {
        $('#formulario').submit();
      }
    }
  </script>
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