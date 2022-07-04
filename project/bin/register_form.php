<?php

@include '../loader/loader.php';
@include '../db/config.php';


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
                <!-- action="register.php" -->

                <div id="div" class="hidden">
                    <div id="succes" class="">
                        <div id="alert-1" class="flex p-4 mb-4 bg-blue-100 rounded-lg dark:bg-blue-200" role="alert">
                            <svg class="flex-shrink-0 w-5 h-5 text-blue-700 dark:text-blue-800" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div id="output" class="ml-3 text-sm font-medium text-blue-700 dark:text-blue-800">

                            </div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-blue-200 dark:text-blue-600 dark:hover:bg-blue-300"
                                data-dismiss-target="#alert-1" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- 1 -->

                <div class="mb-6">

                    <div class="relative">
                        <input type="text" id="" name="email" aria-describedby="outlined_error_help"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 appearance-none dark:text-white dark:border-red-500 border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer"
                            placeholder=" " />

                        <label for="outlined_error"
                            class="absolute text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
                    </div>
                    <p id="outlined_error_help" name="email_err"
                        class="hidden mt-2 text-xs text-red-600 dark:text-red-400"><span
                            class="font-medium">Email</span> can't be empty.
                    </p>
                </div>

                <!-- 2 -->

                <div class="mb-6">

                    <div class="relative">
                        <input type="text" id="" name='fullName'
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white peer"
                            placeholder=" " />
                        <label for="outlined_error"
                            class="absolute text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Your
                            Name</label>
                    </div>
                    <p id="outlined_error_help" name='name_err'
                        class="hidden mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Name</span>
                        can't be empty.
                    </p>
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

                        <input type="password" name="password" id="" autocomplete=off name='password'
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white peer js-password"
                            placeholder=" " autocomplete=off />

                        <label for="outlined_error"
                            class="absolute text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
                    </div>
                    <p id="outlined_error_help" name='pw_err'
                        class="hidden mt-2 text-xs text-red-600 dark:text-red-400"><span
                            class="font-medium">Password</span> can't be empty.
                    </p>


                </div>

                <!-- 4 -->

                <div class="mb-8">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input datepicker datepicker-autohide type="text" name="date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10  p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 peer"
                            placeholder=" ">

                        <label for="outlined_error"
                            class="absolute text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">DOB</label>
                    </div>

                    <p id="outlined_error_help" name="date_err"
                        class="hidden mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Date</span>
                        can't be empty.
                    </p>


                </div>

                <input type="submit" id="noramlbtn"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 cursor-pointer"
                    name="submit" value="Sign In" />





            </form>
        </section>
    </main>

    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">Already have an account? <a href="../register/register.php"
                class="font-bold hover:underline">Sign in</a></p>
    </div>

    <script src="../js/app.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#first_form').submit(function(e) {

            console.log("sdklkdsl");

            var email = $("[name='email']").val();
            var fullName = $("[name='fullName']").val();
            var password = $("[name='password']").val();
            var date = $("[name='date']").val();

            $("[name='email_err']").hide();
            $("[name='name_err']").hide();
            $("[name='pw_err']").hide();
            $("[name='date_err']").hide();

            if (email == '' && fullName == '' && password == '' && date == '') {
                e.preventDefault();
                $("[name='email_err']").show();
                $("[name='name_err']").show();
                $("[name='pw_err']").show();
                $("[name='date_err']").show();
            } else {
                if (email == '') {
                    e.preventDefault();
                    $("[name='email_err']").show();
                }
                if (fullName == '') {
                    e.preventDefault();
                    $("[name='name_err']").show();
                }
                if (password == '') {
                    e.preventDefault();
                    $("[name='pw_err']").show();
                }
                if (date == '') {
                    e.preventDefault();
                    $("[name='date_err']").show();
                    // return false;
                }
            }

            $.ajax({

                type: "POST",
                url: "register.php",
                data: {
                    email: email,
                    fullName: fullName,
                    password: password,
                    date: date
                },
                cache: false,
                success: function(data) {
                    $('#output').html(data);
                    $("#div").show();
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