<?php
session_start();
$host = "localhost";
$user = "root";
$password = '';
$db_name = "muzaffar_project_database2";

$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}


$firstname = $_POST['name'];

$email = $_POST['email'];
$address = $_POST['street_address'];

$product_id = $_POST['order'];
$_SESSION['order_name'] = $firstname;




$sql = "INSERT INTO `muzaffar_project_database2`.`orders` (`sno`,`firstname`,`email`, `product_id`, `date_palaced`,`delivery_address`) VALUES (NULL, '$firstname', '$email', '$product_id', current_timestamp()	, '$address');";

if ($con->query($sql) == true) {
    
    include 'order_confirmation_page.php';
} else {
    echo "Error L: $sql <br> $con->error";
    echo "<script>alert('Something Went wrong placing your order !')</script>";
    include 'checkout_page.php';
}
$con->close();


?>
