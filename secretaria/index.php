<?	
	//inicializar la sesion
	session_start();
	//coloacomos codigo php en todas nuestras pagina
	//echo $_SESSION["UsuarioLogueado"];
	if($_SESSION["UsuarioLogueado"] =="")
	{
		header("Location: sin-acceso.html");
		exit;
	}
	$User = $_SESSION["UsuarioLogueado"];
	//$User = $_GET["txtIdUsuario"];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Administrador | Mama Canguro</title>
		<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="assets/js/jquery.min.js"></script>
		<link href="assets/css/style-menu-secre.css" rel='stylesheet' type='text/css' />
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
			<div class="top-banner-grids wow bounceInUp" data-wow-delay="0.4s">
					<div class="banner-grid banner-grid-active text-center">
						<span class="top-icon1"> </span>
						<h3>medicina general</h3>
					</div>
					<div class="banner-grid text-center">
						<span class="top-icon2"> </span>
						<h3>atencion ginecologia</h3>
					</div>
					<div class="banner-grid text-center">
						<span class="top-icon3"> </span>
						<h3>atencion pediatria</h3>
					</div>
					<div class="banner-grid text-center">
						<span class="top-icon4"> </span>
						<h3>modificar datos</h3>
					</div>
					<div class="banner-grid text-center">
						<span class="top-icon5"> </span>
						<h3>cerrar sistema</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>
			<!---- banner-info ---->
			<div class="banner-info">
				<div class="container">
					<h1 class="wow fadeIn" data-wow-delay="0.5s"><span>servicios medicos</span><br/>
					<label>mama canguro</label></h1>
				</div>
			</div>				
		</div>
			
	</body>
</html>

