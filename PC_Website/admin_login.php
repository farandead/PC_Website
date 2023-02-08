<?php 
    include 'header.php';
    session_start();
?>
<head>
    <link rel="stylesheet" href="css/login.css">
</head>
<br>
<br>
<br>
<br>
<div class="login-container">
    <div class="login-logo">
        <img src="img/logo.png" alt="">
    </div>
    <div class="login-heading">
        ADMIN LOGIN PC GEEKS
    </div>
    <div class="login-form">
        <form action="admin_login_auth.php" method="GET">
            <div class="input-container">
                <div class="input-container-heading">Email</div>
                <div class="input-container-input"><input name="email" type="email" placeholder="Enter Email"></div>
            </div>
            <div class="input-container">
                <div class="input-container-heading">Password</div>
                <div class="input-container-input"><input name="password" type="password" placeholder="Enter Password"></div>
            </div>

            <button>LOGIN</button>
           <center> <span>Not a Admin? <span><a href="login_page.php">Login here !</a></span></span></center>

        </form>
        
    </div>
</div>


<br>
<br>
<br>
<br>









