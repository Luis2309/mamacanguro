<?php 
  //inicializar la sesion
  session_start();
  //coloacomos codigo php en todas nuestras pagina
  //echo $_SESSION["UsuarioLogueado"];
  if($_SESSION["UsuarioLogueado"] =="")
  {
    header("Location: /mamacanguro/sin-acceso.html");
    exit;
  }
  $User = $_SESSION["UsuarioLogueado"];
  //$User = $_GET["txtIdUsuario"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>MENÚ PRINCIPAL - Administrador </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Clínica Mamá Canguro - Adiciones -->

    <link rel="icon" type="image/png" href="../assets/img/icon.ico" />
  </head>

  <body>
  <!-- Cuerpo de la página -->
  <section id="container" >
    <!-- ****************************** TOP BAR CONTENT & NOTIFICATIONS ******************************-->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>CLÍNICA MAMÁ CANGURO</b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="/mamacanguro/logout.php">Cerrar Sesión</a></li>
        </ul>
      </div>
    </header><!--header end-->

    <!-- ****************************** MAIN SIDEBAR MENU ******************************-->
    <!--sidebar start-->
    <aside>
      <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

          <p class="centered"><a href="/mamacanguro/admin/edit.php?chr_dni_usuario=<?=$User?>"><img src="../assets/img/logo_canguro.png" class="img-circle" width="60"></a></p>
          <h5 class="centered">Oscar Vizcarra</h5>

          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Inicio</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" >
            <i class="fa fa-book"></i>
            <span>Biólogo - Opciones</span>
            </a>
            <ul class="sub">
              <li><a href="recepcionar-muestra.php">Recepcionar muestra</a></li>
              <li><a href="ingresar-resultado-examen.php">Ingresar resultado de Ex.</a></li>
            </ul>
           </li>

          <li class="sub-menu">
            <a href="javascript:;" >
            <i class="fa fa-cogs"></i>
            <span>Doctor - Opciones</span>
            </a>
            <ul class="sub">
              <li><a href="llenar-historia.php">Llenar Historia Clínica</a></li>
              <li><a href="administrar-antecedentes.php">Administrar Antecedentes</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-desktop"></i>
              <span>Secretaria - Opciones</span>
            </a>
            <ul class="sub">
              <li><a href="administrar-filiacion.php">Administrar Filiación</a></li>
              <li><a href="registrar-consulta.php">Registrar Consulta</a></li>
            </ul>
          </li>

          <li class="mt">
            <a class="active" href="administrar-usuarios.php">
              <i class="fa fa-dashboard"></i>
              <span>Administrar Usuarios</span>
            </a>
          </li>

          <li class="mt">
            <a class="active" href="reportes.php">
              <i class="fa fa-dashboard"></i>
              <span>Reportes</span>
            </a>
          </li>

          <li class="mt">
            <a class="active" href="restaurar-base-datos.php">
              <i class="fa fa-dashboard"></i>
              <span>Restaurar Base de Datos</span>
            </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!-- ****************************** MAIN CONTENT ******************************-->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
            <div class="row">
              <div class="col-md-8 col-sd-8">
                <!-- CALENDAR-->
                <div id="calendar" class="mb">
                  <div class="panel green-panel no-margin">
                    <div class="panel-body">
                      <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                        <div class="arrow"></div>
                        <h3 class="popover-title" style="disadding: none;"></h3>
                        <div id="date-popover-content" class="popover-content"></div>
                      </div>
                      <div id="my-calendar"></div>
                    </div>
                  </div>
                </div><!-- / calendar -->
              </div>
              <div class="col-md-4 col-sd-4 ds">
                <!-- USERS ONLINE SECTION -->
                <h3>MIEMBROS DEL EQUIPO</h3>
                <!-- First Member -->
                <div class="desc">
                  <div class="thumb">
                    <img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align="">
                  </div>
                  <div class="details">
                    <p><a href="#">Dr. Elizabeth Céspedes Del Carpio</a><br/>
                    <muted>Medicina General - Pediatría</muted>
                    </p>
                  </div>
                </div>
                <!-- Second Member -->
                <div class="desc">
                  <div class="thumb">
                    <img class="img-circle" src="assets/img/ui-sherman.jpg" width="35px" height="35px" align="">
                  </div>
                  <div class="details">
                    <p><a href="#">Dr. Josephine Velasquez</a><br/>
                    <muted>Ginecología</muted>
                    </p>
                  </div>
                </div>
                <!-- Third Member -->
                <div class="desc">
                  <div class="thumb">
                    <img class="img-circle" src="assets/img/ui-danro.jpg" width="35px" height="35px" align="">
                  </div>
                  <div class="details">
                    <p><a href="#">Blgo. Dan Rogers</a><br/>
                    <muted>Laboratorio</muted>
                    </p>
                  </div>
                </div>
                <!-- Fourth Member -->
                <div class="desc">
                  <div class="thumb">
                    <img class="img-circle" src="assets/img/ui-zac.jpg" width="35px" height="35px" align="">
                  </div>
                  <div class="details">
                    <p><a href="#">Srta. Sara Sniders</a><br/>
                    <muted>Secretaría</muted>
                    </p>
                  </div>
                </div>
              </div>
            </div> <!-- row end -->
            <div class="row mt">
              <!--CUSTOM CHART START -->
              <div class="border-head">
                <h3>NRO DE PACIENTES DE ESTA SEMANA</h3>
              </div>
              <div class="custom-bar-chart">
                <ul class="y-axis">
                  <li><span>1000</span></li>
                  <li><span>800</span></li>
                  <li><span>600</span></li>
                  <li><span>400</span></li>
                  <li><span>200</span></li>
                  <li><span>0</span></li>
                </ul>
                <div class="bar">
                  <div class="title">Lunes</div>
                  <div class="value tooltips" data-original-title="850" data-toggle="tooltip" data-placement="top">85%</div>
                </div>
                <div class="bar ">
                  <div class="title">Martes</div>
                  <div class="value tooltips" data-original-title="500" data-toggle="tooltip" data-placement="top">50%</div>
                </div>
                <div class="bar ">
                  <div class="title">Miercoles</div>
                  <div class="value tooltips" data-original-title="600" data-toggle="tooltip" data-placement="top">60%</div>
                </div>
                <div class="bar ">
                  <div class="title">Jueves</div>
                  <div class="value tooltips" data-original-title="400" data-toggle="tooltip" data-placement="top">45%</div>
                </div>
                <div class="bar">
                  <div class="title">Viernes</div>
                  <div class="value tooltips" data-original-title="320" data-toggle="tooltip" data-placement="top">32%</div>
                </div>
                <div class="bar ">
                  <div class="title">Sábado</div>
                  <div class="value tooltips" data-original-title="620" data-toggle="tooltip" data-placement="top">62%</div>
                </div>
              </div><!--custom chart end-->
            </div> <!-- row end -->
          </div>
        </div>
      </section>
    </section>
    <!--main content end-->

    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        2015 - BLENS 101
        <a href="index.php#" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
    <!--footer end-->
  </section> <!-- Fin del cuerpo de la página -->

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery-1.8.3.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="assets/js/jquery.sparkline.js"></script>

  <!--common script for all pages-->
  <script src="assets/js/common-scripts.js"></script>

  <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

  <!--script for this page-->
  <script src="assets/js/sparkline-chart.js"></script>    
  <script src="assets/js/zabuto_calendar.js"></script>
  
  <!--
  <script type="text/javascript">
    $(document).ready(function () {
    var unique_id = $.gritter.add({
    // (string | mandatory) the heading of the notification
    title: 'Welcome to Dashgum!',
    // (string | mandatory) the text inside the notification
    text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
    // (string | optional) the image to display on the left
    image: 'assets/img/ui-sam.jpg',
    // (bool | optional) if you want it to fade out on its own or just sit there
    sticky: true,
    // (int | optional) the time you want it to be alive for before fading out
    time: '',
    // (string | optional) the class name you want to apply to that specific message
    class_name: 'my-sticky-class'
    });

    return false;
    });
  </script>
  -->
  <script type="application/javascript">
    $(document).ready(function () {
    $("#date-popover").popover({html: true, trigger: "manual"});
    $("#date-popover").hide();
    $("#date-popover").click(function (e) {
    $(this).hide();
    });

    $("#my-calendar").zabuto_calendar({
    action: function () {
    return myDateFunction(this.id, false);
    },
    action_nav: function () {
    return myNavFunction(this.id);
    },
    ajax: {
    url: "show_data.php?action=1",
    modal: true
    },
    legend: [
    {type: "text", label: "Special event", badge: "00"},
    {type: "block", label: "Regular event", }
    ]
    });
    });

    function myNavFunction(id) {
    $("#date-popover").hide();
    var nav = $("#" + id).data("navigation");
    var to = $("#" + id).data("to");
    console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

  </body>
</html>