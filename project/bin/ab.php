<?php

@include '../loader/loader.php';
@include '../db/config.php';

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // echo $email;

    if(strlen($email) > 3){
        $error[] = 'User Name should be utmost 3 characters in length';
    }


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    <?php @include 'links.php' ?>
    <title> Admin Register </title>
    <style>
    .body-bg {
        background-color: #9921e8;
        background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
    }
    </style>
</head>

<body class="box-border body-bg min-h-screen pt-12 md:pt-8 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">


    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-5 rounded-lg shadow-2xl box-border">
        <section>
            <h3 class="font-bold text-2xl">Welcome to e-learn</h3>
            <p class="text-gray-600 pt-2 mb-6">Sign in to admin account.</p>
        </section>

        <section class="mt-8">
            <form class="flex flex-col" method="POST" id="first_form">

                <!-- 1 -->

                <div class="mb-6">

                    <div class="relative">
                        <input type="text" id="floating_outlined" name="email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 appearance-none dark:text-white    
                        peer" placeholder=" " />

                        <label for="floating_outlined"
                            class="absolute text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
                    </div>
  
                </div>


                <input type="submit" id="noramlbtn"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 cursor-pointer"
                    name="submit" value="Sign In" />

            </form>
        </section>
    </main>


    <script src="../js/app.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#first_form').submit(function(e) {

            var email = $("[name='email']").val();
            $("[name='email_err']").hide();


            if (email == '') {
                e.preventDefault();
                $("[name='email_err']").show();

            }


            $.ajax({

                type: "POST",
                url: "register.php",
                data: {
                    email: email,

                },
                cache: false,
                success: function(data) {
                    // $('#output').html(data);
                    // $("#div").show();
                },
                error: function(xhr, status, error) {
                    console.error(xhr);
                }
            });

        });

    });
    </script>
</body>

</html>