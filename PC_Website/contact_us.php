<?php 
    include 'header.php'
?>

<head>
    <link rel="stylesheet" href="css/contact_us.css">
</head>
<br>
<br>
<br>
<br>

<div class="contact-form-container">
    <div class="contact-form-logo">
        <img src="img/logo.png" alt="">
    </div>
    <div class="contact-form-heading">
        CONNECT WITH PC GEEKS
    </div>

    <div class="contact-form">
        <form action="">
            <div class="input-container">
                <div class="input-container-heading">Name</div>
                <div class="input-container-input"><input type="text" placeholder="Enter Name"></div>
            </div>
            <div class="input-container">
                <div class="input-container-heading">Email</div>
                <div class="input-container-input"><input type="text" placeholder="Enter Email"></div>
            </div>
            <div class="input-container">
                <div class="input-container-heading">Message</div>
                <div class="input-container-input"><input type="text" id="message" placeholder="Enter Your Message"></div>
            </div>
            

            <button>SEND &nbsp;&nbsp; <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
              </svg></span> </button>
         

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