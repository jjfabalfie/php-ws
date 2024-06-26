<?php
if (empty($_POST["name"])) {
    die("Name is required");
}

filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { 
    die("Valid email is required");
}
if (strlen($_POST["password"] < 8) {
    die("Password must be at least 8 charecters");
}
if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Passowrd must contain at least one letter");
}
if ( ! preg_match("/[0-9]/i", $_POST["password"])) {
    die("Passowrd must contain at least one number");
}
$_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
print_r($_POST);
var_dump($password_hash);
?>
