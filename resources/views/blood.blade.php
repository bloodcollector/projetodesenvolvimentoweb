<!DOCTYPE html>
<html>

  <head>
    <lang pt-br >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blood Collector</title>
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


          </ul>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-light py-0 shadow-sm bg-white">
        <div class="container">
          <div class="collapse navbar-collapse py-3 py-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active"><a class="nav-link pl-lg-0" href=""> <span class="sr-only">(current)</span></a></li>
                <div class="dropdown-menu border-0 shadow-sm" aria-labelledby="navbarDropdown"><a class="dropdown-item text-muted" href="#">Action</a><a class="dropdown-item text-muted" href="#">Another action</a><a class="dropdown-item text-muted" href="#">Something else here</a></div>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link px-4 d-inline-block" id="searchToggler" href="#"><i class="fas fa-search text-muted"></i><i class="fas fa-times text-muted d-none"></i></a></li>
              <li class="nav-item"><a class="nav-link border-left px-4 bg-primary text-white d-inline-block" href="{{route('login')}}">Portal do Doador</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="p-3 shadow-sm index-forward border-top" id="search">
        <div class="container">
          <form action="#">
            <div class="row">
              <div class="form-group col-sm-8 mb-0 mb-2 mb-sm-0">
                <input class="form-control" type="search" placeholder="O que você está procurando...?">
              </div>
              <div class="form-group col-sm-4 text-center text-sm-left mb-0">
                <button class="btn btn-primary" type="submit"> <i class="fas fa-search mr-2"></i>Procurar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <section class="hero-home bg-cover bg-center" style="background: url(img/home-banner.jpg)">
      <div class="container index-forward py-5 mb-5">
        <div class="row text-white">
          <div class="col-lg-8">
            <h1 class="text-uppercase mb-0 text-shadow">Doe Sangue </h1>
            <p class="h5 my-4 text-shadow">Um gesto que pode salvar uma vida</p>
            <p>Para que você que quer doar e não sabe por onde começar, vamos aqui te mostrar passo a passo como fazer.</p><a class="btn btn-light text-primary px-5" href="#">Veja detalhes</a>
          </div>
        </div>
      </div>
    </section>
    <section class="info p-0 bg-light">
      <div class="container bg-white">
        <div class="row py-5 border-top border-md border-primary">
          <div class="col-lg-4 border-right mb-4 mb-lg-0">
            <div class="px-4">
              <p class="text-primary mb-0 font-weight-normal">Humanidade</p>
              <h3 class="h5">Pessoas em Primeiro Lugar</h3>
              <p class="text-muted mb-0 text-small">Ajudamos você que quer doar sangue</p>
            </div>
          </div>
          <div class="col-lg-4 border-right mb-4 mb-lg-0">
            <div class="px-4">
              <p class="text-primary mb-0 font-weight-normal">Exame Laboratorial</p>
              <h3 class="h5">Exames Rápidos</h3>
              <p class="text-muted mb-0 text-small">O resultado do seu exame Laboratorial em até 2 hrs</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="px-4">
              <p class="text-primary mb-0 font-weight-normal">Te buscamos em casa</p>
              <h3 class="h5">Hospital ao seu alcance</h3>
              <p class="text-muted mb-0 text-small">Para sua comodidade te buscamos em casa</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about bg-light pt-0">
      <div class="container text-center">
        <h2 class="text-uppercase lined lined-center">Bem vindo ao <span class="text-primary">Blood </span>Collector</h2>
        <p class="text-muted">O portal que ajuda você a salvar vidas</p>
        <div class="row pt-5">
          <div class="col-lg-4 mb-5 mb-lg-0"><i class="fas fa-stethoscope fa-3x text-primary mb-3"></i>
            <h2 class="h5">Hospitais </h2>
            <p class="text-muted px-lg-3 mb-0"> Atendimento médico grátis para o doador, por até 01 ano</p>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0"><i class="fas fa-microscope fa-3x text-primary mb-3"></i>
            <h2 class="h5">Exame</h2>
            <p class="text-muted px-lg-3 mb-0">Seu exame laboratorial na hora</p>
          </div>
          <div class="col-lg-4"><i class="fas fa-syringe fa-3x text-primary mb-3"></i>
            <h2 class="h5">Benefícios</h2>
            <p class="text-muted px-lg-3 mb-0">Rede de benefícios para o doador </p>
          </div>
        </div>
      </div>
    </section>
    <section class="statistics py-5 bg-primary">
      <div class="container text-white">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
              <h2 class="text-lg mr-3 mb-0">10</h2>
              <p class="lead line-height-sm mb-0">Hospitais <br>Cadastrados </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
              <h2 class="text-lg mr-3 mb-0">1000</h2>
              <p class="lead line-height-sm mb-0">doadores <br>parceiros </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
              <h2 class="text-lg mr-3 mb-0">452</h2>
              <p class="lead line-height-sm mb-0">Pacientes <br>Beneficiados </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
              <h2 class="text-lg mr-3 mb-0">2</h2>
              <p class="lead line-height-sm mb-0">Anos de <br>Experiências </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="doctors bg-light">
      <div class="container text-center">
        <h2 class="text-uppercase lined lined-center">Hospitais  <span class="text-primary">Beneficiados</span></h2>
        <p class="text-muted mb-5">Veja aqui alguns dos hospitais Beneficiados</p>
        <div class="row">
              <div class="col-xl-3 col-md-6 mb-4 mb-xl-0">
                <div class="card doctor border-0">
                  <div class="card-body p-0 shadow-sm">
                    <div class="position-relative"><img class="img-fluid border-top border-md border-primary" src="img/doctor-1.png" alt="">
                      <div class="doctor-overlay">
                        <ul class="list-inline mb-0 doctor-social">
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-instagram"></i></a></li>
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="p-4">
                      <h6 class="mb-0">Hospital Português</h6>
                      <p class="text-muted text-small mb-0"></p>
                    </div><a class="btn btn-block btn-primary" href="#">Acesse a Página do Hospital</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4 mb-xl-0">
                <div class="card doctor border-0">
                  <div class="card-body p-0 shadow-sm">
                    <div class="position-relative"><img class="img-fluid border-top border-md border-primary" src="img/doctor-2.png" alt="">
                      <div class="doctor-overlay">
                        <ul class="list-inline mb-0 doctor-social">
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-instagram"></i></a></li>
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="p-4">
                      <h6 class="mb-0">HEMOPE</h6>
                      <p class="text-muted text-small mb-0"></p>
                    </div><a class="btn btn-block btn-primary" href="#">Acesse a Página do Hospital</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4 mb-xl-0">
                <div class="card doctor border-0">
                  <div class="card-body p-0 shadow-sm">
                    <div class="position-relative"><img class="img-fluid border-top border-md border-primary" src="img/doctor-3.png" alt="">
                      <div class="doctor-overlay">
                        <ul class="list-inline mb-0 doctor-social">
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-instagram"></i></a></li>
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="p-4">
                      <h6 class="mb-0">PROCAPE</h6>
                      <p class="text-muted text-small mb-0"></p>
                    </div><a class="btn btn-block btn-primary" href="#">Acesse a Página do Hospital</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4 mb-xl-0">
                <div class="card doctor border-0">
                  <div class="card-body p-0 shadow-sm">
                    <div class="position-relative"><img class="img-fluid border-top border-md border-primary" src="img/doctor-4.png" alt="">
                      <div class="doctor-overlay">
                        <ul class="list-inline mb-0 doctor-social">
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-instagram"></i></a></li>
                          <li class="list-inline-item"><a class="doctor-social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="p-4">
                      <h6 class="mb-0">IMIP</h6>
                      <p class="text-muted text-small mb-0"></p>
                    </div><a class="btn btn-block btn-primary" href="#">Acesse a Página do Hospital</a>
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
                <p class="small mb-0">envie-nos um email</p>
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
          <p class="mb-0 text-muted">&copy;  <a href="https://bootstraptemple.com">Powered by bloodcollector</a>.</p>
        </div>
      </div>
    </footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/front.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
