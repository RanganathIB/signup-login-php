<?php

    session_start();
    @include '../db/config.php';
 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $adminName = mysqli_real_escape_string($conn, $_POST['adminName']);
    //$hashPassword for adding it to the database
    $hashPassword = mysqli_real_escape_string($conn, md5($_POST['password']));
     //$password for checking strength of password
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = " SELECT * FROM admin WHERE admin_email = '$email' ";

    // connecting to the databse by $conn
    $result = mysqli_query($conn, $select);

    // user already exists validation
    if(mysqli_num_rows($result) > 0){   
      echo 'user  with this email , '. $email .' already exist!';
      die();
    }

    $uppercase = preg_match('@[A-Z]@', $adminName);
    $lowercase = preg_match('@[a-z]@', $adminName);
    $number    = preg_match('@[0-9]@', $adminName);
    
    $uppercase1 = preg_match('@[A-Z]@', $password);
    $lowercase1 = preg_match('@[a-z]@', $password);
    $number1    = preg_match('@[0-9]@', $password);

    if(!$uppercase || !$lowercase || $number || strlen($adminName) < 5) {
        echo 'Admin Name should be at least 5 characters in length and should include only uppercase and lowercase letters';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Enter a  valid Email";
    }elseif(!$uppercase1 || !$lowercase1 || !$number1 || strlen($password) < 8) {
        echo "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    }else{
        echo "SUCCESS"; 
        $_SESSION['email'] = $email;
        $_SESSION['adminName'] = $adminName;
        $_SESSION['hashPassword'] = $hashPassword;

    }

?>