<?
  // Recuperamos valores enviados por url
  $idservicio = $_GET['idservicio'];

  // Conexion a la Base de Datos
  $ip='localhost';
  $conexion = mysqli_connect($ip,'mamacanguro','clinica','bdmaca');
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Administrador | Mama Canguro</title>
    <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="assets/js/jquery.min.js"></script>
    <link href="assets/css/style-menu-admin.css" rel='stylesheet' type='text/css' />

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <!---- animated-css ---->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script type="text/javascript" src="assets/js/jquery.corner.js"></script> 
    <script src="assets/js/wow.min.js"></script>
    <script>
     new WOW().init();
    </script>
    <!---- animated-css ---->
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="assets/js/move-top.js"></script>
    <script type="text/javascript" src="assets/js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>   
    <!----start-top-nav-script---->
    <script>
      $(function() {
        var pull    = $('#pull');
          menu    = $('nav ul');
          menuHeight  = menu.height();
        $(pull).on('click', function(e) {
          e.preventDefault();
          menu.slideToggle();
        });
        $(window).resize(function(){
              var w = $(window).width();
              if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
              }
          });
      });
    </script>
    <!----//End-top-nav-script---->

    <!-- CSS personalizado -->
    <link href="assets/css/layout.css" rel="stylesheet">
  </head>
  <body>
    <div class="bg">
    <!----- start-header---->
    <div class="container">
      <div class="top-banner-grids wow bounceInUp" data-wow-delay="0.4s">
        <form method="post">
          <div class="banner-grid text-center">
            <a href="RegistrarAtencion.php?idservicio=1"><span class="top-icon1"> </span>
            <h3>medicina general</h3></a>
          </div>
          <div class="banner-grid text-center">
            <a href="RegistrarAtencion.php?idservicio=2"><span class="top-icon2"> </span>
            <h3>atencion ginecologia</h3></a>
          </div>
          <div class="banner-grid text-center">
            <a href="RegistrarAtencion.php?idservicio=3"><span class="top-icon3"> </span>
            <h3>atencion pediatria</h3></a>
          </div>
          <div class="banner-grid text-center">
            <a href="RegistrarAtencion.php?idservicio=4"><span class="top-icon4"> </span>
            <h3>examen laboratorio</h3></a>
          </div>
          <div class="banner-grid text-center">
                  <a href="filiacion.php"><span class="top-icon5"> </span>
                  <h3>nuevo paciente</h3></a>
              </div>
              <div class="banner-grid text-center">
                  <a href="#"><span class="top-icon6"> </span>
                  <h3>Reportes</h3></a>
              </div>
          <div class="banner-grid text-center">
            <a href="#"><span class="top-icon7"> </span>
            <h3>cuenta usuario</h3></a>
          </div>
          <div class="banner-grid text-center">
            <a href="#"><span class="top-icon8"> </span>
            <h3>cerrar sistema</h3></a>
          </div>
          <div class="clearfix"> </div>         
        </form>
      </div>
    </div>
      <!---- banner-info ---->
      <section id="container" >

  <!-- *******************************  MAIN CONTENT  ******************************************* -->
  <section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> REGISTRAR ATENCION</h3>

      <!-- BASIC FORM ELEMENTS -->
      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Atencion Paciente</h4>
            <form class="form-horizontal style-form" method="get">
                <div class="form-group">
                    <label class="col-sm-1 col-sm-1 control-label">DNI :</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control round-form">
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-theme">BUSCAR</button>
                    </div>
                    <label class="col-sm-2 col-sm-2 control-label">Especialidad:</label>
                    <div class="col-sm-4">
                      <?php
                        $sentencia = "CALL sp_taservicio_listar(".$idservicio.")";
                        if (mysqli_multi_query($conexion, $sentencia)) {
                          if($resultado= mysqli_store_result($conexion)){
                            $fila= mysqli_fetch_row($resultado);
                            $denominacion= $fila[0];
                            $precio= $fila[1];
                            $tipo= $fila[2];
                            if ($tipo=="Consulta") {
                              echo "<input type='text' class='form-control round-form' value='".utf8_decode($denominacion)."' readonly=0>";
                            }
                            else{
                              echo "<input type='text' class='form-control round-form' value='Examen' readonly=0>";                              
                            }
                          }
                        }
                      ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-1 col-sm-1 control-label">Nombres:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control round-form">
                    </div>
                    <label class="col-sm-1 col-sm-1 control-label">Apellidos:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control round-form">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-1 col-sm-1 control-label">Precio:</label>
                    <div class="col-sm-2">
                      <?php 
                            if ($tipo=="Consulta") {
                              echo "<input type='text' class='form-control round-form' value='S/.".utf8_decode($precio).".00' readonly=0>";
                            }
                            else{
                              echo "<input type='text' class='form-control round-form' value='' readonly=0>";                              
                            }

                       ?>
                    </div>
                    <label class="col-sm-1 col-sm-1 control-label">Descuento:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control round-form">
                    </div>
                    <label class="col-sm-1 col-sm-1 control-label">Total:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control round-form">
                    </div>
                </div>
                </form>
          </div>
          <div class="form-panel">
                <form class="form-horizontal style-form" method="get">
                  <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Tipo de Examen:</label>
                      <div class="col-sm-6">
                          <select class="form-control">
                              <option>Primaria</option>
                              <option>Secundaria</option>
                              <option>Superior no Universitaria</option>
                              <option>Superior Universitaria</option>
                          </select>
                      </div>                    
                  </div>
                </form>
          </div>
          <div class="form-panel">
                <form class="form-horizontal style-form" method="get">
                    <div class="form-group">
                        <label class="col-sm-5 col-sm-5 control-label"></label>
                        <button type="submit" class="btn btn-theme">Enviar Paciente</button>
                    </div> 
                </form>
          </div>                
        </div><!-- col-lg-12-->       
      </div><!-- /row -->
    </section><!-- /wrapper -->
  </section><!-- /MAIN CONTENT -->

  </section>
           
    </div>

      
  </body>
</html>

