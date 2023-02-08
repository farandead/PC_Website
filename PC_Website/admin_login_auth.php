

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

$email = $_GET['email'];
$password = $_GET['password'];

$username = stripcslashes($email);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT sno,firstname,lastname,email,password from `admin`  where email = '$email' and password = '$password' ";
$result = mysqli_query($con, $sql);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);


if ($count == 1) {

    $row = mysqli_fetch_assoc($result);
   
    $_SESSION['admin_firstname'] = $row["firstname"];
    $_SESSION['admin_lastname'] = $row["lastname"];
    $_SESSION['admin_email'] = $row["email"];
    $_SESSION['admin_password'] = $row["password"];



    include "admin_side.php";
} else {
    echo "<script>alert('Incorrect Email or Password')</script>";
    include 'admin_login.php';
}




?> 

