<?php 



$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("Connection to the database failed due to".
    mysqli_connect_error());
}
    


$title = $_POST['title'];
$img = $_POST['img'];
$storage = $_POST['storage'];
$cpu = $_POST['cpu'];
$gpu = $_POST['gpu'];
$cpu_cooling = $_POST['cpu_cooling'];
$memory = $_POST['memory'];
$price = $_POST['price'];

$img = '<img src="img/'.$img.'" alt="">';


 
$sql= "INSERT INTO `muzaffar_project_database`.`laptops` (`sno`, `title`, `img`, `storage`, `cpu`, `gpu`,`cpu_cooling`,`memory`,`price`) VALUES (NULL, '$title', '$img', '$storage', '$cpu', '$gpu', '$cpu_cooling', '$memory', '$price');";

if($con->query($sql) == true){
    echo "<script>alert('The product has been succesfully added to the database')</script>";
   include 'admin_side.php';
}
else{
    // echo "Error L: $sql <br> $con->error";
    echo "<script>alert('The Product wasn't added into the Database')</script>";
    include 'admin_side.php';
    
}
$con->close();

?>


