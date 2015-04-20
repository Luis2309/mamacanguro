<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>RESTAURAR BASE DE DATOS - Clínica Mamá Canguro</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />

  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="icon" type="image/png" href="assets/img/icon.ico" />
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
          <li><a class="logout" href="login.php">Cerrar Sesión</a></li>
        </ul>
      </div>
    </header><!--header end-->

    <!-- ****************************** MAIN SIDEBAR MENU ******************************-->
    <!--sidebar start-->
    <aside>
      <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

          <p class="centered"><a href="#"><img src="../assets/img/logo_canguro.png" class="img-circle" width="60"></a></p>
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
              <li><a href="#">Recepcionar muestra</a></li>
              <li><a href="#">Ingresar resultado de Ex.</a></li>
            </ul>
           </li>

          <li class="sub-menu">
            <a href="javascript:;" >
            <i class="fa fa-cogs"></i>
            <span>Doctor - Opciones</span>
            </a>
            <ul class="sub">
              <li><a href="#">Llenar Historia Clínica</a></li>
              <li><a href="#">Administrar Antecedentes</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-desktop"></i>
              <span>Secretaria - Opciones</span>
            </a>
            <ul class="sub">
              <li><a href="#">Administrar Filiación</a></li>
              <li><a href="#">Registrar Consulta</a></li>
            </ul>
          </li>

          <li class="mt">
            <a class="active" href="#">
              <i class="fa fa-dashboard"></i>
              <span>Administrar Usuarios</span>
            </a>
          </li>

          <li class="mt">
            <a class="active" href="#">
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

    <!-- *******************************  MAIN CONTENT  ******************************************* -->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> RESTAURAR ESTADO ANTERIOR DE LA BASE DE DATOS</h3>

        <!-- BASIC FORM ELEMENTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal style-form" method="get">
                <div class="form-group">
                  <label class="col-sm-4 col-sm-4 control-label">Seleccione el archivo de Copia de Seguridad:</label>
                  <div class="col-sm-8">
                      <input type="file" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-3">
                  </div>
                  <div class="col-sm-6">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Realizar copia de seguridad</button>
                  </div>
                </div>
              </form>
            </div>
          </div><!-- col-lg-12-->       
        </div><!-- /row -->
      </section><!-- /wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        2015 - BLENS 101
        <a href="restaurar-base-datos.php#" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
    <!--footer end-->
  </section> <!-- Fin del cuerpo de la página -->

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


  <!--common script for all pages-->
  <script src="assets/js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom switch-->
  <script src="assets/js/bootstrap-switch.js"></script>

  <!--custom tagsinput-->
  <script src="assets/js/jquery.tagsinput.js"></script>

  <!--custom checkbox & radio-->

  <script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>

  <script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>


  <script src="assets/js/form-component.js"></script>    


  <script>
  //custom select box

  $(function(){
  $('select.styled').customSelect();
  });

  </script>

</body>
</html>
