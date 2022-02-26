<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
include'../../sistema/conexion.php';
session_start();
$accion = $_POST['accion'];
switch (!empty($accion)) {
	case ($accion = 0):
		$name = $_POST['name'];
		$cat = $_POST['cat'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$nuevo_usado = $_POST['nuevo-usado'];
		if (isset($_POST['antes'])) {
			$antes = $_POST['antes'];
		}else{
			$antes = 0;
		}
		if (isset($_POST['marca'])) {
			$marca = $_POST['marca'];
		}
		if (isset($_POST['modelo'])) {
			$marca = $_POST['modelo'];
		}
		if (isset($_POST['color'])) {
			$marca = $_POST['color'];
		}
		$codigo = bin2hex(random_bytes(6));
		$reg = "INSERT INTO market_producto_general (
		codigo,
		name,
		cat,
		descripcion,
		precio,
		antes,
		nuevo_usado,
		marca,
		modelo,
		color,
		usuario)VALUES(
		'$codigo',
		'$name',
		'$cat',
		'$descripcion',
		'$precio',
		'$antes',
		'$nuevo_usado',
		'$marca',
		'$modelo',
		'$color',
		'$_SESSION[id]')";
		if (!mysqli_query($link, $reg)) {
		  printf("Errormessage: %s\n", mysqli_error($link));
		}else{
			$dir_subida = '../../images/productos/';
            $nombre_src = basename($_FILES['foto1']['name']);
            $nombre_src = $codigo.'-img1';
            $nom_file = basename($_FILES['foto1']['name']);
            $extension = pathinfo($nom_file, PATHINFO_EXTENSION);
            $fichero_subido = $dir_subida.$nombre_src.'.'.$extension;
            $micropic = $dir_subida.$nombre_src.'.webp';
            if (move_uploaded_file($_FILES['foto1']['tmp_name'], $fichero_subido)) {
              function convertImageToWebP($source, $destination, $quality) {
                $extension = pathinfo($source, PATHINFO_EXTENSION);
                if ($extension == 'jpeg' || $extension == 'jpg')
                  $image = imagecreatefromjpeg($source);
                elseif ($extension == 'gif')
                  $image = imagecreatefromgif($source);
                elseif ($extension == 'png')
                  $image = imagecreatefrompng($source);
                elseif ($extension == 'webp')
                  $image = imagecreatefromwebp($source);
                return imagewebp($image, $destination, $quality);
              }
              convertImageToWebP($fichero_subido, $micropic, 30);
              unlink($fichero_subido);
            }
            header("Location: ../../articulo?cod=$codigo");
        }
		break;

	default:
		echo 'default';
		break;
}
?>