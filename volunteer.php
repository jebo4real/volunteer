<?php
include "layout/header.php";
include "layout/menu.php";
?>
<link rel="stylesheet" type="text/css" href="assets/styles/about.css">
<!-- Home Header -->

<div class="home">
    <div class="home_background" style="background-image:url(assets/images/events.jpg)"></div>
    <div class="home_content">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row align-items-center justify-content-start">
                    <div class="home_title">Volunteer Sign Up</div>
                    <div class="breadcrumbs ml-auto">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Volunterr Signup</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Signup Form -->

<div class="about">
    <div class="container">
        <?php if(isset($_GET['response'])){
            $response = $_GET['response'];
            if($response == "success"){
                include "alerts/success.php"; 
            }else if($response == "error"){
                include "alerts/error.php"; 
            }else if($response == "wrongcaptcha"){
                include "alerts/wrongcaptcha.php";
                include "forms/volunteer_signup_form.php"; 
            }
        }else{
            include "forms/volunteer_signup_form.php"; 
        }
        ?>    
    </div>
</div>

<?php include "layout/footer.php"; ?>	