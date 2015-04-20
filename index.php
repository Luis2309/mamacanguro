<?php
	// Inicializar la sesion
	session_start();
	// Colocamos codigo php en todas nuestras pagina
	// echo $_SESSION["UsuarioLogueado"];
	if($_SESSION["UsuarioLogueado"] != "")
	{
		header("Location:index.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Iniciar Sesión | Clínica Mamá Canguro</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/img/icon.ico"/>

    <!-- Custom styles for this template -->
    <link href="assets/css/style-login.css" rel="stylesheet">    
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="assets/js/jquery-v1.min.js"></script>
</head>
<body>
	<!--login modal-->
	<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
		<header class="pg-header">SERVICIOS MÉDICOS MAMÁ CANGURO</header>
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="text-center">Iniciar Sesión</h1>
				</div>
				<div class="modal-body">
					<form class="form col-md-12 center-block" action="validar-usuario.php" method="post">
						<div class="form-group">
						<input type="text" class="form-control input-lg" name="txtUsuario" id="txtUsuario" placeholder="Nombre Usuario" autofocus>
						</div>
						<div cl	ass="form-group">
						<input type="password" class="form-control input-lg" id="txtClave" name="txtClave" placeholder="Clave">
						</div>
						<br>
						<div class="form-group">
						<button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
						<span><a href="#">Need help?</a></span>
						</div>
					</form>
				</div>				
				<div class="modal-footer">
					<div class="col-md-12">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
					</div>		
				</div>
			</div>
		</div>
	</div>
	<!-- script references -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>