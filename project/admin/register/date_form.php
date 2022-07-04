<?php
    session_start();

    @include '../db/config.php';
    @include '../loader/loader.php';
    
    if(!isset($_SESSION['email'])){
        header('location:signup_form.php');
     }
    //  else{
    //     echo $_SESSION['email'];
    //     // echo "set";
    //  }

    $adminName = $_SESSION['adminName'];
    $adminEmail =  $_SESSION['email'];
    $adminHashPassword = $_SESSION['hashPassword'];

    if(isset($_POST['submit'])){
        $date = (mysqli_real_escape_string($conn, $_POST['date']));
        $date1 = explode ("/", $date); 
        $date2 = $date1[0].$date1[1].$date1[2]; 
        echo $date2;

        $query = "insert into admin (admin_name, admin_email , admin_password , dob) values ('$adminName' , '$adminEmail' , '$adminHashPassword' , $date2)";
        mysqli_query($conn, $query);
        header('location:../signin/signin_form.php');
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php @include 'links.php' ?>
    <title> Admin Signup </title>
    <style>
    .body-bg {
        background-color: #9921e8;
        background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
    }
    </style>
</head>

<body class="box-border body-bg min-h-screen pt-12 md:pt-8 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-0 rounded-lg shadow-2xl box-border">

        <section class="flex justify-center">
            <span class="font-bold ">Recovery Question</span>
        </section>

        <section class="mt-8">
            <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800"
                role="alert">
                <span class="font-bold">Choose Your DOB or any special date as recovery question.<br> <span
                        class="text-red-600">Don't share with it anyone!</span>
                </span>
            </div>


            <form class="mt-6 flex flex-col" method="POST" id="first_form">

                <div class="mb-6">

                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input datepicker datepicker-autohide type="text" required autocomplete=off name="date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date">
                    </div>

                </div>


                <input type="submit" id="noramlbtn"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 cursor-pointer"
                    name="submit" value="Sign In" />

            </form>

        </section>



</body>

</html>