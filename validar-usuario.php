<?php
	//inicializar la sesion
	$nroIntentos = 0;
	session_start();
	//recuperamos el usuario y contraseña
	$usuario = $_POST["txtUsuario"];
	$clave = $_POST["txtClave"];
	
	//verificamos si el usuario y contraseña son correctos
	$Enlace = mysqli_connect('localhost','root','info2309');	
	mysqli_select_db($Enlace,'bdmaca');
	$Consulta = "CALL sp_tausuario_existe('".$usuario."','".$clave."')";
	
	$Res = mysqli_query($Enlace, $Consulta);
	
	$Nro = mysqli_num_rows($Res);
	$Fila = mysqli_fetch_array($Res);
	$Tipo = $Fila["vch_tipo_usuario"];
	
	if ($nroIntentos < 3)
	{
		if($Nro > 0)
		{	//Acceso al sistema
			//Creamos una variable de sesion
			if ($Tipo == "secretaria")
			{
				$_SESSION["UsuarioLogueado"] = $usuario;
				header("Location: /mamacanguro/secretaria");
			}
			else
			{
				if ($Tipo == "doctor")
				{
					$_SESSION["UsuarioLogueado"] = $usuario;
					header("Location: /mamacanguro/doctor");
				}
				if ($Tipo == "biologo")
				{
					$_SESSION["UsuarioLogueado"] = $usuario;
					header("Location: /mamacanguro/biologo");
				}
				if ($Tipo == "administrador")
				{
					$_SESSION["UsuarioLogueado"] = $usuario;
					header("Location: /mamacanguro/administrador");
				}											
			}
		}
		else
		{	// Password y/o usuario incorrectos
			$nroIntentos = $nroIntentos + 1;
			echo "Datos incorrectos.....</br>";
			echo "Le quedan ".(3 - $nroIntentos)." intentos";
			echo "<a href='index.php'> Ir a login </a>";
		}
	}
	else
		echo "Sobrepasó el número de intentos permitidos, inténtelo luego.";
?>