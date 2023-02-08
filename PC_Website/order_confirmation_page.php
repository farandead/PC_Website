<?php
include 'header.php'
?>

<head>
    <link rel="stylesheet" href="css/order-confimation.css">
</head>

<script>
    window.onload = setInterval(clock, 1000);

    function clock() {
        var d = new Date();
        var date = d.getDate();
        var year = d.getFullYear();
        var month = d.getMonth();
        var monthArr = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        month = monthArr[month];
        document.getElementById("date").innerHTML = date + " " + month + ", " + year;
    }
</script>


<div class="order-confirmation-container">
    <div class="order-confirmation-sub-container order-confirmation-sub-container-img">
        <img src="img/shipping-icon.svg" alt="">
    </div>
    <div class="order-confirmation-sub-container order-confirmation-sub-container-paragraph">
        <p><strong> Hey <span> <?php
        if (isset($_SESSION['order_name'])) {
          echo $_SESSION['order_name'];
        } else {
          echo "notFound";
        } ?></span> ! </strong>Your order has been placed succesfully !</p>
        <p><strong>Product:</strong><span id="product_name"> <?php
        if (isset($_SESSION['title'])) {
          echo $_SESSION['title'];
        } else {
          echo "notFound";
        } ?></span>.</p>
        <p><strong>Placed on: </strong><span id="date"></span> </p>


    </div>


</div>



<?php
include 'footer.php'
?>