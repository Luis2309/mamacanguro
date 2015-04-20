<?php
	//Recuperar la informacion del usuario
	$IdUsuario = $_POST["txtId"];
  
  $Nombres=$_POST['txtNombres'];	
	$AP=$_POST['txtAP'];
  $Telefono=$_POST['txtTelf'];
	$Dom=$_POST['txtDomi'];
  $Email=$_POST['txtCorreo'];
  $Fecha=$_POST['txtFecha'];
  $Sexo=$_POST['txtSexo'];
	$Clave=$_POST['txtClave'];
  $Tipo=$_POST['txtTipo'];
	
	//Coneccion al servidor
	$Enlace = mysqli_connect('localhost','root','info2309');	
	
	//Sellecionar la base de datos
	mysqli_select_db($Enlace,'bdmaca');
	
	$Consulta ="CALL sp_tausuario_actualizar('".$IdUsuario."','".utf8_decode($Nombres)."','".utf8_decode($AP)."',
            '".utf8_decode($Telefono)."','".utf8_decode($Dom)."','".utf8_decode($Email)."',
            '".utf8_decode($Fecha)."','".utf8_decode($Sexo)."','".utf8_decode($Clave)."',
            '".utf8_decode($Tipo)."')"; 
					
					//echo $Consulta;
					mysqli_query($Enlace,$Consulta);									
					
?>
<html>
<head>
<title>Detalles Secretaria</title>
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
  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <h4 class="mb"><i class="fa fa-angle-right"></i>Datos Secretaria</h4>
      <table class="table table-striped">
        <tr>
            <td width="200"><b>DNI</b></td>
            <td><?=$IdUsuario?></td>
        </tr>
        <tr>
            <td width="200"><b>Nombres</b></td>
            <td><?=$Nombres?></td>
        </tr>
        <tr>
            <td width="200"><b>Apellidos</b></td>
            <td><?=$AP?></td>
        </tr>
        <tr>
            <td width="200"><b>Teléfono</b></td>
            <td><?=$Telefono?></td>
        </tr>
        <tr>
            <td width="200"><b>Domicilio</b></td>
            <td><?=$Dom?></td>
        </tr>
        <tr>
            <td width="200"><b>Email</b></td>
            <td><?=$Email?></td>
        </tr>
        <tr>
            <td width="200"><b>F. Nacimiento</b></td>
            <td><?=$Fecha?></td>
        </tr>
        <tr>
            <td width="200"><b>Sexo</b></td>
            <td><?=$Sexo?></td>
        </tr>
        <tr>
            <td width="200"><b>Clave</b></td>
            <td><?=$Clave?></td>
        </tr>
        <tr>
            <td width="200"><b>Tipo</b></td>
            <td><?=$Tipo?></td>
        </tr>
    </table>
<p><a href="/mamacanguro/doctor/" class="btn btn-primary">Ir a Menú</a> </p>
 </div><!-- col-lg-12-->        
  </div><!-- /row -->
  </body>
</html>