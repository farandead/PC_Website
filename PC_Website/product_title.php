<?php 
 $sql_order = "SELECT * from `orders`  where email = 'farandeadz@gmail.com'";
            
 $result_order = mysqli_query($con, $sql_order);
 // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
 $count_order = mysqli_num_rows($result_order);

 if ($count_order > 0) {
    //  $produt_id = $row_order["product_id"];
    //  $sql_product_name = "SELECT * from `laptops`,`desktops`  where sno = '$produt_id'";
    //  $product_name_result = mysqli_query($con, $sql_product_name);
    //  // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    //  $produt_name_order = mysqli_num_rows($product_name_result);
    //  $row_product = mysqli_fetch_assoc($result_order);
   
     for ($x = 1; $x <= $count_order; $x++) {
         $row_order = mysqli_fetch_assoc($result_order);

           $produt_id = $row_order["product_id"];
         $sql_product_name = "SELECT * from `laptops`,`desktops`  where sno = '$produt_id'";
        $product_name_result = mysqli_query($con, $sql_product_name);
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $produt_name_order = mysqli_num_rows($product_name_result);
        $row_product_data = mysqli_fetch_assoc($product_name_result);
        
        
         $row_product_data["title"];
         $row_order["date_palaced"];
         $row_order["delivery_address"];
         echo  "
         <tr>
         <td>" . $row_product_data["title"]; "</td>
         <td>" . $row_order['date_palaced'] . "</td>
         <td>" . $row_order['delivery_address'] . "</td>
         </tr>
         ";
     }
 } else {
     echo "";
 }
