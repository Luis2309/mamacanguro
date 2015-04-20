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

