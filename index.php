<?
	if ($Conexion = mysqli_connect("192.168.0.13","pruebaphp","123","bdasistencia")){
		echo "EXITO: Conexion realizada";
	}
	else {
		echo "ERROR: Conexion no realizada";
	}
?>