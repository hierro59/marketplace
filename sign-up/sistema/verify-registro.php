<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

if(htmlentities($_POST['pass1'], ENT_QUOTES) != htmlentities($_POST['pass2'], ENT_QUOTES)){
		$key_confirm = htmlentities($_POST['check'], ENT_QUOTES);
        header("Location: ../verify/?check=".$key_confirm."&err=001");
    }else{
	$mail = htmlentities($_POST['correo'], ENT_QUOTES);
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$nombre = htmlentities($_POST['nombre'], ENT_QUOTES);
		$apellido = htmlentities($_POST['apellido'], ENT_QUOTES);
		$tlf = htmlentities($_POST['tlf'], ENT_QUOTES);
		$pass1 = htmlentities($_POST['pass1'], ENT_QUOTES);
		$param_password = password_hash($pass1, PASSWORD_DEFAULT);
		$direccion = htmlentities($_POST['direccion'], ENT_QUOTES);
		$ciudad = htmlentities($_POST['ciudad'], ENT_QUOTES);
		$estado = htmlentities($_POST['estado'], ENT_QUOTES);
		$pais = htmlentities($_POST['pais'], ENT_QUOTES);
		$dni = htmlentities($_POST['dni'], ENT_QUOTES);
		$username = $nombre."-".bin2hex(random_bytes(3));
		$ingresar = ("INSERT INTO usuarios_confirmados (
			nombre, 
			apellido,
			username,
			tlf, 
			correo, 
			pass, 
			direccion, 
			ciudad, 
			estado, 
			pais, 
			dni) VALUES (
			'$nombre', 
			'$apellido',
			'$username',
			'$tlf', 
			'$mail', 
			'$param_password', 
			'$direccion', 
			'$ciudad', 
			'$estado', 
			'$pais', 
			'$dni')");
		include '../../sistema/conexion.php';
		if (!mysqli_query($link, $ingresar)) {
			printf("Errormessage: %s\n", mysqli_error($link));
			mysqli_close($link);
		}else{
			mysqli_close($link);
			header("Location: ../../?msg=002");
		}
	}else{
		$key_confirm = htmlentities($_POST['check'], ENT_QUOTES);
		header("Location: ../verify/?check=".$key_confirm."&err=999");
	}
}
?>