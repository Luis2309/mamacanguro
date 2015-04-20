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
<!DOCTYPE HTML>
<html>
	<head>
		<title>Menú Doctor | Mama Canguro</title>
		<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link rel="icon" type="image/png" href="assets/img/icon.ico" />
		<script src="assets/js/jquery.min.js"></script>
		<link href="assets/css/style-menu-admin.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!---- animated-css ---->
		<link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
		<link rel="icon" type="image/png" href="../assets/img/icon.ico" />
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
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
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
	</head>
	<body>
		<div class="bg">
		<!----- start-header---->
		<div class="container">
		<form name="fmUsuario" method="post" action="">
			<div class="top-banner-grids wow bounceInUp" data-wow-delay="0.4s">
					<div class="banner-grid banner-grid-active text-center">
						<span class="top-icon1"> </span>
						<a href="/mamacanguro/doctor/edit.php?chr_dni_usuario=<?=$User?>"><h3>Actualizar mis datos</h3></a>
					</div>				
					<div class="banner-grid text-center">
						<span class="top-icon2"> </span>
						<a href="/mamacanguro/logout.php"><h3>Salir del Sistema</h3></a>
					</div>
				 </form> 
					<div class="clearfix"> </div>
				</div>
				</div>
			<!---- banner-info ---->
			<div class="banner-info">
				<div class="container">
					<h1 class="wow fadeIn" data-wow-delay="0.5s"><span>clinica</span><br/>
					<label>mama canguro</label></h1>
				</div>
			</div>				
		</div>
			
	</body>
</html>

