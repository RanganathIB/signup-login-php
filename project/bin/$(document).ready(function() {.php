$(document).ready(function() {
$('#noramlbtn').click(function() {


$("[name='email_err']").hide();
$("[name='name_err']").hide();
$("[name='pw_err']").hide();
$("[name='date_err']").hide();

var email = $("[name='email']").val();
var fullName = $("[name='fullName']").val();
var password = $("[name='password']").val();
var date_err = $("[name='date']").val();



if (email == '' && fullName == '' && password == '') {

$("[name='email_err']").show();
$("[name='name_err']").show();
$("[name='pw_err']").show();
$("[name='date_err']").show();

return false;
}
if (email == '') {
$("[name='email_err']").show();
// return false;
}
if (fullName == '') {
$("[name='name_err']").show();
// return false;
}
if (password == '') {
$("[name='pw_err']").show();
// return false;
}
if (date_err == '') {
$("[name='date_err']").show();
// return false;
}



// elseif(fullName =''){
// $("[name='name_err']").show().delay(5000).fadeOut();
// return false;
// }


// $.ajax({
// type: "POST",
// url: "register.php",
// data: {
// email: email,
// fullName: fullName,
// password: password,
// dob: dob
// },
// cache: false,
// success: function(data) {
// alert(data);
// // $('#div').html(data);
// // document.location('login.php');

// },
// error: function(xhr, status, error) {
// console.error(xhr);
// }
// });

});

});
});
<!--  -->


<!-- 2 -->


<div class="mb-6">

    <div class="relative">
        <input type="text" id="" name='fullName'
            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white peer"
            placeholder=" " />
        <label for="outlined_error fname"
            class="absolute text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Your
            Name</label>
    </div>
    <p id="outlined_error_help" name='name_err' class="hidden mt-2 text-xs text-red-600 dark:text-red-400"><span
            class="font-medium">Name</span>
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

        <label for="outlined_error pw"
            class="absolute text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
    </div>
    <p id="outlined_error_help" name='pw_err' class="hidden mt-2 text-xs text-red-600 dark:text-red-400"><span
            class="font-medium">Password</span> can't be empty.
    </p>


</div>

</div>

<!-- 4 -->

<div class="mb-8">
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <input datepicker datepicker-autohide type="text" name="date"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10  p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 peer"
            placeholder=" ">

        <label for="outlined_error datel"
            class="absolute text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">DOB</label>
    </div>

    <p id="outlined_error_help" name="date_err" class="hidden mt-2 text-xs text-red-600 dark:text-red-400"><span
            class="font-medium">Password</span> can't be empty.
    </p>


</div>

<!--  -->


                <!-- action="register.php" -->

                <!-- <div id="alert-2" class="flex p-4 mb-8 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                    <svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <div id="div" class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                        user with email already exist.
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300"
                        data-dismiss-target="#alert-2" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div> -->

                <!-- 1 -->


                <!--  -->



                else {
                if (email == '') {
                    $("[name='email_err']").show();
                    // alert("email");
                    // return false;
                }
                if (fullName == '') {
                    $("[name='name_err']").show();
                    // alert("fullName");
                    // return false;
                }
                if (password == '') {
                    $("[name='pw_err']").show();
                    // alert("password");
                    // return false;
                }
                if (date == '') {
                    $("[name='date_err']").show();
                    // alert("date");
                    return false;
                }
            }