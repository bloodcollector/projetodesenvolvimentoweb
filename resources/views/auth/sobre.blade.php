<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BLOOD COLLECTOR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400&amp;display=swap">
    <link rel="stylesheet" href="css/style.red.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/favicon.ico">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light py-4 border-bottom border-gray bg-white">
        <div class="container d-flex align-items-center justify-content-beween"><a class="navbar-brand" href="#"><img src="img/blood logo.png" alt="" width="170"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <ul class="list-inline mb-0 d-none d-lg-block">
            <li class="list-inline-item mr-3">

              </div>
            </li>
          </ul>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-light py-0 shadow-sm bg-white">
        <div class="container">
          <div class="collapse navbar-collapse py-3 py-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active"><a class="nav-link pl-lg-0" href="index.html">Home <span class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a class="nav-link" href="{{route(views.welcome)}}">Sobre </a></li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contato </a></li>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link px-4 d-inline-block" id="searchToggler" href="#"><i class="fas fa-search text-muted"></i><i class="fas fa-times text-muted d-none"></i></a></li>
              <li class="nav-item"><a class="nav-link border-left px-4 bg-primary text-white d-inline-block" href="contact.html">Portal do Doador</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="p-3 shadow-sm index-forward border-top" id="search">
        <div class="container">
          <form action="#">
            <div class="row">
              <div class="form-group col-sm-8 mb-0 mb-2 mb-sm-0">
                <input class="form-control" type="search" placeholder="What're you looking for...">
              </div>
              <div class="form-group col-sm-4 text-center text-sm-left mb-0">
                <button class="btn btn-primary" type="submit"> <i class="fas fa-search mr-2"></i>Procurar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <section class="hero bg-cover bg-top" style="background: url(img/about-banner.jpg)">
      <div class="container index-forward">
        <div class="row align-items-lg-center">
          <div class="col-lg-7 order-2 order-lg-1">
            <h1 class="text-uppercase text-white">Sobre <span class="text-primary">Nós</span></h1>
            <p class="lead text-white mb-0">Criados para ajudar a salvar vidas</p>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 text-lg-right">
            <nav class="d-inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"> <i class="fa fa-home mr-2"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sobre nós</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="p-2 shadow"><img class="img-fluid" src="img/about.jpg" alt=""></div>
          </div>
          <div class="col-lg-8">
            <p class="text-muted h6 text-primary text-uppercase mb-0">O que fazemos</p>
            <h2 class="my-3"> </h2>
            <p class="text-muted lead">Criamos oportunidades para pessoas que querem ajudar outras pessoas através do ato de doar sangue</p>
            <h2 class="h5">Porque ser um doador ?</h2>
            <p class="text-muted">A doação de sangue é um ato voluntário que pode ajudar a salvar muitas vidas. Em cada doação, uma pessoa doa, no máximo, 450 ml de sangue e essa única doação pode salvar a vida de até quatro pessoas. Vale destacar que, em cerca de um dia, o organismo já repõe a quantidade de sangue que foi retirada na doação.</p>
            <div class="p-2 bg-primary">
              <div class="border border-white border-md p-lg-5 p-4 d-flex align-items-center"><i class="fas fa-hospital fa-3x text-white"></i>
                <div class="pl-3">
                  <h4 class="text-white mb-1">Prêmio Doador de Primeira</h4>
                  <p class="text-white mb-0">Seja um doador de primeira e receba benefícios exclusivos</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact py-5 bg-primary text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="d-flex align-items-center">
              <div class="contact-icon"><i class="fas fa-phone"></i></div>
              <div class="ml-3">
                <h3 class="h5 mb-0">81 9999-9999</h3>
                <p class="small mb-0">Perguntas?</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="d-flex align-items-center">
              <div class="contact-icon"><i class="far fa-envelope"></i></div>
              <div class="ml-3">
                <h3 class="h5 mb-0">bc@bloodcollector.net</h3>
                <p class="small mb-0">envie-nos email</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex align-items-center">
              <div class="contact-icon"><i class="far fa-clock"></i></div>
              <div class="ml-3">
                <h3 class="h5 mb-0">24 hrs</h3>
                <p class="small mb-0">Serviço</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mb-4 mb-lg-0">
            <h2 class="h5 lined text-white mb-4">Sobre</h2>
            <p class="text-muted text-small">Criamos oportunidades para pessoas que querem ajudar outras pessoas através do ato de doar sangue</p>
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-google-plus"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-5 mb-4 mb-lg-0">
            <h2 class="h5 text-white lined mb-4">Links</h2>
            <div class="d-flex">

              </ul>
              <ul class="list-unstyled d-inline-block mb-0">
                <li class="mb-2"><a class="footer-link" href="index.html">Home </a></li>
                <li class="mb-2"><a class="footer-link" href="about.html">Sobre nós</a></li>
                <li class="mb-2"><a class="footer-link" href="contact.html">Contate - nos</a></li>

              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 class="h5 text-white lined mb-4">Newsletter</h2>
            <p class="text-muted text-small">Recebe nossas Newsletter</p>
            <div class="input-group mb-3">
              <input class="form-control text-muted bg-none border-primary" type="text" placeholder="Email address" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container text-center py-4">
          <p class="mb-0 text-muted">&copy; 2019, Your company. Template designed by <a href="https://bootstraptemple.com">Powered by bloodcollector</a>.</p>
        </div>
      </div>
    </footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/front.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
