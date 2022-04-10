<?php 
/**
 * FUNCIONES PRINCIPALES Y GENERALES DEL SISTEMA
 * 
 * @author Félix León
 * @author Luis Santiago Reyes
 * 
 * @version 0.2.1
 */
/**
 * CONTROL DE ERRORES
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
/**
 * INICIA EL SERVICIO DE COOKIES PARA EL MANEJO DE SESION
 */
session_start();
/**
 * INCLUDES
 */
//include 'conexion.php';
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
/**
 * FUNCION PARA CAMBIO MONETARIO
 * SE CONECTA POR MEDIO DE CURL A LA API Y OPTIENE EL VALOR DEL TIPO DE CAMBIO
 * @param   float   $precioUSD     RECIBE EL PRECIO DEL PRODUCTO
 * @return  float   $alCambio      DEVUELVE EL PRODUCTO DEL PRECIO DEL ARTICULO CONTRA EL PRECIO DE CAMBIO
 * 
 */
function cambioUSD($precioUSD) {
    $cliente = curl_init();
    curl_setopt($cliente, CURLOPT_URL, "https://s3.amazonaws.com/dolartoday/data.json");
    curl_setopt($cliente, CURLOPT_HEADER, 0);
    curl_setopt($cliente, CURLOPT_TIMEOUT, 30);
    curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true); 
    $contenido = curl_exec($cliente);
    $err = curl_error($cliente);
    curl_close($cliente);
    $objeto = json_decode(utf8_encode($contenido));
    $cotizacion = utf8_decode($objeto->USD->promedio);
    if ($cotizacion) {
        $calculo = $precioUSD * $cotizacion;
        return $alCambio = round($calculo, 2);
    }else{
        return "Consulta con el vendedor";
    }
}
/**
 * FUNCION CONSULTA USUARIOS
 * SE CONECTA BASE DE DATOS Y EXTRAE LOS DATOS DEL USUARIO LOGEADO
 * @param   string   $userID     RECIBE EL ID DEL USUARIO
 * @return  array    $regUser    DEVUELVE LOS DATOS CONSULTADOS DE USUARIO
 */
function getUser($userID) {
    include 'conexion.php';
    if ($userID) {
        $sql = "SELECT id, nombre, apellido, username, tlf, correo, direccion, ciudad, estado, pais, dni FROM usuarios_confirmados WHERE id = $userID AND status = 1";
        $query = mysqli_query($link, $sql);
        $getUser = mysqli_fetch_assoc($query);
        return $getUser;
        mysqli_close($link);
    }
}
/**
 * FUNCION CONSULTA USUARIOS
 * SE CONECTA BASE DE DATOS Y EXTRAE LOS DATOS DEL USUARIO LOGEADO
 * @param   string   $userID     RECIBE EL ID DEL USUARIO
 * @return  array    $regUser    DEVUELVE LOS DATOS CONSULTADOS DE USUARIO
 */
function viweUser($userID) {
    include 'conexion.php';
    if ($userID) {
        $sql = "SELECT id, nombre, apellido, correo, username FROM usuarios_confirmados WHERE id = $userID AND status = 1";
        $query = mysqli_query($link, $sql);
        $getUser = mysqli_fetch_assoc($query);
        return $getUser;
        mysqli_close($link);
    }
}
?>
