<?php

@include "../loader/loader.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php @include '../register/links.php' ?>
    <title> Admin Signin </title>
    <style>
    .body-bg {
        background-color: #9921e8;
        background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
    }
    </style>
</head>



<body class="box-border body-bg min-h-screen pt-12 md:pt-8 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif; ">

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-5 rounded-lg shadow-2xl box-border">

        <section>
            <h3 class="font-bold text-2xl">Welcome to e-learn</h3>
            <p class="text-gray-600 pt-2 mb-4">Signin to admin account.</p>
        </section>

        <section class="mt-6">
            <div id="alert-box"
                class="hidden p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                role="alert">
                <span class="font-bold" id="output"></span>
            </div>

            <form class="mt-6 flex flex-col" method="POST" id="first_form">
                <!-- 2 -->

                <div class="mb-6">

                    <div class="relative">
                        <input type="text" id="floating_outlined" required name="email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-gray-300 appearance-none dark:text-white    
                        peer" placeholder=" " />

                        <label for="floating_outlined"
                            class="absolute text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
                    </div>

                </div>

                <!-- 3 -->

                <div class="mb-6">
                    <div class="relative">

                        <div class="absolute inset-y-0 right-0 flex items-center px-2">

                            <input class="hidden js-password-toggle" id="toggle" type="checkbox" />

                            <label
                                class="bg-gray-300 hover:bg-gray-400 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer js-password-label"
                                for="toggle"> show
                            </label>

                        </div>

                        <input type="password" name="password" id="" autocomplete=off name='password' required
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white peer js-password"
                            placeholder=" " autocomplete=off />

                        <label for="floating_outlined"
                            class="absolute text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
                    </div>


                </div>
                <div class="flex justify-end">
                    <a href="forgot_password_form"
                        class="text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6">Forgot your
                        password?</a>
                </div>

                <input type="submit" id="noramlbtn"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 cursor-pointer"
                    name="submit" value="Next" />

            </form>
        </section>
    </main>

    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white font-family:'Lato',sans-serif tracking-wide">Don't have an account? <a
                href="../register/signup_form.php" class="font-bold hover:underline">Sign up</a>.</p>
    </div>

    <footer class="max-w-lg mx-auto flex justify-center text-white mb-6">
        <a href="#" class="text-white font-family:'Lato',sans-serif tracking-wide hover:underline">Contact</a>
        <span class="mx-3">•</span>
        <a href="#" class="text-white font-family:'Lato',sans-serif tracking-wide hover:underline">Privacy</a>
    </footer>

    <script src="../js/app.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {


        $('#first_form').submit(function(e) {

            var email = $("[name='email']").val();
            var password = $("[name='password']").val();
            e.preventDefault();

            $.ajax({

                type: "POST",
                url: "signin.php",
                data: {
                    email: email,
                    password: password,

                },
                cache: false,
                success: function(data) {
                    if ($.trim(data) === "SUCCESS") {
                        document.location = "../dashboard/index.php"
                    } else {
                        $("#alert-box").show();
                        $('#output').html(data);
                    }
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