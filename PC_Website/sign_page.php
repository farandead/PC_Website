<?php 
    include 'header.php'
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
        Registration PC GEEKS
    </div>
    <div class="login-form">
        <form action="signin_process.php" method="POST">
            <div class="input-container">
                <div class="input-container-heading">First Name</div>
                <div class="input-container-input"><input type="text" name="firstname" placeholder="Enter First Name"></div>
            </div>
            <div class="input-container">
                <div class="input-container-heading">Last Name</div>
                <div class="input-container-input"><input type="text" name="lastname" placeholder="Enter Last Name"></div>
            </div>
            <div class="input-container">
                <div class="input-container-heading">Email</div>
                <div class="input-container-input"><input type="email" name="email" placeholder="Enter Email"></div>
            </div>
            <div class="input-container">
                <div class="input-container-heading">Password</div>
                <div class="input-container-input"><input type="password" name="password" placeholder="Enter Password"></div>
            </div>
            <div class="input-container">
                <div class="input-container-heading">Address</div>
                <div class="input-container-input"><input type="text" name="address" placeholder="Enter Password"></div>
            </div>

            <button>REGISTER</button>
           <center> <span>Already a member? <span><a href="login_page.php">Login here !</a></span></span></center>

        </form>
        
    </div>
</div>


<br>
<br>
<br>
<br>



<?php 
    include 'footer.php'
?>






