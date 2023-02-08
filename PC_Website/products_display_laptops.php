<?php 
    include 'header.php'
?>

<head>
    <link rel="stylesheet" href="css/producs_display_page.css">
</head>

<div class="main-devices-display-container">
    <div class="main-devices-title">
        GAMING Laptops
    </div>
    <div class="main-devices-sub-container">
    
    <form action="product_loading_laptop.php" method="get">
        <div class="main-devices-display-container">
            <div class="main-devices-sub-container">
                <?php
                $host = "localhost";
                $user = "root";
                $password = '';
                $db_name = "muzaffar_project_database2";

                $con = mysqli_connect($host, $user, $password, $db_name);
                if (mysqli_connect_errno()) {
                    die("Failed to connect with MySQL: " . mysqli_connect_error());
                }
                $sql = "SELECT * from `laptops`";
                $result = mysqli_query($con, $sql);
                // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);


                if ($count >= 1) {
                    for ($x = 1; $x <= $count; $x++) {
                        $row = mysqli_fetch_assoc($result);
                        $sno =  $row["sno"];
                        $title =  $row["title"];
                        $img =  $row["img"];
                        $storage =  $row["storage"];
                        $cpu =  $row["cpu"];
                        $graphicscard =  $row["gpu"];
                        $cpucooling =  $row["cpu_cooling"];
                        $memory =  $row["memory"];
                        $price =  $row["price"];

                        echo '
                        <button name="product" value="' . $sno . '" style=" background-color: rgba(255, 255, 255, 0);border: none;">
                        <div class="main-device-container" style:" height: 30vmax;overflow: hidden;">
                            <div class="main-device-img">
                                ' . $img . '
                            </div>
                            <div class="main-device-title">
                                <p>' . $title . '</p>
                            </div>
                            <div class="main-device-description">
                            ' . $cpu . '
                                <br>
                                ' . $memory . '
                                <br>
                                
                                ' . $storage . '
                                <br>
                                3 Year Warranty (1yr parts 3yr labour)
                                <br>
                            </div>
                            <div class="main-device-price">
                                <h3>£' . $price . '</h3>
                            </div>
            
                        </div>
                        </button>';
                    }
                } else {
                    echo "<h1> 404 NOT FOUND</h1>";
                }






                ?>
    </form>
       
    </div>

</div>

<?php 
    include 'footer.php'
?>