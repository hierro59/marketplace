<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Hierro59');
define('DB_PASSWORD', 'Atunis2716.');
define('DB_NAME', 'quantlastest');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$link->query("SET NAMES 'utf8'");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>