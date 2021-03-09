<?php

require_once('../../usuarios/modelo/usuarios.php');

$ModeloUsuario = new Usuarios();
$ModeloUsuario->validateSession();
$Perfil = $ModeloUsuario->getPerfil();

?>

<!DOCTYPE html>

<html lang=es>

<!-- Inicio head -->

<head>
  <meta charset="utf-8">
  <!--
    =============================================================================
    === PLANTILLA DESARROLLADA POR LA OFICINA DE MEDIOS DIGITALES - UNIMEDIOS ===
    =============================================================================
    -->

  <!-- Inicio head plantilla unal -->
  <link rel="shortcut icon" href="../../estilos/images/favicon.ico" type="image/x-icon">

  <meta name="revisit-after" content="1 hour">
  <meta name="distribution" content="all">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.5, user-scalable=yes">
  <meta name="expires" content="1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="all">

  <link rel="stylesheet" type="text/css" href="../../estilos/css/frontend.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../estilos/css/bootstrap.min.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../estilos/css/bootstrap-theme.min.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../estilos/css/reset.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../estilos/css/unal.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../estilos/css/base.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../estilos/css/tablet.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../estilos/css/phone.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../estilos/css/small.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../estilos/css/printer.css" media="print">

  <script src="../../estilos/js/jquery.js" type="text/javascript"></script>
  <script src="../../estilos/js/unal.js" type="text/javascript"></script>
  <script src="../../estilos/js/bootstrap.bundle.min.js" type="text/javascript"></script>

  <title>Repositorio de Autoevaluación - Universidad Nacional de Colombia</title>
  <!-- Fin head plantilla unal -->

  <!-- Inicio head plantilla base -->
  <link rel="stylesheet" type="text/css" href="../../estilos/css/base1.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../estilos/fonts/fontawesome-free-5.15.1-web/css/all.min.css" media="all">
  <!-- Fin head plantilla base -->

  <!-- Inicio head plantilla home -->
  <link rel="stylesheet" type="text/css" href="../../estilos/css/home.css" media="all">
  <!-- Fin head plantilla home -->

</head>
<!-- Fin head -->

<!-- Inicio body -->

<body>

  <!-- Inicio servicios plantilla unal -->
  <div id="services">
    <div class="indicator d-none d-md-block"></div>
    <ul class="dropdown-menu" id="servicios">
      <li>
        <a href="http://correo.unal.edu.co" target="_blank"><img src="../../estilos/images/icnServEmail.png" width="32" height="32" alt="Correo Electrónico">Correo Electrónico</a>
      </li>
      <li>
        <a href="https://dninfoa.unal.edu.co" target="_blank"><img src="../../estilos/images/icnServSia.png" width="32" height="32" alt="Dirección Nacional de Información Académica">DNINFOA - SIA</a>
      </li>
      <li>
        <a href="http://bibliotecas.unal.edu.co" target="_blank"><img src="../../estilos/images/icnServLibrary.png" width="32" height="32" alt="Biblioteca">Bibliotecas</a>
      </li>
      <li>
        <a href="http://personal.unal.edu.co" target="_blank"><img src="../../estilos/images/icnServCall.png" width="32" height="32" alt="Convocatorias">Convocatorias</a>
      </li>
      <li>
        <a href="http://identidad.unal.edu.co"><img src="../../estilos/images/icnServIdentidad.png" width="32" height="32" alt="Identidad U.N.">Identidad U.N.</a>
      </li>
    </ul>
  </div>
  <!-- Fin servicios plantilla unal -->

  <!-- Inicio header plantilla unal -->
  <header id="unalTop">

    <!-- Inicio logo plantilla unal -->
    <div class="logo">
      <a href="https://unal.edu.co">
        <svg width="93%" height="93%">
          <image xlink:href="../../estilos/images/escudoUnal.svg" width="100%" height="100%" class="hidden-print" alt="Escudo de la Universidad Nacional de Colombia" />
        </svg>
        <img src="../../estilos/images/escudoUnal_black.png" class="d-none d-print-block" alt="Escudo de la Universidad Nacional de Colombia" />
      </a>
    </div>
    <!-- Fin logo plantilla unal -->

    <!-- Inicio seal plantilla unal -->
    <div class="seal">
      <img class="hidden-print" alt="Escudo de la República de Colombia" src="../../estilos/images/sealColombia.png" width="66" height="66" />
      <img class="d-none d-print-block" alt="Escudo de la República de Colombia" src="../../estilos/images/sealColombia_black.png" width="66" height="66" />
    </div>
    <!-- Fin seal plantilla unal -->

    <!-- Inicio menú superior plantilla unal -->
    <div class="firstMenu d-none d-md-block">
      <div class="content-fluid">
        <nav class="navbar navbar-expand-md nav navbar-dark">

          <!-- Inicio perfiles plantilla unal-->
          <div class=" collapse navbar-collapse navbar-default" id="navbarSupportedContent">
            <nav id="profiles">
              <ul class="mr-auto nav justify-content-end">
                <li class="nav-item item_Aspirantes #>">
                  <a href="http://aspirantes.unal.edu.co">Aspirantes</a>
                </li>
                <li class="nav-item item_Estudiantes #>">
                  <a href="http://estudiantes.unal.edu.co">Estudiantes</a>
                </li>
                <li class="nav-item item_Egresados #>">
                  <a href="http://egresados.unal.edu.co">Egresados</a>
                </li>
                <li class="nav-item item_Docentes #>">
                  <a href="http://docentes.unal.edu.co">Docentes</a>
                </li>
                <li class="nav-item item_Administrativos #>">
                  <a href="http://administrativos.unal.edu.co">Administrativos</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- Fin perfiles plantilla unal-->

          <!-- Inicio redes sociales plantilla unal -->
          <ul class="socialLinks d-none d-md-block">
            <li>
              <a href="https://www.facebook.com/UNColombia" target="_blank" class="facebook" title="Página oficial en Facebook"></a>
            </li>
            <li>
              <a href="https://twitter.com/UNColombia" target="_blank" class="twitter" title="Cuenta oficial en Twitter"></a>
            </li>
            <li>
              <a href="https://www.youtube.com/channel/UCnE6Zj2llVxcvL5I38B0Ceg" target="_blank" class="youtube" title="Canal oficial de Youtube"></a>
            </li>
            <li>
              <a href="http://agenciadenoticias.unal.edu.co/nc/sus/type/rss2.html" target="_blank" class="rss" title="Suscripción a canales de información RSS"></a>
            </li>
          </ul>
          <!-- Inicio redes sociales plantilla unal -->

          <!-- Inicio idioma plantilla unal -->
          <div class="collapse btn-group languageMenu d-none d-md-block">
            <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">es<span class="caret"></span></div>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">EN - English</a></li>
              <li><a href="#">GUC - Wayuunaiki</a></li>
              <li><a href="#">PBB - Nasa yuwe</a></li>
            </ul>
          </div>
          <!-- Fin idioma plantilla unal -->

        </nav>
      </div>
    </div>
    <!-- Fin menú superior plantilla unal -->

    <!-- Inicio menú inferior plantilla unal -->
    <div id="bs-navbar" class="navigation d-none d-md-block">

      <!-- Inicio título del sitio plantilla unal -->
      <div class="site-url" id="subdominio">
        <a>repositorio.manizales.unal.edu.co</a>
      </div>
      <!-- Fin título del sitio plantilla unal -->

      <!-- Inicio buscador plantilla unal -->
      <div class="buscador" id="buscador">
        <div class="gcse-searchbox-only" data-resultsurl="https://unal.edu.co/resultados-de-la-busqueda/" data-newwindow="true"></div>
      </div>
      <!-- Fin buscador plantilla unal -->

      <!-- Inicio main menu plantilla unal -->
      <div class="navbar-dark mainMenu" id="main_menu_container">

        <!-- Inicio items menú principal plantilla unal -->
        <div class="btn-group">
          <div class="btn btn-default"><span class="caret"></span></div>
        </div>
        <!-- Fin items menú principal plantilla unal -->

        <!-- Inicio items menú secundario plantilla unal -->
        <div class="btn-group">
          <a class="btn btn-default"></a>
        </div>
        <!-- Fin items menú secundario plantilla unal -->

        <!-- Inicio sedes plantilla unal -->
        <div class="btn-group menu_sedes">
          <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">Sedes<span class="caret"></span></div>
          <ul class="dropdown-menu" id="sedes">
            <li>
              <a class="dropdown-item" href="http://amazonia.unal.edu.co" target="_blank">Amazonia</a><span class="caret-right"></span>
            </li>
            <li>
              <a class="dropdown-item" href="http://bogota.unal.edu.co" target="_blank">Bogotá</a><span class="caret-right"></span>
            </li>
            <li>
              <a class="dropdown-item" href="http://caribe.unal.edu.co" target="_blank">Caribe</a><span class="caret-right"></span>
            </li>
            <li>
              <a class="dropdown-item" href="http://delapaz.unal.edu.co" target="_blank">De La Paz</a><span class="caret-right"></span>
            </li>
            <li>
              <a class="dropdown-item" href="http://www.manizales.unal.edu.co" target="_blank">Manizales</a><span class="caret-right"></span>
            </li>
            <li>
              <a class="dropdown-item" href="http://medellin.unal.edu.co" target="_blank">Medellín</a><span class="caret-right"></span>
            </li>
            <li>
              <a class="dropdown-item" href="http://orinoquia.unal.edu.co" target="_blank">Orinoquia</a><span class="caret-right"></span>
            </li>
            <li>
              <a class="dropdown-item" href="http://www.palmira.unal.edu.co" target="_blank">Palmira</a><span class="caret-right"></span>
            </li>
            <li>
              <a class="dropdown-item" href="http://tumaco-pacifico.unal.edu.co" target="_blank">Tumaco</a><span class="caret-right"></span>
            </li>
          </ul>
        </div>
        <!-- Fin sedes plantilla unal -->

      </div>
      <!-- Fin main menu plantilla unal -->


      <!-- Inicio servicios label plantilla unal -->
      <div class="btn-group d-none">
        <div class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="navbarSupportedContent" data-target="#services">Servicios<span class="caret"></span>
        </div>
      </div>
      <!-- Fin servicios label plantilla unal -->

      <!-- Inicio perfiles plantilla unal -->
      <div class="btn-group d-none">
        <div class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="navbarSupportedContent" data-target="#profiles">Perfiles<span class="caret"></span>
        </div>
      </div>
      <!-- Fin perfiles plantilla unal -->

    </div>
    <!-- Fin menú inferior plantilla unal -->

    <!-- Inicio navbar plantilla unal -->
    <nav class="navbar navbar-light light-blue lighten-4 main_menu">

      <!-- Inicio navbar brand plantilla unal -->
      <a class="navbar-brand d-block d-md-none" href="#"></a>
      <!-- Fin navbar brand plantilla unal -->

      <!-- Inicio collapse button plantilla unal -->
      <button class="navbar-toggler collapsed d-block d-md-none" type="button" data-toggle="collapse" data-target="#navbar_content" aria-controls="navbar_content" aria-expanded="false" aria-label="Toggle navigation" id="btn_hamburguer">
      </button>
      <!-- Fin collapse button plantilla unal -->

      <!-- Inicio collapsible content plantilla unal -->
      <div class="collapse navbar-collapse" id="navbar_content">

        <!-- Inicio subdominio plantilla unal -->
        <div class="site-url" id="container_subdominio_mobil"></div>
        <!-- Fin subdominio plantilla unal -->

        <!-- Inicio buscador plantilla unal -->
        <div class="buscador" id="container_buscador_mobil"></div>
        <!-- Fin buscador plantilla unal -->

        <!-- Inicio main plantilla unal -->
        <div id="container_mainmenu_mobil"></div>
        <!-- Fin main plantilla unal -->

        <!-- Inicio sedes plantilla unal -->
        <div class="btn-group d-block d-md-none hidden-print">
          <div class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#container_sedes_mobil" aria-controls="container_sedes_mobil">Sedes<span class="caret"> </span>
          </div>
        </div>
        <!-- Fin sedes plantilla unal -->

        <div class="collapse" id="container_sedes_mobil"></div>

        <!-- Inicio servicios plantilla unal -->
        <div class="btn-group d-block d-md-none hidden-print">
          <div class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#container_servicios_mobil" aria-controls="container_servicios_mobil">Servicios<span class="caret"> </span>
          </div>
        </div>
        <!-- Fin servicios plantilla unal -->

        <div class="collapse" id="container_servicios_mobil"></div>

        <!-- Inicio perfiles plantilla unal -->
        <div class="btn-group d-block d-md-none hidden-print">
          <div class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#container_profiles_mobil" aria-controls="container_profiles_mobil">Perfiles<span class="caret"> </span>
          </div>
        </div>
        <!-- Fin perfiles plantilla unal -->

        <div class="collapse" id="container_profiles_mobil"></div>

      </div>
      <!-- Fin collapsible content plantilla unal -->

    </nav>
    <!-- Fin navbar plantilla unal -->

  </header>
  <!-- Fin header plantilla unal -->

  <!-- Inicio body plantilla home -->

  <div class="fondo">
    <div id="panel" class="panel panel-default" style="width: 100%; text-align:center; height: 100%;">

      <div class="card" style="margin: 40px 4% 0 4%; transform: translateX(0);">

        <nav class="navbar navbar-dark card-nav1">
          <li class="nav-item"><a href="#" style="color: white;"><i class="fas fa-home" title="Inicio"></i></a></li>
          <li class="nav-item" id="li2" style="color: white;" title="Usuario activo"><i class="fas fa-user" title="Usuario activo"> <?php echo $ModeloUsuario->getNombre() ?></i></li>
          <li class="nav-item"><a href="../../usuarios/controlador/Salir.php" style="color: white;"><i class="fas fa-sign-out-alt" title="Salir"></i></a></li>
        </nav>

        <div class="card-body" style="margin-bottom:0;">
          <div class="version2">
            <div class="jumbotron jumbotron-fluid2"></div>
            <div class="container" style="width: 100%;">

              <div class="row" style="width: 100%; margin-bottom: 48px"></div>

              <?php
              if ($Perfil == 'VISUALIZADOR' || $Perfil == 'EDITOR') {
              ?>
                <div class="row" style="width: 100%; margin-bottom: 48px">
                  <div class="col-md-5 col-sm-8 col-xs-12">
                    <div class="card hovereffect2" style="width: 100%;">
                      <img class="card-img-top img-responsive" src="../../estilos/images/editor.jpg" alt="Sans &amp; Sans-Serif">
                      <div class="registro">
                        <h2>Registro de Información</h2>
                        <a class="info2" href="../../categorias/vista/index.php"></a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-1 col-sm-1 col-xs-12">
                  </div>

                  <div class="col-md-1 col-sm-1 col-xs-12">
                  </div>

                  <div class="col-md-5 col-sm-8 col-xs-12">
                    <div class="card hovereffect2" style="width: 100%;">
                      <img class="card-img-top img-responsive" src="../../estilos/images/config.jpg" alt="Sans &amp; Sans-Serif">
                      <div class="overlay2">
                        <h2>Editar Perfil</h2>
                        <a class="info2" href="../../perfil/vista/index.php"></a>
                      </div>
                    </div>
                  </div>

                </div>
              <?php
              } elseif ($Perfil == 'ADMINISTRADOR') {
              ?>

                <div class="row" style="width: 100%; margin-bottom: 48px">
                  <div class="col-md-5 col-sm-8 col-xs-12">
                    <div class="card hovereffect2" style="width: 100%;">
                      <img class="card-img-top img-responsive" src="../../estilos/images/rol.jpg" alt="Sans &amp; Sans-Serif">
                      <div class="overlay2">
                        <h2>Opciones</h2>
                        <a class="info2" href="../../rol/vista/index.php"></a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-1 col-sm-1 col-xs-12">
                  </div>

                  <div class="col-md-1 col-sm-1 col-xs-12">
                  </div>

                  <div class="col-md-5 col-sm-8 col-xs-12">
                    <div class="card hovereffect2" style="width: 100%;">
                      <img class="card-img-top img-responsive" src="../../estilos/images/config.jpg" alt="Sans &amp; Sans-Serif">
                      <div class="overlay2">
                        <h2>Editar Perfil</h2>
                        <a class="info2" href="../../perfil/vista/index.php"></a>
                      </div>
                    </div>
                  </div>
                </div>

              <?php
              }
              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Fin body plantilla home -->

  <!-- Inicio footer plantilla unal -->
  <footer class="clear container-fluid">
    <div class="row">
      <nav class="col-lg-3 col-md-3 col-sm-4 col-6 gobiernoLinea">
        <a href="http://www.legal.unal.edu.co" target="_top">Régimen Legal</a>
        <a href="http://personal.unal.edu.co" target="_top">Talento humano</a>
        <a href="http://contratacion.unal.edu.co" target="_top">Contratación</a>
        <a href="http://personal.unal.edu.co" target="_top">Ofertas de empleo</a>
        <a href="http://launalcuenta.unal.edu.co/" target="_top">Rendición de cuentas</a>
        <a href="http://docentes.unal.edu.co/concurso-profesoral/" target="_top">Concurso docente</a>
        <a href="http://www.pagovirtual.unal.edu.co/" target="_top">Pago Virtual</a>
        <a href="http://controlinterno.unal.edu.co/" target="_top">Control interno</a>
        <a href="http://siga.unal.edu.co" target="_top">Calidad</a>
        <a href="http://unal.edu.co/buzon-de-notificaciones/" target="_self">Buzón de notificaciones</a>
      </nav>
      <nav class="col-lg-3 col-md-3 col-sm-4 col-6 gobiernoLinea">
        <a href="http://correo.unal.edu.co" target="_top">Correo institucional</a>
        <a href="#">Mapa del sitio</a>
        <a href="http://redessociales.unal.edu.co" target="_top">Redes Sociales</a>
        <a href="#">FAQ</a>
        <a href="http://unal.edu.co/quejas-y-reclamos/" target="_self">Quejas y reclamos</a>
        <a href="http://unal.edu.co/atencion-en-linea/" target="_self">Atención en línea</a>
        <a href="http://unal.edu.co/encuesta/" target="_self">Encuesta</a>
        <a href="#">Contáctenos</a>
        <a href="http://estadisticas.unal.edu.co/" target="_top">Estadísticas</a>
        <a href="#">Glosario</a>
      </nav>
      <div class="col-lg-4 col-md-4 col-sm-4 col-12 footer-info">
        <div class="row footer-info-spacing">
          <p class="col-lg-6 col-md-12 col-sm-12 col-6 contacto">
            <b>Contacto página web:</b><br />
            Carrera 27 # 64-60<br />
            Campus Palogrande<br />
            Manizales, Colombia<br />
            Línea 01 8000 916956
          </p>
          <p class="col-lg-6 col-md-12 col-sm-12 col-6 derechos">
            &copy; Copyright 2021<br />
            Algunos derechos reservados.<br />
            <a title="Comuníquese con el administrador de este sitio web" href="mailto:diracade_man@unal.edu.co">diracade_man@unal.edu.co</a><br />
            <a href="#">Acerca de este sitio web</a><br />
            Actualización: 08/03/21
          </p>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-12 logos">
        <div class="row px-3">
          <div class="col-lg-6 col-md-12 col-sm-6 col-6 no-padding">
            <div class="row mx-1">
              <a class="col-md-12 col-sm-6 col-6" href="http://www.orgulloun.unal.edu.co">
                <img class="hidden-print" alt="Orgullo UN" src="../../estilos/images/log_orgullo.png" width="78" height="21" />
                <img class="d-none d-print-block" alt="Orgullo UN" src="../../estilos/images/log_orgullo_black.png" width="94" height="37" />
              </a>
              <a class="col-md-12 col-sm-6 col-6 imgAgencia" href="http://www.agenciadenoticias.unal.edu.co/inicio.html">
                <img class="hidden-print" alt="Agencia de Noticias" src="../../estilos/images/log_agenc.png" width="94" height="25" />
                <img class="d-none d-print-block" alt="Agencia de Noticias" src="../../estilos/images/log_agenc_black.png" width="94" height="37" />
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-6 col-6 no-padding">
            <div class="row mx-1">
              <a class="col-md-12 col-sm-6 col-6" href="https://www.sivirtual.gov.co/memoficha-entidad/-/entidad/T0356">
                <img alt="Portal Único del Estado Colombiano" src="../../estilos/images/log_gobiern.png" width="67" height="51" />
              </a>
              <a class="col-md-12 col-sm-6 col-6" href="http://www.contaduria.gov.co/">
                <img alt="Contaduría General de la República" src="../../estilos/images/log_contra.png" width="67" height="51" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Fin footer plantilla unal -->

</body>
<!-- Fin body -->

</html>