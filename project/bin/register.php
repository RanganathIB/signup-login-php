<?php

    @include '../db/config.php';
 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $password = mysqli_real_escape_string($conn, md5 ($_POST['password']));
    $password1 = mysqli_real_escape_string($conn, ($_POST['password']));
    $dob = mysqli_real_escape_string($conn, $_POST['date']);


    if(strlen($fullName) < 3){
        echo 'name should be greater than 5';
    } elseif(strlen($password1) < 3) {
        echo 'password should be greater than 5';
    } elseif(strlen($password) < 3) {
        echo 'password should be greater than 5';
    }
?>