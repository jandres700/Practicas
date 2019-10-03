<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/1.css">
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="dist/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bienvenido</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="imagen">
      <img src="img/Logo2.png" class="ejemplo"> </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
    <li class="nav-item active">
          <a class="nav-link" href="bienvenido.html"> Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="libros.php">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Actividades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide d-block w-100" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/1.jpg" class="d-block w-100" alt="Bienvenido">
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome</h5>
            <p>Bienvenido Plus Technologies.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/2.jpg" class="d-block w-100" alt="Vision">
          <div class="carousel-caption d-none d-md-block">
            <h5>Vision</h5>
            <p>Vision de la empresa</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/3.jpg" class="d-block w-100" alt="Mision">
          <div class="carousel-caption d-none d-md-block">
            <h5>Mision</h5>
            <p>Mision de la empresa.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <br><br>
<div class=cards>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card1">
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="img/candado.jpg" class="card-img" alt="Prevención y Control de Fraude" style="width: 5vw; height: 6vw;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Prevención y Control de Fraude</h5>
                  <p class="card-text">Gestión multicanal de prevencion y reduccion de pérdida, aumento de eficiencia
                    operativa y optimización de la experiencia del cliente.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card2">
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="img/cumplimiento.jpg" class="card-img" alt="Cumplimiento" style="width: 5vw; height: 6vw;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Cumplimiento</h5>
                  <p class="card-text">
                    Cumplimiento
                    Gestión integral de riesgos de lavado de activos y cumplimiento de regulaciones actuales.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card3">
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="img/riesgo.jpg" class="card-img" alt="GRC" style="width: 5vw; height: 6vw;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">GRC - Riesgos y Oportunidades</h5>
                  <p class="card-text">Automatización de la gestión de riesgos, oportunidades, vulnerabilidades y
                    cumplimiento para incrementar el valor de la institución.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm">
        <div class="card4">
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="img/auditoria.jpg" class="card-img" alt="Auditoría" style="width: 5vw; height: 6vw;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Auditoría Continua</h5>
                  <p class="card-text">Automatización de la auditoría para optimizar la eficiencia y eficacia de
                    sistemas, procesos y cumplimiento de normativas internas, locales e internacionales.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </div>
      <div class="col-sm">
        <div class="card5">
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="img/negocios.jpg" class="card-img" alt="Negocios" style="width: 5vw; height: 6vw;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Negocios</h5>
                  <p class="card-text">Detección y generación de oportunidades de negocio en tiempo real y de baja
                    fricción para retención, lealtad y crecimiento de la institución.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </div>
      <div class="col-sm">
  
        <div class="card6">
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="img/comercio.jpg" class="card-img" alt="Comerico Internacional" style="width: 5vw; height: 6vw;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Comercio Internacional</h5>
                  <p class="card-text">Automatización y control sobre operaciones internacionales para optimizar gestiones
                    y crecimiento de la institución.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="main-footer">
            <div class="container">
              <div class="row">
                <div class="col-sm">
                  <h2 class="column__title">Bienvenido</h2>
                  <p class="column__txt">Disfruta tus practicas en Plus Technologies and Inovations </p>
                </div>
                <div class="col-sm">
                  <h2 class="column__title">Contáctanos</h2>
                  <p class="column__txt">Centro Gerencial Las Margaritas Diagonal 6</p>  
                  <p class="column__txt">Teléfono: 999 999 999</p>  
                  <p class="column__txt">infoPlusTi@gmail.com</p>
                </div>
                <div class="col-sm">
                <h2 class="column__title">Siguenos en nuestras redes Sociales</h2>
                  <p class="column__txt"><a href="" class="icon-facebook">Facebook</a></p>  
                  <p class="column__txt"><a href="" class="icon-twitter">Siguenos en Twitter</a></p>  
                  <p class="column__txt"><a href="" class="icon-youtube">Visita nuestro canal</a></p>  
                </div>
              </div>
              <div class="row">
              <p class="copy">2019 Tecnico en Computación/Todos los Derechos Reservados</p>
              </div>
        </footer>


</body>
</html>