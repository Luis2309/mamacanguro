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

   
   /* $sql = "CALL sp_tapacientes_atendidoslabo();";*/
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
    <!-- para que el menu deje de tener lineas -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <link href="../assets/css/style-login.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/img/icon.ico" />

    <script src="../assets/js/chart-master/Chart.js"></script>
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="../assets/js/jquery-v1.min.js"></script>
    <link href="assets/css/style-menu-admin.css" rel='stylesheet' type='text/css' />
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    
</head>

    <body>
        <section id="container" >
          <!-- **********************************************************************************************************************************************************
          MENU
          *********************************************************************************************************************************************************** -->
      <!--menu start-->

            <div class="bg">   
                    <div class="container">
                        <div class="top-banner-grids wow bounceInUp" data-wow-delay="0.4s">
                            <div class="banner-grid banner-grid-active text-center">
                                <!--<a href="index.html">-->
                                <span class="top-icon1"> </span>
                                <h3>Pagina Principal</h3>
                               <!-- </a>-->
                            </div>
                            <div class="banner-grid text-center">
                                <a href="BuscarPaciente.php">
                                    <span class="top-icon2"> </span>
                                    <h3>Buscar Paciente</h3>
                                </a>
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
                

            
         <!--MENU end-->
          
          <!-- **********************************************************************************************************************************************************
          MAIN CONTENT
          *********************************************************************************************************************************************************** -->
          <!--main content start-->
        
       
        <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
    
        
         
      <!--sidebar end-->

        <section id="main-content">
          <section class="wrapper site-min-height">
                    <!-- BASIC FORM ELELEMNTS -->
                        <div class="row">
                            <div class="col-lg-8 main-chart" >
                                <div class="row mt">
                                    <div class="panel panel-default">
                                   
                                        <div class="panel-heading">
                                            Muestras Recidas en el dia:
                                        </div>
                            
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Estado</th>
                                                            <th>Nombre</th>
                                                            <th>Apellidos</th>
                                                            <th>Servicio</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                            
                                                        <?
                                                        $sql = "CALL sp_tapacientes_emuestra_hoy();";
                                                        // Execute multi query
                                                        if (mysqli_multi_query($con,$sql))
                                                        {
                                                        //do
                                                            //{
                                                            // Store first result set
                                                            if ($result=mysqli_store_result($con))
                                                            {
                                                                while ($row=mysqli_fetch_row($result))
                                                                    {
                                                                    
                                                                        $Nombres = $row[0]; //VIdeo1
                                                                        $Apellidos = $row[1]; //Video2
                                                                        $Servicio= $row[2]; //Video2
                                                                        echo "
                                                                        <tr class='success'>
                                                                            
                                                                            <td>Muestra Recibida</td>
                                                                            <td>$Nombres</td>
                                                                            <td>$Apellidos</td>
                                                                            <td>$Servicio</td>
                                                                        </tr>";
                                                             } 
                                                                    mysqli_free_result($result);
                                                                //}
                                                            }
                                                                  //while (mysqli_next_result($con));
                                                        }
                                                        mysqli_next_result($con);
                                                                //mysqli_close($con);
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--fin de rowmt-->
                                <div class="row mt">
                                    <div class="panel panel-default">
                                   
                                        <div class="panel-heading">
                                            Examenes que faltan Analizar:
                                        </div>
                            
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>DNI</th>
                                                            <th>Nombres</th>
                                                            <th>Apellidos</th>
                                                            <th>Examen</th>
                                                            <th>Aplazado desde</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?
                                                        $sql = "CALL sp_tapacientes_faltaresultado();";
                                                        // Execute multi query
                                                        if (mysqli_multi_query($con,$sql))
                                                        {
                                                        //do
                                                            //{
                                                            // Store first result set
                                                            if ($result=mysqli_store_result($con))
                                                            {
                                                                while ($row=mysqli_fetch_row($result))
                                                                    {
                                                                    
                                                                        $DNI = $row[0]; //VIdeo1
                                                                        $Nombres = $row[1]; //Video2
                                                                        $Apellidos= $row[2]; //Video2
                                                                        $Servicio= $row[3]; //Video2
                                                                        $Fecha= $row[4]; //Video2
                                                                        echo "
                                                                        <tr class='success'>
                                                                            
                                                                            <td>$DNI</td>
                                                                            <td>$Nombres</td>
                                                                            <td>$Apellidos</td>
                                                                            <td>$Servicio</td>
                                                                            <td>$Fecha</td>
                                                                        </tr>";
                                                                    } 
                                                                    mysqli_free_result($result);
                                                                //}
                                                            }
                                                            //while (mysqli_next_result($con));
                                                        }
                                                        mysqli_next_result($con);
                                                                //mysqli_close($con);
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--fin de rowmt--> 
                                                             
                    <!--  end  Context Classes  -->
                            </div> <!-- Fin de col6-->
                                  
                      <!-- **********************************************************************************************************************************************************
                      RIGHT SIDEBAR CONTENT
                      *********************************************************************************************************************************************************** -->                   
                            <div class="col-lg-4 ds">
                                    <!--COMPLETED ACTIONS DONUTS CHART-->
                                <div  class="row mt">
                                    <h3>NOTIFICACIONES</h3>
                                                        
                                <!-- First Member -->                                    
                                    <?
                                    $sql= "CALL sp_tapaciente_laboratorio();";
                                    // Execute multi query
                                    if (mysqli_multi_query($con,$sql))
                                    {
                                    //do
                                        //{
                                        // Store first result set
                                        if ($result=mysqli_store_result($con))
                                        {
                                            while ($row=mysqli_fetch_row($result))
                                                {
                                                
                                                    $Nombres = $row[0]; //VIdeo1
                                                    $Apellidos = $row[1]; //Video2
                                                    $Servicio= $row[2]; //Video2
                                                echo "
                                                    <div class='desc'>
                                                    <div class='thumb'>
                                                        <img class='img-circle' src='../assets/img/paciente.jpg' width='35px' height='35px' align=''>
                                                    </div>
                                                    <div class='details'>
                                                        <p><a href='#'>$Nombres $Apellidos</a><br/>
                                                            <muted>'$Servicio'</muted>
                                                            
                                                        </p>
                                                        

                                                        
                                                    </div> 
                                                    <div class='thumb'>
                                                        
                                                        <input type='button' class='btn btn-theme04' value='Recibir Muestra'>
                                                        

                                                        
                                                    </div> 
                                                    </div>";
                                                      
                                                                          
                                                } 
                                                mysqli_free_result($result);
                                            //}
                                        }
                                              //while (mysqli_next_result($con));
                                    }
                                    mysqli_next_result($con);
                                            //mysqli_close($con);
                                    ?>
                                </div>                                              
                            </div><!-- /col-lg-3 -->
                        </div> <!-- final de row1 -->
                    </section>
                </section>
                    
                      <!--footer end-->
                    
                
            </div>
            <!--main content end-->
                      <!--footer start-->
        <footer class="site-footer">
                <div class="text-center">
                    2014 - Alvarez.is
                    <a href="blank.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
        </footer>             
    </section>
       
<script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jjquery-1.8.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>


    <!-- js placed at the end of the document so the pages load faster -->
    </body>
</html>
