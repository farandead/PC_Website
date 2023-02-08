<?php

session_start();
error_reporting(E_ALL ^ E_NOTICE);
$host = "localhost";
$user = "root";
$password = '';
$db_name = "muzaffar_project_database2";

$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

$remove_product = $_GET['product-remove'];





$sql = "DELETE from `laptops`  where sno = '$remove_product'";

$result = mysqli_query($con, $sql);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

echo "<script>alert('The product has been succesfully removed from the database')</script>";

include 'admin_side.php';




?> 