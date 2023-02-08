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
    $product = $_GET['product-search'];
    
    $product = stripcslashes($product);       
    $product = mysqli_real_escape_string($con, $product);        
    $sql = "SELECT * from `laptops` where title = '$product' ";
    $result = mysqli_query($con, $sql);  
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);     
        if($count == 1){  
            
            $row = mysqli_fetch_assoc($result);
            $_SESSION["sno"] =  $row["sno"];
            $_SESSION["title"] =  $row["title"];
            $_SESSION["img"] =  $row["img"];
            $_SESSION["cpu"] =  $row["cpu"];
            $_SESSION["storage"] =  $row["storage"];
            $_SESSION["gpu"] =  $row["gpu"];
            $_SESSION["cpu_cooling"] =  $row["cpu_cooling"];
            $_SESSION["memory"] =  $row["memory"];
            $_SESSION["price"] =  $row["price"];
            
         
            include 'product_page.php';     
        }  
        else{  
            echo "<h1> 404 NOT FOUND</h1>";  
        } 
?>

