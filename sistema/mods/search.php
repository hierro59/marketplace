<?php 
/**
 * FUNCIONES DE BUSQUEDA
 * 
 * @author Félix León
 * @author Luis Santiago Reyes
 * 
 * @version 0.1.1
 */

if (isset($_GET['category'])) {
	$category = $_GET['category'];
	$_SESSION['category'] = $_GET['category'];  // Guardamos los datos de busqueda para poder recargar la pagina sin perder dichos datos
}else{
	if (isset($_SESSION['category'])) {
		$category = $_SESSION['category'];
	} else {
		$category = NULL;
	}
}	
if (isset($_GET['search'])) {
	$search = $_GET['search'];
	$_SESSION['search'] = $_GET['search']; // Guardamos los datos de busqueda para poder recargar la pagina sin perder dichos datos
}else{
	if (isset($_SESSION['search'])) {
		$search = $_SESSION['search'];
	} else {
		$search = NULL;
	}
}

if(isset($_GET['searchFilter'])) {
	switch ($_GET['searchFilter']) {
		case 'last':
			$filter = " ORDER BY id DESC";
			break;
		case 'expensive':
			$filter = " ORDER BY precio DESC";
			break;
		case 'cheap':
			$filter = " ORDER BY precio ASC";
			break;
		default:
			$filter = NULL;
			break;
	}
}else{
	$filter = NULL;
}

$params = array('category' => "$category", 'search' => "$search", 'filter' => "$filter");

function searchProducts($link, $params) {
    if ($params['category'] == NULL && $params['search'] == NULL) {
		$sql = "SELECT * FROM market_producto_general WHERE status = 1";
		if($params['filter'] != NULL){
			$sql .= $params['filter'];
		}
    } elseif ($params['category'] == TRUE && $params['search'] == NULL) {
	    $sql = "SELECT * FROM market_producto_general WHERE cat = '$params[category]' AND status = 1";
		if($params['filter'] != NULL){
			$sql .= $params['filter'];
		}
   } else {
    	$sql = "SELECT * FROM market_producto_general WHERE status = 1";
    	$sql .= " AND name LIKE '%" . $params['search'] . "%'";
    	$sql .= " OR descripcion LIKE '%" . $params['search'] . "%'";
		if($params['filter'] != NULL){
			$sql .= $params['filter'];
		}
   }
   $query = mysqli_query($link, $sql);
	return $query;
	mysqli_close($link);
}

function viewAllProducts($link) {
    	$sql = "SELECT * FROM market_producto_general WHERE status = 1";
    	$query = mysqli_query($link, $sql);
    	return $query;
   mysqli_close($link);
}
 ?>