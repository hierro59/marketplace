<?php 
/**
 * FUNCIONES PRINCIPALES Y GENERALES DEL SISTEMA
 * 
 * @author Félix León
 * @author Luis Santiago Reyes
 * 
 * @version 0.1.1
 */

/**
 * CONTROL DE ERRORES
 */
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

/**
 * INICIA EL SERVICIO DE COOKIES PARA EL MANEJO DE SESION
 */
session_start();

/**
 * SE DEFINE EN UNA VARIABLE LA URL BASE DEL SERVIDOR
 */
$url = "http://".$_SERVER['SERVER_NAME']."/ecommerceTestSanti/";
define("URL", "$url");

/**
 * FUNCIÓN DE CONTROL DE USUARIOS
 * SI NO ECXISTE UNA SESIÓN DE USUARIOS INICIADA, REDIRIGE AL LOGIN
 */
function noUserLvl1() {
    if (empty($_SESSION['id'])) {
        header("location: ../sign-up/");
    }
}
function noUserLvl2() {
    if (empty($_SESSION['id'])) {
        header("location: ../../sign-up/");
    }
}

/**
 * FUNCION PARA EL MANEJO DE ALERTAS
 */
if (!empty($_GET['msj'])) {
    $alert = 'msj';
    $code = $_GET['msj'];
}elseif (!empty($_GET['errno'])) {
    $alert = 'error';
    $code = $_GET['errno'];
}else{
    // Sin alertas
}
/**
 * FUNCION PARA EL MANEJO DE ALERTAS CON SWEETALERT
 * RECIBE DOS PARAMETROS PARA EL MANEJO DE LAS ALERTAS
 * @param string    $alert      RECIBE EL TIPO DE ALERTA 'error' O 'msj'
 * @param string    $code       RECIBE EL CODIGO DE LA ALERTA
 */
function alerts($alert, $code) {
    if ($alert == 'error') {
        switch ($code) {
            case ($code == '001'):
                echo "<div class='no-select'><script>
                        Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: '¡Este usuario ya existe!'
                        })
                    </script></div>";
                break;
            
            default:
                echo 'default';
                break;
        }
    }elseif ($alert == 'msj') {
        switch ($code) {
            case ($code == '001'):
                echo "<div class='no-select'><script>
                        Swal.fire({
                          icon: 'success',
                          title: '¡Te registraste!',
                          text: 'Revisa tu correo'
                        })
                    </script></div>";
                break;
            
            default:
                echo 'default';
                break;
        }
    }
}
/**
 * FUNCION PARA RECORTAR TEXTO
 * RECORTA LOS TEXTOS DEL LOS TITULOS Y DESCRIPCIÓN DE LOS ARTICULOS Y RECIBE 2 PARAMETROS OBLIGATORIOS
 * @param string    $url        RECIBE LA URL BASE DEL SISTEMA
 * @param string    $result     RECIBE EL STRING QUE SE DESEA PROCESAR
 * 
 */
function stringShortener($url, $result, $maxName) {
    $maxDescription = 150;  // NÚMERO MÁXIMO DE CARACTERES PARA LA DESCRIPCIÓN
    
    // SI $result   NO VIENE VACÍO SE PROCESAN LOS DATOS DE LO CONTRARIO RETORNA LA CADENA "Indefinido"
    if(!empty($result)) {
        
        // SI EL TITULO ES MAYOR AL LIMITE SE RECORTA Y SE AGREGAN TRES PUNTOS AL FINAL, DE LO CONTRARIO SE DEJA IGUAL
        if(strlen($result['name']) > $maxName) {
            $array['name'] = substr($result['name'], 0, $maxName).'...';
        } else {
            $array['name'] = $result['name'];
        }
        
        // SI DESCRIPCIÓN ES MAYOR AL LIMITE SE RECORTA, SE LIMPIAN LOS FORMATOS HTML, SE AGREGAN TRES PUNTOS AL FINAL Y EL ENLACE DEL LA FICHA DEL PRODUCTO, DE LO CONTRARIO SE DEJA IGUAL
        if(strlen($result['descripcion']) > $maxDescription) {
            $array['descripcion'] = strip_tags(substr($result['descripcion'], 0, $maxDescription)).'... ';
            $array['descripcion'] .= '<a href="'.$url.'articulo/?cod='.$result['codigo'].'">Leer más.</a>';
        } else {
            $array['descripcion'] = $result['descripcion'];
        }
        return $array;
    } else {
        return $array = array('name' => "Indefinido", 'descripcion' => "Indefinido");
    }
}
?>
