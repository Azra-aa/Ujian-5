<?php 
include 'connect.php';

if (isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ( $username === "admin" ) {
        $result = mysqli_query($conn, "SELECT * FROM admin where username = '$username' AND password = '$password'");

        $row = mysqli_fetch_assoc($result);

        if ( mysqli_num_rows($result) === 1 ) {
            header("Location: admin/index.php");
            exit;
        } else {
            header("Location: login.php");
        }
    } else {
        $result = mysqli_query($conn, "SELECT * FROM user where username = '$username' AND password = '$password'");

        $row = mysqli_fetch_assoc($result);

        if ( mysqli_num_rows($result) === 1) {
            header("Location: user/index.php");
            exit;
        } else {
            header("Location: login.php");
        }
    }
}








?>