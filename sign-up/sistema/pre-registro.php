<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
include '../../sistema/conexion.php';

/*
class Captcha{
    public function getCaptcha($SecretKey){
        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdAWwEaAAAAAMYmlFcWEWljSZ0dvM1n_2IcqfaS&response={$SecretKey}");
        $retorno = json_decode($respuesta);
        return $retorno;
    }
}

$ObjCaptha = new Captcha();
$retorno = $ObjCaptha->getCaptcha($_POST['g-recaptcha-response']);
*/
if(empty(trim($_POST["correo"]))){
        echo $mail_err = "Por favor ingrese un correo.";
    }else{

	$mail = htmlentities($_POST['correo'], ENT_QUOTES);

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$sql = mysqli_query($link,"SELECT correo FROM pre_registro_usuarios WHERE correo = '$mail'");
	  	$reg = mysqli_fetch_array($sql);

		if ($mail == $reg['correo']) {
			mysqli_close($link);
			header("Location: ../?errno=001");
		}else{
			$cryp = bin2hex(random_bytes(128));
			$nombre = htmlentities($_POST['nombre'], ENT_QUOTES);
			$apellido = htmlentities($_POST['apellido'], ENT_QUOTES);
			$tlf = htmlentities($_POST['tlf'], ENT_QUOTES);

			$cabeceras = 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: MarktPlace <soporte@quantlas.com>';

			$asunto = '¡Hola '.$nombre.'!';

			$mensaje = '<div style="position: relative;
			margin-left: auto; 
			margin-right: auto; 
			padding: 5% 5%; 
			text-align: center; 
			font-family: Arial;">

			<div style=" margin-left: auto; 
			margin-right: auto;
			text-align: center;
			width: 100%;
			"><img src="https://www.quantlas.com/test/ecommerce/images/LogoMarktPlace.webp" style="width: 40%;"></div>
			
			<h1>Estás a punto de registrate en MarktPlace</h1>

			<p style="margin-bottom: 50px;">Para verificar tu correo electrónico, debes dar click en el siguiente botón, donde podrás completar el registro:</p>

			<a href="https://www.quantlas.com/test/ecommerce/sign-up/verify?check='.$cryp.'" 
			style=" padding: 30px 50px;
			background-color: #fe7210;
			border-radius: 5px;
			text-decoration: none;
			color: #fff;
			font-family: Arial;
			font-weight: 900;
			">Completar registro</a>

			<p style="  font-size: 8pt;
			padding: 5% 5%;
			color: #555;

			">Si no has solicitado registrate puedes hacer caso omiso a este mail o pedirnos que eliminemos tu dirección de correo electrónico de nuestra base de datos enviado un mail con el asunto "Baja" a <a href="mailto:soporte@quantlas.com">soporte@quantlas.com</a>. <br>Sin embargo te invitamos a darte una vuelta por nuestro sitio y enterarte de que se trata nuestra comunidad en internet.</p>
			</div>';

			$ingresar = ("INSERT INTO pre_registro_usuarios (nombre, apellido, tlf, correo, key_confirm) VALUES ('$nombre', '$apellido', '$tlf', '$mail', '$cryp')");

			if (!mysqli_query($link, $ingresar)) {
				printf("Errormessage: %s\n", mysqli_error($link));
			}else{
				mail($mail, $asunto, $mensaje, $cabeceras);
				mysqli_close($link);
				header("Location: ../ok?msj=001");
			}
		}
	}
}
?>