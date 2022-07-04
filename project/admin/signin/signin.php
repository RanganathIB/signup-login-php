<?php

    session_start();
    @include '../db/config.php';
 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    //$hashPassword for checking the user existence
    $hashPassword = mysqli_real_escape_string($conn, md5($_POST['password']));
    // try without it
    $notHashPassword = mysqli_real_escape_string($conn, ($_POST['password']));

    $select = " SELECT * FROM admin WHERE admin_email = '$email' && admin_password = '$hashPassword' ";
    // $select = " SELECT * FROM admin WHERE admin_email = '$email' && admin_password = '$notHashPassword' ";

    $result = mysqli_query($conn, $select);

    $row = mysqli_fetch_array($result);

    if( mysqli_num_rows($result) > 0 ){

        // $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['email'] = $row['admin_email'];
        echo "SUCCESS";
        // header('location:index.php');

    }

    else{
        
        echo "We can't find the user with the email , $email and password . Try another email and password";
    }

?>