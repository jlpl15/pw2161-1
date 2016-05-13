<?php
function validaEntrada()
{
	$usuario   = $_POST["usuario"];
	$clave     = md5($_POST["clave"]);
	$respuesta = false;
	//Servidor, usuario, contraseña
	mysql_connect("localhost","root","");
	mysql_select_db("cursopw");
	$validarUsuario = "select * from usuarios where usuario='".$usuario."' and clave='".$clave."' limit 1";
	$resultado = mysql_query($validarUsuario);
	if(mysql_num_rows($resultado) > 0)
	{
		$respuesta = true;		
	}
	$salidaJSON = array('respuesta' => $respuesta);
	print json_encode($salidaJSON);
}


$accion = $_POST["accion"];
//Menú principal
switch ($accion) {
	case 'validaEntrada':
		validaEntrada();
		break;
	
	default:
		# code...
		break;
}
?>