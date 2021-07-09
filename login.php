<?php 
include "login-system.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css" />

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>Zra Online Shop | Sign In Page</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

</head>
<body>
<div class="content">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <img src="assets/img/images/undraw_web_shopping_dd4l.svg" alt="Image" class="img-fluid" />
        </div>
        <div class="col-md-6 contents">
            <?php if (isset($_SESSION["gagal"])) { ?>
                <div class="alert alert-danger" role="alert">
                Username/Password salah!!
                </div>
            <?php } ?>
            <?php if (isset($_GET['pesan'])){ ?>
                <div class="alert alert-danger" role="alert">
                Logout Berhasil!!
                </div>
            <?php } ?>
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="mb-4">
                <h3>Sign In</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
            <form action="login-system.php" method="post">
                <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username"/>
                </div>
                <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"/>
                </div>

                <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"
                    ><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary" name="login"/>

            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
