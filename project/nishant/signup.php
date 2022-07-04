<?php

@include 'config.php';
session_start();


if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $hashedPassword = mysqli_real_escape_string($conn, md5($_POST['password']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //checking existence of a user for singup

    // reading from the database
    $select = " SELECT * FROM admin WHERE email = '$email' ";

    // connecting to the databse by $conn
    $result = mysqli_query($conn, $select);

    // user already exists validation
    if(mysqli_num_rows($result) > 0){   
      $error[] = 'user  with this email , '. $email .' already exist!';
    }
    else{

        if(strlen($password) < 5){
            $error[] = 'Password should be at least 5 characters in length';
        }
        else{
            // a new user
            // stroing new user deatils to the table
            $query = "insert into admin (name, email , password) values ('$name' , '$email','$hashedPassword')";
            mysqli_query($conn, $query);
    
            // redirecting them to the login page
            header('location:login.php');
        }


    }


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
</head>

<body>

    <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span>'.$error.'</span>';
            };
        };
    ?>
    <br> <br>

    <form method="POST">
        <label>Enter Your name</label> <br> <br>
        <input type="text" name="name" required> <br> <br>

        <label>Enter Your Email</label> <br> <br>
        <input type="email" name="email" required> <br> <br>

        <label>Enter Your Password</label> <br> <br>
        <input type="password" name="password" required> <br> <br>

        <label>Confirm Your Password</label> <br> <br>
        <input type="text" name="cPassword" required> <br> <br>

        <input type="submit" name="submit" value="signup" required> <br> <br>

        <span>Already an User <a href="login.php">Signin</a></span>

    </form>
</body>

</html>