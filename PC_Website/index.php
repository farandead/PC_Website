<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Website - For your software and hardware requirments</title>
    <link rel="stylesheet" href="css/index.css">
    <script>
        document.getElementById("search-button").value='2';
        
    </script>
    <style>
        .search-engine{
            display: flex;
            align-items: center;
            align-content: center;
            justify-items: center;
            justify-content: center;
            margin-top: 1vmax;
            margin-bottom:1vmax ;

        }
        .search-engine input{
            height: 2vmax;
            width: 20vmax;
        }
        .search-engine button{
            height: 2.4vmax;
            margin-left: 3vmax;
            width: 8vmax;
            background-color: #ff7029;
            border: none;
            color: white;
            border-radius: 5px;
           
        }
    </style>
</head>

<body>

    <?php
    include 'header.php'
    ?>
         <form action="search-engine.php" method="get">
     <div class="search-engine">
        <input type="text" value="" name="product-search" list="input" placeholder="Search product">
        <datalist id="input" name="" >
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

                    echo '<option  value="' . $title . '">' . $title . '</option> ';
                    
                }
                echo "";
            } else {
                echo "<h1> 404 NOT FOUND</h1>";
            }

            ?>
            
            
        </datalist>
        
        <button id="search-button" >Search</button>
    </div>
    
            
    
    </form> 

    <div class="payment-banner">
        <div class="payment-banner-sub">
            <div class="payment-banner-sub-img">
                <img src="img/banner_img_1.svg" alt="">
            </div>
            <div class="payment-banner-sub-description">
                <p>Express Next Day Priority Delivery for <strong>5.95 £</strong> </p>
            </div>

        </div>
        <div class="payment-banner-sub">
            <div class="payment-banner-sub-img">
                <img src="img/banner_img_2.svg" alt="" style="width:40px;margin-right:30px;">
            </div>
            <div class="payment-banner-sub-description">
                <p>Enjoy 0% interest for <strong>4 months</strong> for purchases over 99£</p>
            </div>
        </div>
        <div class="payment-banner-sub">
            <div class="payment-banner-sub-img">
                <img src="img/banner_img_3.svg" alt="">
            </div>
            <div class="payment-banner-sub-description">
                <p>Never beaten on the <strong>Price offer offered by us</strong> </p>
            </div>
        </div>
    </div>
    <div class="main-banner">
        <img src="img/ebuyer-bf22-splash.jpg" alt="">

    </div>
    <div class="devices-select-banner">
        <div class="devices-container">
            <a href="products_display_laptops.php"><img style="width:3.5vmax ;" src="img/homepage-icon--gaming-laptop-white.svg" alt="">
            </a>
            <p>Gaming Laptops</p>

        </div>
        <div class="devices-container">
            <a href="products_display_desktops.php"><img src="img/homepage-icon--gaming-desktop-white.svg" alt=""></a>
            <p>Gaming Desktops</p>

        </div>
        <div class="devices-container">
            <a href="#"><img style="width:3.5vmax ;" src="img/homepage-icon--laptop-white.svg" alt=""></a>
            <p>Laptops</p>

        </div>

        <br></a>

    </div>
   



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
    <form action="product_loading_desktop.php" method="get">
        <?php
        $host = "localhost";
        $user = "root";
        $password = '';
        $db_name = "muzaffar_project_database2";

        $con = mysqli_connect($host, $user, $password, $db_name);
        if (mysqli_connect_errno()) {
            die("Failed to connect with MySQL: " . mysqli_connect_error());
        }
        $sql = "SELECT * from `desktops`";
        $result = mysqli_query($con, $sql);
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);


        if ($count >= 1) {
            for ($x = 1; $x <= $count; $x++) {
                $row = mysqli_fetch_assoc($result);
                $sno = $row["sno"];
                $title =  $row["title"];
                $img =  $row["img"];
                $case_body =  $row["case_body"];
                $cpu =  $row["cpu"];
                $gpu =  $row["gpu"];
                $cpu_ooling =  $row["cpu_cooling"];
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
                        <button>';
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
</body>

</html>