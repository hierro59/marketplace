<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Include config file
require_once "../sistema/conexion.php";

$recaptcha_secret = '6LfT6OsZAAAAABX9xV5mpsxF0ylNYBdWwuJq7v9M';
/*$recaptcha_response = $_POST['recaptcha_response'];
$url = 'https://www.google.com/recaptcha/api/siteverify';

$data = array( 'secret' => $recaptcha_secret, 'response' => $recaptcha_response, 'remoteip' => $_SERVER['REMOTE_ADDR'] );
$curlConfig = array( CURLOPT_URL => $url, CURLOPT_POST => true, CURLOPT_RETURNTRANSFER => true, CURLOPT_POSTFIELDS => $data );
$ch = curl_init();
curl_setopt_array($ch, $curlConfig);
$response = curl_exec($ch);
curl_close($ch);

$jsonResponse = json_decode($response);*/

//if ($jsonResponse->success === true) {

    // Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese su usuario.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingrese su contraseña.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, correo, pass FROM usuarios_confirmados WHERE correo = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == '1'){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                   
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: ../?msg=003");
                        }else{
                            // Display an error message if password is not valid
                            header("location: ../?err=003");
                        }
                    }
                }else{
                    // Display an error message if username doesn't exist
                    header("location: ../sign-up?err=004");
                    //echo $username_err = "No existe cuenta registrada con ese nombre de usuario.";
                }
            }else{
                header("location: ../?err=999");
            }
        }
        // Close statement
        //header("location: ../?err=002");
        mysqli_stmt_close($stmt);
    }
    // Close connection
    mysqli_close($link);
}
?>