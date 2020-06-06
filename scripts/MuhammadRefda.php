<?php



function display_my_info()
{
    $first_name = "Muhammad";
    $last_name = "Refda";
    $language = "PHP";
    $email = "muhammadrefda@gmail.com";
    $hng_id = "HNG-00121";

    return "Hello World, this is $first_name $last_name with HNGi7 ID $hng_id using $language for stage 2 task and $email";
}

echo (display_my_info());
