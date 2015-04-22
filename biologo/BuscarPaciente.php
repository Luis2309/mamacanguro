<?php
    // Inicializar la sesion
    //session_start();
    // Colocamos codigo php en todas nuestras pagina
    // echo $_SESSION["UsuarioLogueado"];
    //if($_SESSION["UsuarioLogueado"] != "")
    //{
     //   header("Location: Coordinador.php");
       // exit;
    //}
    $con=mysqli_connect("localhost","root","bbns","bdmaca");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    //$sql= "CALL taatencion_laboratorio(now);";
/*  $sql .= "CALL TComunicados_Top7();";
    $sql .= "CALL TInformacion_Listar();";
*/  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="BLENS101">

        <title>Clínica - Mamá Canguro</title>

        <!-- Bootstrap core CSS -->
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
        
        <!-- Custom styles for this template -->
        <link href="../assets/css/style.css" rel="stylesheet">
        <link href="../assets/css/style-responsive.css" rel="stylesheet">
        <link href="../assets/css/style-login.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="../assets/img/icon.ico" />

        <script src="../assets/js/chart-master/Chart.js"></script>
        <script src="assets/js/ie-emulation-modes-warning.js"></script>
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="assets/js/jquery-v1.min.js"></script>
        <link href="assets/css/style-menu-admin.css" rel='stylesheet' type='text/css' />
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">    
    </head>

    <body>
        <section id="container">       
          <!-- **********************************************************************************************************************************************************
          MENU
          *********************************************************************************************************************************************************** -->
        <!--menu start-->
            <div class="bg">             
                <div class="container">
                    <div class="top-banner-grids wow bounceInUp" data-wow-delay="0.4s">
                        <div class="banner-grid text-center">
                            <a href="index.php">
                                <span class="top-icon1"> </span>
                                <h3>Pagina Principal</h3>
                           </a>
                        </div>
                        <div class="banner-grid banner-grid-active text-center">
                            <!--<a href="BuscarPaciente.html">-->
                                <span class="top-icon2"> </span>
                                <h3>Buscar Paciente</h3>
                            <!--</a>-->
                        </div>
                        <div class="banner-grid text-center">
                            <a href="Reportes.php">
                                <span class="top-icon3"> </span>
                                <h3>Generar Reportes</h3>
                            </a>
                        </div>
                        <div class="banner-grid text-center">
                            <a href="AdmiLaboratorio.php">
                                <span class="top-icon3"> </span>
                                <h3>Administrar Datos</h3>
                            </a>
                        </div>
                        <div class="banner-grid text-center">
                            <a href="index.php">
                                <span class="top-icon5"> </span>
                                <h3>Cerrar Sistema</h3>
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

                <script type="text/javascript">
                    function mostrar(){
                    document.getElementById('oculto').style.display = 'block';}
                </script>
         <!--MENU end-->
          
          <!-- **********************************************************************************************************************************************************
          MAIN CONTENT
          *********************************************************************************************************************************************************** -->
          <!--main content start-->
                <section id="main-content">
                    <section class="wrapper site-min-height ">
                    <!-- BASIC FORM ELELEMNTS -->
                        <div class="row " ><!-- inicio de row1--> 
                            <div class="col-lg-8 main-chart" >
                                <div class="row mt">
                                    <div class="form-panel">
                                        <h4 class="mb">Buscar Paciente</h4>
                                        <form class="form-horizontal style-form">
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Dato a Buscar: </label>
                                                <div class="col-sm-6">            
                                                    <input class="form-control"  maxlength="30" id="disabledInput" type="text"  placeholder="Coloque el DNI o NOMBRE del Paciente.">
                                                </div>
                                                <input type='button' class='btn btn-theme04' value='Buscar' onclick='mostrar()'>
                                                                  
                                            </div>                                        
                                        </form>
                                    </div>
                                </div>
                                <div class="row mt">
                                    <div class="panel panel-default">                       
                                        <div class="panel-heading">Examenes Realizados al Paciente:</div>                        
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Nro</th>
                                                            <th>Examen</th>
                                                            <th>Fecha de Recepcion de Muestra</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="success">
                                                            <td>1</td>
                                                            <td>Trigliceridos</td>
                                                            <td>19/04/2015</td>
                                                            <td><input type='button' class='btn btn-success btn-xs' value='Llenar Resultado' onclick='mostrar()'>
                                                            <input type='button' class='btn btn-danger btn-xs' value='Modificar Resultado' onclick='mostrar()'>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt" style='display:none;' id="oculto">
                                    <div class="form-panel">
                                        <h4 class="mb">Ingresar datos de resultado</h4>
                                        <form class="form-horizontal style-form" method="get">
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Nombre de Paciente: </label>
                                                <div class="col-sm-10">                              
                                                    <input class="form-control"  maxlength="30" id="disabledInput" type="text" disabled >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Muestra Recibida: </label>
                                                <div class="col-sm-10">                              
                                                    <textarea class="form-control" rows="5" placeholder="Ingrese a detalle el tipo de muestra recibida"></textarea>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-theme04"><i class="fa fa-check"></i> Guardar</button>                         
                                        </form>
                                    </div>
                                </div>

                            </div><!-- fin del col8--> 

                            <div class="col-lg-4 ds">
                                    <!--COMPLETED ACTIONS DONUTS CHART-->
                                <div  class="row mt">
                                    <h3>NOTIFICATIONS</h3>
                                                        
                               <!-- First Member -->
                                    <div class="desc">
                                        <div class="thumb">
                                            <img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align="">
                                        </div>
                                        <div class="details">
                                            <p><a href="#">DIVYA MANIAN</a><br/>
                                               <muted>Available</muted>
                                            </p>
                                        </div>
                                    </div>
                                  <!-- Second Member -->
                                    <div class="desc">
                                        <div class="thumb">
                                            <img class="img-circle" src="assets/img/ui-sherman.jpg" width="35px" height="35px" align="">
                                        </div>
                                        <div class="details">
                                            <p><a href="#">DJ SHERMAN</a><br/>
                                               <muted>I am Busy</muted>
                                            </p>
                                        </div>
                                    </div>
                                  <!-- Third Member -->
                                    <div class="desc">
                                        <div class="thumb">
                                            <img class="img-circle" src="assets/img/ui-danro.jpg" width="35px" height="35px" align="">
                                        </div>
                                        <div class="details">
                                            <p><a href="#">DAN ROGERS</a><br/>
                                               <muted>Available</muted>
                                            </p>
                                        </div>
                                    </div>
                                </div>                                                 
                            </div><!-- /col-lg-3 -->
                        </div><!-- Fin de row1 -->              

                    </section>
                </section>
                    <!--main content end-->
                      <!--footer start-->
                      <footer class="site-footer">
                          <div class="text-center">
                              2015 - BLENS 101
                              <a href="index.html" class="go-top">
                                  <i class="fa fa-angle-up"></i>
                              </a>
                          </div>
                      </footer>
                      <!--footer end-->
                    
                
            </div>
        </section>


    <!-- js placed at the end of the document so the pages load faster -->
    </body>
</html>
