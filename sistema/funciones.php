<?php 
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
session_start();

# Scrip para obtener la URL base del servidor
$url = "http://".$_SERVER['SERVER_NAME']."/ecommerceTest/";

define("URL", "$url");

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

if (!empty($_GET['msj'])) {
    $alert = 'msj';
    $code = $_GET['msj'];
}elseif (!empty($_GET['errno'])) {
    $alert = 'error';
    $code = $_GET['errno'];
}else{
    // Sin alertas
}

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


?>
