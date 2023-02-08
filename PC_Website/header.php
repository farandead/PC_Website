<?php

error_reporting(E_ALL ^ E_NOTICE);
session_start();


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Website - For your software and hardware requirments</title>
    <link rel="stylesheet" href="css/index.css">
</head>
form
<div class="navigation-bar">
    <div class="navigation-logo">
        <a href="index.php"><img src="img/logo.png" alt=""></a>
    </div>
    <div class="navigation-menu">
        <ul>
            <li class="navitem">
                <a href="products_display_desktops.php">
                    <p>Desktops</p>
                </a>
            </li>
            <li class="navitem">
                <a href="contact_us.php">
                    <p>Contact Us</p>
                </a>
            </li>
            <li class="navitem">
                <a href="about_us.php">
                    <p>About Us</p>
                </a>
            </li>
            <li class="navitem">

                <?php
                if (isset($_SESSION['loggedIn'])) {
                    echo "<a href='userprofile.php'>
                    <p>Profile</p>
                </a>";
                } else {
                    echo ' <a href="login_page.php">
                    <p>Profile</p>
                </a>';
                } ?>

                
            </li>
        </ul>

    </div>
    <div class="navigation-icons">
        <ul>
            <?php
            if (isset($_SESSION['firstname'])) {
                echo '<li> <a href="userprofile.php"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg></a></li>';
            } else {
                echo '<li> <a href="login_page.php"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg></a></li>';
            } ?>
            <!-- <li> <a href="login_page.php"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg></a></li> -->

        </ul>

    </div>
</div>