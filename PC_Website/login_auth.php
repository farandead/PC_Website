

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

$sql = "SELECT sno,firstname,lastname,email,password,address from `users`  where email = '$email' and password = '$password' ";
$result = mysqli_query($con, $sql);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);


if ($count == 1) {

    $row = mysqli_fetch_assoc($result);
   
    $_SESSION['firstname'] = $row["firstname"];
    $_SESSION['lastname'] = $row["lastname"];
    $_SESSION['email'] = $row["email"];
    $_SESSION['password'] = $row["password"];
    $_SESSION['address'] = $row["address"];
    $_SESSION['customer'] = $row["sno"];

    $customer =  $_SESSION['email'];


    // $sql_order = "SELECT sno,product_id,csutomer_id,date_palaced,delivery_address from `orders`  where csutomer_id = '$customer'";
    // $result_order = mysqli_query($con, $sql_order);
    // // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    // $count_order = mysqli_num_rows($result_order);

   
    // for ($x = 1; $x <= $count_order; $x++) {
    //     echo "The number is: $x <br>";
    //     $row_order = mysqli_fetch_assoc($result_order);
    //     $_SESSION[$x.'product_id'] = $row_order["product_id"];
    //     $_SESSION[$x.'dateplaced'] = $row_order["date_palaced"];
    //     $_SESSION[$x.'delivery_address'] = $row_order["delivery_address"];

        
    // }


    // if ($count_order >= 1) {


    //     $row_order = mysqli_fetch_assoc($result_order);
        // $_SESSION['productid'] = $row_order["product_id"];
        // $_SESSION['dateplaced'] = $row_order["date_palaced"];
        // $_SESSION['delivery_address'] = $row_order["delivery_address"];

    //     echo $count;
    // }




    include "userprofile.php";
} else {
    echo "<script>alert('Incorrect Email or Password')</script>";
    include 'login_page.php';
}




?> 

