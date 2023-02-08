<?php
include 'header.php';
echo $_SESSION['cat-poduct']
?>

<head>
    <link rel="stylesheet" href="css/product_page.css">
    <script src="js/date.js"></script>
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

    function cart_function(){
        sessionStorage.setItem("cat-poduct",  document.querySelector("#cart-session-create").value);
        let personName = sessionStorage.getItem("cat-poduct");
        document.getElementById("demo").innerHTML = personName;
        console.log(sessionStorage.length) 
        

    }
</script>

<div class="product-description-container">
    <div class="product-description-sub-container">
        <div class="product-main-sub-container product-main-sub-container-img">
            <?php
            if (isset($_SESSION['img'])) {
                echo $_SESSION['img'];
            } else {
                echo "notFound";
            } ?>

            Please note: System images are an example system highlighting your chosen case. Internal components and
            lighting are entirely dependent on the specification of the components selected and may not be as displayed.
            If you have any queries regarding the appearance of your configuration, please reach out to our sales team
            to discuss.
        </div>
        <div class="product-main-sub-container">
            <div class="product-title"><?php
                                        if (isset($_SESSION['title'])) {
                                            echo $_SESSION['title'];
                                        } else {
                                            echo "notFound";
                                        } ?> </div>
            <div class="product-description">
                <ul>
                    <li><strong><?php
                                if (isset($_SESSION['storage'])) {
                                    echo "Storage:";
                                } else {
                                    echo "Case:";
                                } ?></strong><?php
                                                if (isset($_SESSION['storage'])) {
                                                    echo $_SESSION['storage'];
                                                } else {
                                                    echo "notFound";
                                                } ?></li>
                    <li><strong>CPU Processor:</strong> <?php
                                                        if (isset($_SESSION['cpu'])) {
                                                            echo $_SESSION['cpu'];
                                                        } else {
                                                            echo "notFound";
                                                        } ?></li>
                    <li><strong>Graphics Card(GPU):</strong><?php
                                                            if (isset($_SESSION['gpu'])) {
                                                                echo $_SESSION['gpu'];
                                                            } else {
                                                                echo "notFound";
                                                            } ?></li>
                    <li><strong>CPU Cooling:</strong><?php
                                                        if (isset($_SESSION['cpu_cooling'])) {
                                                            echo $_SESSION['cpu_cooling'];
                                                        } else {
                                                            echo "notFound";
                                                        } ?></li>
                    <li><strong>Memory:</strong><?php
                                                if (isset($_SESSION['memory'])) {
                                                    echo $_SESSION['memory'];
                                                } else {
                                                    echo "notFound";
                                                } ?></li>
                </ul>
            </div>
        </div>
    </div>
    <form action="checkout_page.php" method="get">
        <div class="price-banner-container">
            <div class="price-banner-sub-container">
                <div class="total-price-container">
                    <ul>
                        <li>Subtotal:</li>
                        <li>£<span id="product-price"><?php
                                                        if (isset($_SESSION['price'])) {
                                                            echo $_SESSION['price'];
                                                        } else {
                                                            echo "notFound";
                                                        } ?></span>ex. VAT</li>
                    </ul>
                </div>
                <div class="total-finance-container">
                    <ul>
                        <li>Finance options from £47.24/month</li>
                        <li> [Low Cost Finance over 36 months]</li>
                    </ul>
                </div>
                <div class="total-Shipping-container">
                    <ul>
                        <li>Delivery: <strong>Free Shipping (UK Mainland)</strong></li>
                        <li>Estimated ship date: <strong id="date"></li>
                    </ul>
                </div>
            </div>

            <div class="price-banner-sub-container price-banner-sub-container-button ">
                <button name="product" value=" <?php
                                                if (isset($_SESSION['sno'])) {
                                                    echo $_SESSION['sno'];
                                                } else {
                                                    echo "notFound";
                                                } ?>">BUY NOW</button>
            </form>
           
                

</div>


<h2 id="demo"></h2>
        </div>
</div>

<button name="addtocart"  onclick="cart_function()"id="cart-session-create" value="<?php
                                                if (isset($_SESSION['sno'])) {
                                                    echo $_SESSION['sno'];
                                                } else {
                                                    echo "notFound";
                                                } ?>">Add to Cart</button>

<?php
include 'footer.php'
?>