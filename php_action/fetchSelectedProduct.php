<?php

require_once 'core.php';

$productsId = $_POST['productsId'];

$sql = "SELECT * FROM products WHERE productID = $productsId";
$result = $connect->query($sql);

if($result->num_rows > 0) {
 $row = $result->fetch_array();
} // if num_rows

$connect->close();

echo json_encode($row);
