<?php 
/**
 * FUNCIONES DE BUSQUEDA
 * 
 * @author Félix León
 * @author Luis Santiago Reyes
 * 
 * @version 0.2.0
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
function searchProducts($link, $max) {
	if (isset($_GET['category'])) {
		$category = $_GET['category'];
		$_SESSION['category'] = $_GET['category'];  // Guardamos los datos de busqueda para poder recargar la pagina sin perder dichos datos
		if(isset($_SESSION['searchFilter'])) {
			unset($_SESSION['searchFilter']);
		}
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
		if(isset($_SESSION['searchFilter'])) {
			unset($_SESSION['searchFilter']);
		}
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
		$_SESSION['searchFilter'] = $filter;
	}else{
		if (isset($_SESSION['searchFilter'])) {
			$filter = $_SESSION['searchFilter'];
		} else {
			$filter = NULL;
		}
	}
	if(isset($_GET['pagina'])) {
		$pagina = $_GET['pagina'];
		$anexar = " LIMIT " . ($_GET['pagina'] - 1) * 2 . "," . $max;
		$_SESSION['anexar'] = $anexar;
	}else{
		if (isset($_SESSION['anexar'])) {
			$pagina = 1;
			$anexar = " LIMIT 0," . $max;
			$_SESSION['anexar'] = $anexar;
		} else {
			$pagina = 1;
			$anexar = " LIMIT 0," . $max;
			$_SESSION['anexar'] = $anexar;
		}
	}
	$params = array('category' => "$category", 'search' => "$search", 'filter' => "$filter", 'pagina' => "$anexar");
    if ($params['category'] == NULL && $params['search'] == NULL) {
		$sql = "SELECT * FROM market_producto_general WHERE status = 1";	
    } elseif ($params['category'] == TRUE && $params['search'] == NULL) { 
		$sql = "SELECT * FROM market_producto_general WHERE cat = '$params[category]' AND status = 1";
    } else {
		$sql = "SELECT * FROM market_producto_general WHERE status = 1";
    	$sql .= " AND name LIKE '%" . $params['search'] . "%'";
    	$sql .= " OR descripcion LIKE '%" . $params['search'] . "%'";
    }
	if($params['filter'] != NULL){
		$sql .= $params['filter'];
	}
	$preQuery = mysqli_query($link, $sql);
	$_SESSION['maxrows'] = $preQuery->num_rows;
	$sql .= $params['pagina'];
	$query = mysqli_query($link, $sql);
	return $query;
}
function viewAllProducts($link) {
   $sql = "SELECT * FROM market_producto_general WHERE status = 1";
   $query = mysqli_query($link, $sql);
   return $query;
}
function viweNavBar($link, $cat) {
	$sql2 = "SELECT * FROM market_producto_general WHERE cat = $cat AND status = 1";
   $query2 = mysqli_query($link, $sql2);
   return $query2;
}
 ?>