<?php ?>

<head>
    <link rel="stylesheet" href="css/admin_index.css">
    <script src="js/window-admin-chang.js"></script>
</head>

<div class="admin-side-main-container">
    <div class="admin-side-sub-container admin-side-sub-container-buttons">
        <div class="admin-control-button-container">

            <Button onclick="changeToOrders()">ORDERS</Button>
        </div>
        <div class="admin-control-button-container">
            <button onclick="changeToCustomers()">Customers</button>
        </div>
        <div class="admin-control-button-container">
            <button onclick="changeToProducts()">Poducts</button>
        </div>
        <div class="admin-control-button-container">
            <button onclick="changeToAddProducts()">Add Poducts</button>
        </div>
        <div class="admin-control-button-container">
            <button onclick="changeToRemovProducts()">Remove Products</button>
        </div>
        <div class="admin-control-button-container">
            <a href="admin_log_out.php"> <button onclick="return confirm('Do you really want to log out?');">LOG OUT</button></a>
          
        </div>
    </div>
    <div class="admin-side-sub-container admin-side-sub-container-main-window">
        <div class="main-welcome-heading">
            <p>Hey <span><?php 
            if (isset($_SESSION['admin_firstname'])) {
                echo $_SESSION['admin_firstname'];
            } else {
                echo "notFound";
            } 
            
            
            ?></span> </p>
            <p>Welcome to the admin side of <span id="pc-geeks">PC GEEKS</span></p>
        </div>

        <div class="main-orders-window" id="main-orders-window-1" style="display:none">
            <center>CUSTOMER ORDERS</center>
            <table>
                <tr>
                    <th>Customer Name </th>
                    <th>Email</th>
                    <th>Product ID</th>
                    <th>Date</th>
                    <th>Address</th>
                </tr>
                <?php
                $host = "localhost";
                $user = "root";
                $password = '';
                $db_name = "muzaffar_project_database2";

                $con = mysqli_connect($host, $user, $password, $db_name);
                if (mysqli_connect_errno()) {
                    die("Failed to connect with MySQL: " . mysqli_connect_error());
                }

                $sql_order = "SELECT * from `orders` ";

                $result_order = mysqli_query($con, $sql_order);
                // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count_order = mysqli_num_rows($result_order);

                if ($count_order > 0) {


                    for ($x = 1; $x <= $count_order; $x++) {
                        $row_order = mysqli_fetch_assoc($result_order);





                        $row_order["firstname"];
                        $row_order["email"];
                        $row_order["product_id"];
                        $row_order["date_palaced"];
                        $row_order["delivery_address"];
                        echo  "
                             <tr>
                             <td>" . $row_order["firstname"] . "</td>
                             <td>" . $row_order['email'] . "</td>
                             <td>" . $row_order['product_id'] . "</td>
                             <td>" . $row_order['date_palaced'] . "</td>
                             <td>" . $row_order['delivery_address'] . "</td>
                             </tr>
                             ";


                        // $row["title"];
                        // $row_order["date_palaced"];
                        // $row_order["delivery_address"];
                        // echo  "
                        // <tr>
                        // <td>" . $row["title"] . "</td>
                        // <td>" . $row_order['date_palaced'] . "</td>
                        // <td>" . $row_order['delivery_address'] . "</td>
                        // </tr>
                        // ";
                    }
                } else {
                    echo "";
                }  ?>









            </table>
        </div>
        <div class="main-customer-window" style="display:none ;">

            <center>CUSTOMER</center>
            <table>
                <tr>
                    <th>Firstname </th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>

                <?php
                $host = "localhost";
                $user = "root";
                $password = '';
                $db_name = "muzaffar_project_database2";

                $con = mysqli_connect($host, $user, $password, $db_name);
                if (mysqli_connect_errno()) {
                    die("Failed to connect with MySQL: " . mysqli_connect_error());
                }

                $sql_order = "SELECT * from `users` ";

                $result_order = mysqli_query($con, $sql_order);
                // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count_order = mysqli_num_rows($result_order);

                if ($count_order > 0) {


                    for ($x = 1; $x <= $count_order; $x++) {
                        $row_order = mysqli_fetch_assoc($result_order);





                        $row_order["firstname"];
                        $row_order["lastname"];
                        $row_order["email"];
                        $row_order["address"];
                        echo  "
                             <tr>
                             <td>" . $row_order["firstname"] . "</td>
                             <td>" . $row_order['lastname'] . "</td>
                             <td>" . $row_order['email'] . "</td>
                             <td>" . $row_order['address'] . "</td>
                         
                             </tr>
                             ";


                        // $row["title"];
                        // $row_order["date_palaced"];
                        // $row_order["delivery_address"];
                        // echo  "
                        // <tr>
                        // <td>" . $row["title"] . "</td>
                        // <td>" . $row_order['date_palaced'] . "</td>
                        // <td>" . $row_order['delivery_address'] . "</td>
                        // </tr>
                        // ";
                    }
                } else {
                    echo "";
                }  ?>







            </table>



        </div>
        <div class="main-product-window" style="display:none ;">

            <center style="border:none ;">Products</center>
            <center>
                <p>LAPTOPS</p>
            </center>
            <table>
                <tr>
                    <th>Product Code </th>
                    <th>Title</th>
                    <th>CPU</th>
                    <th>Price</th>
                </tr>
                <?php
                $host = "localhost";
                $user = "root";
                $password = '';
                $db_name = "muzaffar_project_database2";

                $con = mysqli_connect($host, $user, $password, $db_name);
                if (mysqli_connect_errno()) {
                    die("Failed to connect with MySQL: " . mysqli_connect_error());
                }

                $sql_order = "SELECT * from `laptops` ";

                $result_order = mysqli_query($con, $sql_order);
                // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count_order = mysqli_num_rows($result_order);

                if ($count_order > 0) {


                    for ($x = 1; $x <= $count_order; $x++) {
                        $row_order = mysqli_fetch_assoc($result_order);





                        $row_order["sno"];
                        $row_order["title"];
                        $row_order["cpu"];
                        $row_order["price"];
                        echo  "
                             <tr>
                             <td>" . $row_order["sno"] . "</td>
                             <td>" . $row_order['title'] . "</td>
                             <td>" . $row_order['cpu'] . "</td>
                             <td>" . $row_order['price'] . "</td>
                         
                             </tr>
                             ";


                        // $row["title"];
                        // $row_order["date_palaced"];
                        // $row_order["delivery_address"];
                        // echo  "
                        // <tr>
                        // <td>" . $row["title"] . "</td>
                        // <td>" . $row_order['date_palaced'] . "</td>
                        // <td>" . $row_order['delivery_address'] . "</td>
                        // </tr>
                        // ";
                    }
                } else {
                    echo "";
                }  ?>







            </table>
            <center>
                <p>DESKTOPS</p>
            </center>
            <table>
                <?php
                $host = "localhost";
                $user = "root";
                $password = '';
                $db_name = "muzaffar_project_database2";

                $con = mysqli_connect($host, $user, $password, $db_name);
                if (mysqli_connect_errno()) {
                    die("Failed to connect with MySQL: " . mysqli_connect_error());
                }

                $sql_order = "SELECT * from `desktops` ";

                $result_order = mysqli_query($con, $sql_order);
                // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count_order = mysqli_num_rows($result_order);

                if ($count_order > 0) {


                    for ($x = 1; $x <= $count_order; $x++) {
                        $row_order = mysqli_fetch_assoc($result_order);





                        $row_order["sno"];
                        $row_order["title"];
                        $row_order["cpu"];
                        $row_order["price"];
                        echo  "
                             <tr>
                             <td>" . $row_order["sno"] . "</td>
                             <td>" . $row_order['title'] . "</td>
                             <td>" . $row_order['cpu'] . "</td>
                             <td>" . $row_order['price'] . "</td>
                         
                             </tr>
                             ";


                        // $row["title"];
                        // $row_order["date_palaced"];
                        // $row_order["delivery_address"];
                        // echo  "
                        // <tr>
                        // <td>" . $row["title"] . "</td>
                        // <td>" . $row_order['date_palaced'] . "</td>
                        // <td>" . $row_order['delivery_address'] . "</td>
                        // </tr>
                        // ";
                    }
                } else {
                    echo "";
                }  ?>




            </table>



        </div>
        <img src="img/laptops/" alt="">
        <div class="main-add-products-window" onsubmit="return confirm('Do you really want to add the product?');" style="display:none ;">
            <form action="admin_add_product_process.php" method="POST">
                <div class="input-container">
                    <p>Title</p>
                    <input name="title" type="text" placeholder="Enter Title" required>
                </div>
                <div class="input-container">
                    <p>Image(Path)</p>
                    <input name="img" type="text" placeholder="Enter Path" required>
                </div>
                <div class="input-container">
                    <p>Storage</p>
                    <input name="storage" type="text" placeholder="Enter Storage" required>
                </div>
                <div class="input-container">
                    <p>CPU</p>
                    <input name="cpu" type="text" placeholder="Enter Central Processing Unit" required>
                </div>
                <div class="input-container">
                    <p>GPU</p>
                    <input name="gpu" type="text" placeholder="Enter Graphics Processing Unit" required>
                </div>
                <div class="input-container">
                    <p>CPU Cooling</p>
                    <input name="cpu_cooling" type="text" placeholder="Enter CPU Cooling" required>
                </div>
                <div class="input-container">
                    <p>Memory</p>
                    <input name="memory" type="text" placeholder="Enter Memory" required>
                </div>
                <div class="input-container">
                    <p>Price</p>
                    <input name="price" type="text" placeholder="Enter Price" required>
                </div>
                <button id="add-product-button">ADD PRODUCT</button>

            </form>
        </div>
       

        <form action="admin-remove-product.php" onsubmit="return confirm('Do you really want to remove the product?');" method="GET">
            <div class="remove-product-window" style="display:none ;">
                <center>
                    <p>LAPTOPS</p>
                </center>
                <table>
                    <tr>
                        <th>Product Code </th>
                        <th>Title</th>
                        <th>CPU</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $host = "localhost";
                    $user = "root";
                    $password = '';
                    $db_name = "muzaffar_project_database2";

                    $con = mysqli_connect($host, $user, $password, $db_name);
                    if (mysqli_connect_errno()) {
                        die("Failed to connect with MySQL: " . mysqli_connect_error());
                    }

                    $sql_order = "SELECT * from `laptops` ";

                    $result_order = mysqli_query($con, $sql_order);
                    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                    $count_order = mysqli_num_rows($result_order);

                    if ($count_order > 0) {


                        for ($x = 1; $x <= $count_order; $x++) {
                            $row_order = mysqli_fetch_assoc($result_order);
                            $row_order["sno"];
                            $row_order["title"];
                            $row_order["cpu"];
                            $row_order["price"];
                            echo  "
                             <tr>
                             <td>" . $row_order["sno"] . "</td>
                             <td>" . $row_order['title'] . "</td>
                             <td>" . $row_order['cpu'] . "</td>
                             <td>" . $row_order['price'] . "</td>
                             <td><button name='product-remove' value='" . $row_order['sno'] . "' class='remove-button-admin'>Remove</button></td>
                         
                             </tr>
                             ";


                            // $row["title"];
                            // $row_order["date_palaced"];
                            // $row_order["delivery_address"];
                            // echo  "
                            // <tr>
                            // <td>" . $row["title"] . "</td>
                            // <td>" . $row_order['date_palaced'] . "</td>
                            // <td>" . $row_order['delivery_address'] . "</td>
                            // </tr>
                            // ";
                        }
                    } else {
                        echo "";
                    }  ?>

                    




                </table>
                <center>
                    <p>DESKTOPS</p>
                </center>
                <table>
                    <tr>
                        <th>Product Code </th>
                        <th>Title</th>
                        <th>CPU</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    $host = "localhost";
                    $user = "root";
                    $password = '';
                    $db_name = "muzaffar_project_database2";

                    $con = mysqli_connect($host, $user, $password, $db_name);
                    if (mysqli_connect_errno()) {
                        die("Failed to connect with MySQL: " . mysqli_connect_error());
                    }

                    $sql_order = "SELECT * from `laptops` ";

                    $result_order = mysqli_query($con, $sql_order);
                    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                    $count_order = mysqli_num_rows($result_order);

                    if ($count_order > 0) {


                        for ($x = 1; $x <= $count_order; $x++) {
                            $row_order = mysqli_fetch_assoc($result_order);
                            $row_order["sno"];
                            $row_order["title"];
                            $row_order["cpu"];
                            $row_order["price"];
                            echo  "
                             <tr>
                             <td>" . $row_order["sno"] . "</td>
                             <td>" . $row_order['title'] . "</td>
                             <td>" . $row_order['cpu'] . "</td>
                             <td>" . $row_order['price'] . "</td>
                             <td><button value='" . $row_order['sno'] . "' class='remove-button-admin'>Remove</button></td>
                         
                             </tr>
                             ";


                            // $row["title"];
                            // $row_order["date_palaced"];
                            // $row_order["delivery_address"];
                            // echo  "
                            // <tr>
                            // <td>" . $row["title"] . "</td>
                            // <td>" . $row_order['date_palaced'] . "</td>
                            // <td>" . $row_order['delivery_address'] . "</td>
                            // </tr>
                            // ";
                        }
                    } else {
                        echo "";
                    }  ?>
                    <tr>
                        <td>1</td>
                        <td>MSI RAIDER GE66 12UH-280UK GAMING LAPTOP</td>
                        <td>Intel® Core™ i7-12700H Processor</td>
                        <td>1891 </td>
                        <td><button class="remove-button-admin">Remove</button> </td>
                    </tr>





                </table>

            </div>
        </form>
    </div>
</div>


