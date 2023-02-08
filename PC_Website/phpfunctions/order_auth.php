
<?php



$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Connection to the database failed due to" .
        mysqli_connect_error());
}


$moviename= $_POST['moviename'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$city = $_POST['city'];
$state = $_POST['state'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$cname = $_POST['cardname'];
$ccnum = $_POST['cardnumber'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];





$sql = "INSERT INTO `movieticketdatabse`.`ticket_booking` ( `movie-name`,`firstname`, `email`, `address`, `city`, `state`, `zip`, `cname`, `ccnum`, `expmonth`, `expyear`, `cvv`) VALUES ('$moviename','$firstname', '$email', '$address', '$city', '$state', '$zip', '$cname', '$ccnum', '$expmonth', '$expyear', '$cvv');";

if ($con->query($sql) == true) {
    
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $cname = $_POST['cardname'];
    $ccnum = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];
    include 'orderconfirmationPage.php';
} else {
    echo "Error L: $sql <br> $con->error";
}


?>
