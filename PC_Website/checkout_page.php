<?php
include 'header.php';



?>

<!-- Font Awesome Link -->

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/checkout_page.css">
</head>

<div class="modal clearfix">
  <div class="modal-product">
    <div class="product">

      <!-- Slideshow container -->
      <div class="product-slideshow">

        <?php
        if (isset($_SESSION['img'])) {
          echo $_SESSION['img'];
        } else {
          echo "notFound";
        } ?>

      </div>

      <h1 class="product-name">
        <?php
        if (isset($_SESSION['title'])) {
          echo $_SESSION['title'];
        } else {
          echo "notFound";
        } ?>
      </h1>
      <center><?php
              echo  $_SESSION["cpu"]


              ?></center>
      <center><?php
              echo  $_SESSION["gpu"]


              ?></center>

      <center><?php
              echo  $_SESSION["memory"]


              ?></center>



      <p class="product-price">
        <?php
        if (isset($_SESSION['price'])) {
          echo $_SESSION['price'];
        } else {
          echo "notFound";
        } ?>£
      </p>


    </div>

    <div class="round-shape"></div>
  </div>
  <div class="modal-info">
    <div class="info">
      <h2>Payment Information</h2>
      <form action="order_processing.php" method="POST">
        <ul class="form-list">

          <li class="form-list-row">
            <div class="user">
              <label for="#">Name</label><br>
              <?php
              if (isset($_SESSION['firstname'])) {
                echo '<i class="fas fa-user"></i></i><input type="text" name="name" value="' . $_SESSION['firstname'] . '" required>';
              } else {
                echo '<i class="fas fa-user"></i></i><input type="text" name = "name" required>';
              }
              ?>

            </div>
          </li>
          <li class="form-list-row">
            <div class="user">
              <label for="#">Email</label><br>
              <i class="fas fa-email"></i></i><input name="email" value="<?php
                                                                          if (isset($_SESSION['email'])) {
                                                                            echo $_SESSION['email'];
                                                                          } else {
                                                                            echo "";
                                                                          } ?>" type="text" required>
            </div>
          </li>
          <li class="form-list-row">
            <div class="user">
              <label for="#">Street Address</label><br>
              <i></i></i><input name="street_address" value="<?php
                                                              if (isset($_SESSION['address'])) {
                                                                echo $_SESSION['address'];
                                                              } else {
                                                                echo "";
                                                              } ?>" type="text" required>
            </div>
          </li>


          <li class="form-list-row">
            <div class="number">
              <label for="#">Card Number</label><br>
              <i class="far fa-credit-card"></i><input type="text" required>
            </div>
          </li>
          <li class="form-list-row clearfix">
            <div class="date">
              <label for="#">Expiration Date</label><br>
              <input class="month" type="text" required placeholder="MM">
              <input class="year" type="text" required placeholder="YY">
            </div>
            <div class="cvc">
              <label for="#">CVC</label><i class="fas fa-question-circle"></i><br>
              <input type="text" required placeholder="123">
            </div>
          </li>
          <li class="form-list-row">
            <div class="checkbox">
              <label for="checkbox">

              </label>
            </div>
          </li>
        </ul>
        <button name="order" value="<?php
                                    if (isset($_SESSION['sno'])) {
                                      echo $_SESSION['sno'];
                                    } else {
                                      echo "notFound";
                                    } ?>">Pay Now</button>
      </form>
    </div>
  </div>
</div>

<?php
include 'footer.php'
?>