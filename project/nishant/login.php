<?php

    @include 'config.php';
    session_start();

    if(isset($_POST['submit'])){

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $hashedPassword = mysqli_real_escape_string($conn, md5($_POST['password']));            
        // try without adding md5 to it
        // $password = mysqli_real_escape_string($conn, $_POST['password']);            
    
        $select = " SELECT * FROM admin WHERE email = '$email' && password = '$hashedPassword' ";
        // $select = " SELECT * FROM admin WHERE email = '$email' && password = '$password' ";

        $result = mysqli_query($conn, $select);
        
        $row = mysqli_fetch_array($result);


        if( mysqli_num_rows($result) > 0 ){

            $_SESSION['email'] = $row['email'];
            
            header('location:index.php');

        }

        else{
            
            $error[] = "We can't find the user with the email , $email and password . Try another email and password";
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

        <label>Enter Your Email</label> <br> <br>
        <input type="email" name="email" required> <br> <br>

        <label>Enter Your Password</label> <br> <br>
        <input type="password" name="password" required> <br> <br>

        <input type="submit" name="submit" value="signin" required> <br> <br>

        <span>Don't have an account <a href="signup.php">Signup</a></span>

    </form>
</body>

</html>