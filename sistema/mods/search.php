<?php 

if (isset($_GET['category'])) {
	$category = $_GET['category'];
}else{
	$category = NULL;
}	

if (isset($_GET['search'])) {
	$search = $_GET['search'];
}else{
	$search = NULL;
}

$params = array('category' => "$category", 'search' => "$search");

function searchProducts($link, $params) {
    if ($params['category'] == NULL && $params['search'] == NULL) {
    	$sql = "SELECT * FROM market_producto_general WHERE status = 1";
    	$query = mysqli_query($link, $sql);
    	return $query;
    } elseif ($params['category'] == TRUE && $params['search'] == NULL) {
	    $sql = "SELECT * FROM market_producto_general WHERE cat = '$params[category]' AND status = 1";
	    $query = mysqli_query($link, $sql);
	    return $query;
    } else {
    	$sql = "SELECT * FROM market_producto_general WHERE status = 1";
    	$sql .= " AND name LIKE '%" . $_GET['search'] . "%'";
    	$sql .= " OR descripcion LIKE '%" . $_GET['search'] . "%'";
	    $query = mysqli_query($link, $sql);
	    return $query;
    }
   mysqli_close($link);
}

function viewAllProducts($link) {
    	$sql = "SELECT * FROM market_producto_general WHERE status = 1";
    	$query = mysqli_query($link, $sql);
    	return $query;
   mysqli_close($link);
}
 ?>