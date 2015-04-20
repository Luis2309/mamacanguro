<<<<<<< HEAD
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

          <p class="centered"><a href="edit.php"><img src="../assets/img/logo_canguro.png" class="img-circle" width="60"></a></p>
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

    <!-- *******************************  MAIN CONTENT  ******************************************* -->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> RESTAURAR ESTADO ANTERIOR DE LA BASE DE DATOS</h3>

        <!-- BASIC FORM ELEMENTS -->

        <!-- ************************************************************************************************************** -->
        <!-- Aquí van las funcionalidades de los otros usuarios -->
        <!-- ************************************************************************************************************** -->

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
=======
<?php
	$IdUsuario =$_GET["chr_dni_usuario"];
	$Enlace = mysqli_connect('localhost','root','info2309');
	mysqli_select_db($Enlace, "bdmaca");
	$Consulta= "CALL sp_tausuario_existe_new('".$IdUsuario."')";
	$Resultado = mysqli_query($Enlace,$Consulta);
	
	//REcuperar los daots del usuario
	$Fila = mysqli_fetch_array($Resultado);
	
		$Nombres=$Fila["vch_nombres"];
		$Apellidos=$Fila["vch_apellidos"];
		$Telefono=$Fila["vch_telefono"];
		$Domicilio=$Fila["vch_domicilio"];
		$Email=$Fila["vch_email"];
		$FNac=$Fila["dat_fecha_nacimiento"];		
		$Sexo=$Fila["chr_sexo"];
		$Clave=$Fila["vch_clave"];
		$Tipo=$Fila["vch_tipo_usuario"];
?>

<!doctype html>
<html>
<head>
<title>Modificar Datos Doctor</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="icon" type="image/png" href="../assets/img/icon.ico" />
<!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="../assets/js/jquery-v1.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.min.js"></script>
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>

<body>
	<script type="text/javascript">
    	$(function() {
        $("#txtFecha").datepicker({ dateFormat: "yy-mm-dd" });
  		});
	</script>
	<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Modificar Datos</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Personales</h4>
                      <form class="form-horizontal style-form" method="POST" action="edit-process.php">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">DNI</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="txtId" id="txtId" value="<?=$IdUsuario?>" readonly="true" required="required"/>
                              </div>
                          </div>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nombres</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="txtNombres" id="txtNombres" value="<?=$Nombres?>" required="required">
                              </div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Apellidos</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="txtAP" id="txtAP" value="<?=$Apellidos?>" required="required">
                              </div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Teléfono</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="txtTelf" id="txtTelf" value="<?=$Telefono?>" required="required">
                              </div>
                         </div>   
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Domicilio</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="txtDomi" id="txtDomi" value="<?=$Domicilio?>" required="required">
                              </div>
                         </div> 
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Correo</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="txtCorreo" id="txtCorreo" value="<?=$Email?>">
                              </div>
                         </div>     
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">F. Nacimiento</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="txtFecha" id="txtFecha" value="<?=$FNac?>" required="required">
                              </div>
                         </div>                
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Sexo</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="txtSexo" id="txtSexo" value="<?=$Sexo?>" required="required">
                              		<span class="help-block">Coloque M(Masculino) o F(Femenino)</span>
                              </div>
                         </div> 
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Clave</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="txtClave" id="txtClave" value="<?=$Clave?>" required="required">
                              </div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tipo</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="txtTipo" id="txtTipo" value="<?=$Tipo?>" readonly="True" required="required">
                              </div>
                         </div> 
                         <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Actualizar</button>
                         <button type="button" class="btn btn-info">Limpiar</button>                         
                      </form>
                  </div>
                  </div><!-- col-lg-12-->      	
          	</div><!-- /row -->

	</body>
</html>

>>>>>>> origin/master
